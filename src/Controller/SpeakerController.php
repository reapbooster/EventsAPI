<?php

namespace App\Controller;

use App\Entity\Speaker;
use App\JsonApi\Document\Speaker\SpeakerDocument;
use App\JsonApi\Document\Speaker\SpeakersDocument;
use App\JsonApi\Transformer\SpeakerResourceTransformer;
use App\Repository\SpeakerRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/speakers")
 */
class SpeakerController extends Controller {

  /**
   * @Route("/", name="speakers_index", methods="GET")
   */
  public function index(SpeakerRepository $speakerRepository, ResourceCollection $resourceCollection): ResponseInterface {
    $this->query = $this->container->get('request_stack')
      ->getCurrentRequest()->query;
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
    $resourceCollection->setRepository($speakerRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.spkrid", "desc");
    $resourceCollection->handleIndexRequest();

    return $this->jsonApi()->respond()->ok(
      new SpeakersDocument(new SpeakerResourceTransformer()),
      $resourceCollection
    );
  }

  /**
   * @Route("/{spkrid}", name="speakers_show", methods="GET")
   */
  public function show(Speaker $speaker): ResponseInterface {
    return $this->jsonApi()->respond()->ok(
      new SpeakerDocument(new SpeakerResourceTransformer()),
      $speaker
    );
  }

}
