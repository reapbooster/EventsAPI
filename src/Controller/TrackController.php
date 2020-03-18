<?php

namespace App\Controller;

use App\Entity\Track;
use App\JsonApi\Document\Track\TrackDocument;
use App\JsonApi\Document\Track\TracksDocument;
use App\JsonApi\Hydrator\Track\CreateTrackHydrator;
use App\JsonApi\Hydrator\Track\UpdateTrackHydrator;
use App\JsonApi\Transformer\TrackResourceTransformer;
use App\Repository\TrackRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/tracks")
 */
class TrackController extends Controller
{
    /**
     * @Route("/", name="tracks_index", methods="GET")
     */
    public function index(TrackRepository $trackRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($trackRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new TracksDocument(new TrackResourceTransformer()),
            $resourceCollection
        );
    }

    /**
     * @Route("/", name="tracks_new", methods="POST")
     */
    public function new(ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $track = $this->jsonApi()->hydrate(new CreateTrackHydrator($entityManager, $exceptionFactory), new Track());

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($track);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->persist($track);
        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new TrackDocument(new TrackResourceTransformer()),
            $track
        );
    }

    /**
     * @Route("/{id}", name="tracks_show", methods="GET")
     */
    public function show(Track $track): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new TrackDocument(new TrackResourceTransformer()),
            $track
        );
    }

    /**
     * @Route("/{id}", name="tracks_edit", methods="PATCH")
     */
    public function edit(Track $track, ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $track = $this->jsonApi()->hydrate(new UpdateTrackHydrator($entityManager, $exceptionFactory), $track);

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($track);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new TrackDocument(new TrackResourceTransformer()),
            $track
        );
    }

    /**
     * @Route("/{id}", name="tracks_delete", methods="DELETE")
     */
    public function delete(Request $request, Track $track): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($track);
        $entityManager->flush();

        return $this->jsonApi()->respond()->genericSuccess(204);
    }
}
