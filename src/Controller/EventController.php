<?php

namespace App\Controller;

use App\Entity\Event;
use App\JsonApi\Document\Event\EventDocument;
use App\JsonApi\Document\Event\EventsDocument;
use App\JsonApi\Hydrator\Event\CreateEventHydrator;
use App\JsonApi\Hydrator\Event\UpdateEventHydrator;
use App\JsonApi\Transformer\EventResourceTransformer;
use App\Repository\EventRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/jsonapi/events")
 */
class EventController extends Controller
{
    /**
     * @Route("/", name="events_index", methods="GET")
     */
    public function index(EventRepository $eventRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($eventRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new EventsDocument(new EventResourceTransformer()),
            $resourceCollection
        );
    }

    /**
     * @Route("/{eventid}", name="events_show", methods="GET")
     */
    public function show(Event $event): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new EventDocument(new EventResourceTransformer()),
            $event
        );
    }

}
