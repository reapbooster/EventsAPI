<?php

namespace App\Controller;

use App\Entity\PanelSpeaker;
use App\JsonApi\Document\PanelSpeaker\PanelSpeakerDocument;
use App\JsonApi\Document\PanelSpeaker\PanelSpeakersDocument;
use App\JsonApi\Hydrator\PanelSpeaker\CreatePanelSpeakerHydrator;
use App\JsonApi\Hydrator\PanelSpeaker\UpdatePanelSpeakerHydrator;
use App\JsonApi\Transformer\PanelSpeakerResourceTransformer;
use App\Repository\PanelSpeakerRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/panel/speakers")
 */
class PanelSpeakerController extends Controller
{
    /**
     * @Route("/", name="panel_speakers_index", methods="GET")
     */
    public function index(PanelSpeakerRepository $panelSpeakerRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($panelSpeakerRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new PanelSpeakersDocument(new PanelSpeakerResourceTransformer()),
            $resourceCollection
        );
    }



    /**
     * @Route("/{id}", name="panel_speakers_show", methods="GET")
     */
    public function show(PanelSpeaker $panelSpeaker): ResponseInterface
    {
        return $this->jsonApi()->respond()->ok(
            new PanelSpeakerDocument(new PanelSpeakerResourceTransformer()),
            $panelSpeaker
        );
    }


}
