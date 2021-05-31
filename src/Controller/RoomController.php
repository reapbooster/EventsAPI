<?php

namespace App\Controller;

use App\Entity\Room;
use App\JsonApi\Document\Room\RoomDocument;
use App\JsonApi\Document\Room\RoomsDocument;
use App\JsonApi\Transformer\RoomResourceTransformer;
use App\Repository\RoomRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/rooms")
 */
class RoomController extends Controller {

  /**
   * @Route("/", name="rooms_index", methods="GET")
   */
  public function index(RoomRepository $roomRepository, ResourceCollection $resourceCollection): ResponseInterface {
    $this->query = $this->container->get('request_stack');
    $this->query = $this->container->get('request_stack')
      ->getCurrentRequest()->query;
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
    $resourceCollection->setRepository($roomRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.id", "desc");
    $resourceCollection->handleIndexRequest();

    return $this->jsonApi()->respond()->ok(
      new RoomsDocument(new RoomResourceTransformer()),
      $resourceCollection
    );
  }


  /**
   * @Route("/{roomId}", name="rooms_show", methods="GET")
   */
  public function show(Room $room): ResponseInterface {
    return $this->jsonApi()->respond()->ok(
      new RoomDocument(new RoomResourceTransformer()),
      $room
    );
  }


}
