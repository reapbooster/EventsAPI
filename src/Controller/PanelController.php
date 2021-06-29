<?php

namespace App\Controller;

use App\Entity\Panel;
use App\JsonApi\Document\Panel\PanelDocument;
use App\JsonApi\Document\Panel\PanelsDocument;
use App\JsonApi\Hydrator\Panel\CreatePanelHydrator;
use App\JsonApi\Hydrator\Panel\UpdatePanelHydrator;
use App\JsonApi\Transformer\PanelResourceTransformer;
use App\Repository\PanelRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use WoohooLabs\Yin\JsonApi\Exception\DefaultExceptionFactory;

/**
 * @Route("/jsonapi/panels")
 */
class PanelController extends Controller {

  /**
   * @Route("/", name="panels_index", methods="GET")
   */
  public function index(PanelRepository $panelRepository, ResourceCollection $resourceCollection): ResponseInterface {
    $resourceCollection->setRepository($panelRepository);
    $resourceCollection->getQuery()->setMaxResults("10000");
    $resourceCollection->getQuery()->orderBy("r.id", "desc");
    $resourceCollection->handleIndexRequest();
    return $this->jsonApi()->respond()->ok(
      new PanelsDocument(new PanelResourceTransformer()),
      $resourceCollection
    );
  }


  /**
   * @Route("/{id}", name="panels_show", methods="GET")
   */
  public function show(Panel $panel): ResponseInterface {
    return $this->jsonApi()->respond()->ok(
      new PanelDocument(new PanelResourceTransformer()),
      $panel
    );
  }

}
