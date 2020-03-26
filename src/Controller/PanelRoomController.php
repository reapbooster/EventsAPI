<?php

namespace App\Controller;

use App\Entity\PanelRoom;
use App\JsonApi\Document\PanelRoom\PanelRoomDocument;
use App\JsonApi\Document\PanelRoom\PanelRoomsDocument;
use App\JsonApi\Hydrator\PanelRoom\CreatePanelRoomHydrator;
use App\JsonApi\Hydrator\PanelRoom\UpdatePanelRoomHydrator;
use App\JsonApi\Transformer\PanelRoomResourceTransformer;
use App\Repository\PanelRoomRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/panel/rooms")
 */
class PanelRoomController extends Controller
{
    /**
     * @Route("/", name="panel_rooms_index", methods="GET")
     */
    public function index(PanelRoomRepository $panelRoomRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($panelRoomRepository);

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
