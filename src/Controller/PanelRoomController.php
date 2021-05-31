<?php

namespace App\Controller;

use App\Entity\PanelRoom;
use App\JsonApi\Document\PanelRoom\PanelRoomDocument;
use App\JsonApi\Document\PanelRoom\PanelRoomsDocument;
use App\JsonApi\Transformer\PanelRoomResourceTransformer;
use App\Repository\PanelRoomRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/panel/rooms")
 */
class PanelRoomController extends Controller
{
  /**
   * @Route("/", name="panel_rooms_index", methods="GET")
   */
  public function index(
    PanelRoomRepository $panelRoomRepository,
    ResourceCollection $resourceCollection
  ): ResponseInterface {
    $this->query = $this->container->get('request_stack');
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
    $resourceCollection->setRepository($panelRoomRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.id", "desc");
    $resourceCollection->handleIndexRequest();

    return $this->jsonApi()->respond()->ok(
      new PanelRoomsDocument(new PanelRoomResourceTransformer()),
      $resourceCollection
    );
  }


  /**
   * @Route("/{id}", name="panel_rooms_show", methods="GET")
   */
  public function show(PanelRoom $panelRoom): ResponseInterface
  {
    return $this->jsonApi()->respond()->ok(
      new PanelRoomDocument(new PanelRoomResourceTransformer()),
      $panelRoom
    );
  }

}
