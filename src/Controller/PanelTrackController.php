<?php

namespace App\Controller;

use App\Entity\PanelTrack;
use App\JsonApi\Document\PanelTrack\PanelTrackDocument;
use App\JsonApi\Document\PanelTrack\PanelTracksDocument;
use App\JsonApi\Transformer\PanelTrackResourceTransformer;
use App\Repository\PanelTrackRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/panel/tracks")
 */
class PanelTrackController extends Controller
{
  /**
   * @Route("/", name="panel_tracks_index", methods="GET")
   */
  public function index(PanelTrackRepository $panelTrackRepository, ResourceCollection $resourceCollection): ResponseInterface
  {
    $this->query = $this->container->get('request_stack');
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
    $resourceCollection->setRepository($panelTrackRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.id", "desc");
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
