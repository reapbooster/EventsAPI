<?php

namespace App\Controller;

use App\Entity\PanelTrack;
use App\JsonApi\Document\PanelTrack\PanelTrackDocument;
use App\JsonApi\Document\PanelTrack\PanelTracksDocument;
use App\JsonApi\Hydrator\PanelTrack\CreatePanelTrackHydrator;
use App\JsonApi\Hydrator\PanelTrack\UpdatePanelTrackHydrator;
use App\JsonApi\Transformer\PanelTrackResourceTransformer;
use App\Repository\PanelTrackRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/panel/tracks")
 */
class PanelTrackController extends Controller
{
    /**
     * @Route("/", name="panel_tracks_index", methods="GET")
     */
    public function index(PanelTrackRepository $panelTrackRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($panelTrackRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new PanelTracksDocument(new PanelTrackResourceTransformer()),
            $resourceCollection
        );
    }

    /**
     * @Route("/{id}", name="panel_tracks_show", methods="GET")
     */
    public function show(PanelTrack $panelTrack): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new PanelTrackDocument(new PanelTrackResourceTransformer()),
            $panelTrack
        );
    }

}
