<?php

namespace App\Controller;

use App\Entity\Speaker;
use App\JsonApi\Document\Speaker\SpeakerDocument;
use App\JsonApi\Document\Speaker\SpeakersDocument;
use App\JsonApi\Hydrator\Speaker\CreateSpeakerHydrator;
use App\JsonApi\Hydrator\Speaker\UpdateSpeakerHydrator;
use App\JsonApi\Transformer\SpeakerResourceTransformer;
use App\Repository\SpeakerRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/speakers")
 */
class SpeakerController extends Controller
{
    /**
     * @Route("/", name="speakers_index", methods="GET")
     */
    public function index(SpeakerRepository $speakerRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($speakerRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new SpeakersDocument(new SpeakerResourceTransformer()),
            $resourceCollection
        );
    }

    /**
     * @Route("/", name="speakers_new", methods="POST")
     */
    public function new(ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $speaker = $this->jsonApi()->hydrate(new CreateSpeakerHydrator($entityManager, $exceptionFactory), new Speaker());

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($speaker);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->persist($speaker);
        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new SpeakerDocument(new SpeakerResourceTransformer()),
            $speaker
        );
    }

    /**
     * @Route("/{spkrid}", name="speakers_show", methods="GET")
     */
    public function show(Speaker $speaker): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new SpeakerDocument(new SpeakerResourceTransformer()),
            $speaker
        );
    }

    /**
     * @Route("/{spkrid}", name="speakers_edit", methods="PATCH")
     */
    public function edit(Speaker $speaker, ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $speaker = $this->jsonApi()->hydrate(new UpdateSpeakerHydrator($entityManager, $exceptionFactory), $speaker);

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($speaker);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new SpeakerDocument(new SpeakerResourceTransformer()),
            $speaker
        );
    }

    /**
     * @Route("/{spkrid}", name="speakers_delete", methods="DELETE")
     */
    public function delete(Request $request, Speaker $speaker): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($speaker);
        $entityManager->flush();

        return $this->jsonApi()->respond()->genericSuccess(204);
    }
}
