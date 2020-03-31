<?php

namespace App\Controller;

use App\Entity\Room;
use App\JsonApi\Document\Room\RoomDocument;
use App\JsonApi\Document\Room\RoomsDocument;
use App\JsonApi\Hydrator\Room\CreateRoomHydrator;
use App\JsonApi\Hydrator\Room\UpdateRoomHydrator;
use App\JsonApi\Transformer\RoomResourceTransformer;
use App\Repository\RoomRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/jsonapi/rooms")
 */
class RoomController extends Controller
{
    /**
     * @Route("/", name="rooms_index", methods="GET")
     */
    public function index(RoomRepository $roomRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($roomRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new RoomsDocument(new RoomResourceTransformer()),
            $resourceCollection
        );
    }



    /**
     * @Route("/{roomId}", name="rooms_show", methods="GET")
     */
    public function show(Room $room): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new RoomDocument(new RoomResourceTransformer()),
            $room
        );
    }


}
