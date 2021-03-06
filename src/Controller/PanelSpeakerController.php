<?php

namespace App\Controller;

use App\Entity\PanelSpeaker;
use App\JsonApi\Document\PanelSpeaker\PanelSpeakerDocument;
use App\JsonApi\Document\PanelSpeaker\PanelSpeakersDocument;
use App\JsonApi\Transformer\PanelSpeakerResourceTransformer;
use App\Repository\PanelSpeakerRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/panel/speakers")
 */
class PanelSpeakerController extends Controller
{
  /**
   * @Route("/", name="panel_speakers_index", methods="GET")
   */
  public function index(PanelSpeakerRepository $panelSpeakerRepository, ResourceCollection $resourceCollection): ResponseInterface
  {
    $resourceCollection->setRepository($panelSpeakerRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.id", "desc");
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
