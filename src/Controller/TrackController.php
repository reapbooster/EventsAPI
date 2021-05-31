<?php

namespace App\Controller;

use App\Entity\Track;
use App\JsonApi\Document\Track\TrackDocument;
use App\JsonApi\Document\Track\TracksDocument;
use App\JsonApi\Transformer\TrackResourceTransformer;
use App\Repository\TrackRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/tracks")
 */
class TrackController extends Controller {

  /**
   * @Route("/", name="tracks_index", methods="GET")
   */
  public function index(TrackRepository $trackRepository, ResourceCollection $resourceCollection): ResponseInterface {
    $this->query = $this->container->get('request_stack')
      ->getCurrentRequest()->query;
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
    $resourceCollection->setRepository($trackRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.spkrid", "desc");
    $resourceCollection->handleIndexRequest();

    return $this->jsonApi()->respond()->ok(
      new TracksDocument(new TrackResourceTransformer()),
      $resourceCollection
    );
  }


  /**
   * @Route("/{trackId}", name="tracks_show", methods="GET")
   */
  public function show(Track $track): ResponseInterface {
    return $this->jsonApi()->respond()->ok(
      new TrackDocument(new TrackResourceTransformer()),
      $track
    );
  }

}
