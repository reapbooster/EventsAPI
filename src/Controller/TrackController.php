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
 * @Route("/jsonapi/tracks")
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
     * @Route("/{trackId}", name="tracks_show", methods="GET")
     */
    public function show(Track $track): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new TrackDocument(new TrackResourceTransformer()),
            $track
        );
    }

}
