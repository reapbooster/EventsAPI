<?php

namespace App\Controller;

use App\Entity\Panel;
use App\JsonApi\Document\Panel\PanelDocument;
use App\JsonApi\Document\Panel\PanelsDocument;
use App\JsonApi\Transformer\PanelResourceTransformer;
use App\Repository\PanelRepository;
use Paknahad\JsonApiBundle\Controller\Controller;
use Paknahad\JsonApiBundle\Helper\ResourceCollection;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/jsonapi/panels")
 */
class PanelController extends Controller
{

  /**
   * @Route("/", name="panels_index", methods="GET")
   */
  public function index(PanelRepository $panelRepository, ResourceCollection $resourceCollection): ResponseInterface
  {
    $this->query = $this->container->get('request_stack');
    $page = array_merge([
      "number" => 1,
      "size" => 50,
    ], $this->query->get('page', []));
    $this->query->set('page', $page);
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
  public function show(Panel $panel): ResponseInterface
  {
    return $this->jsonApi()->respond()->ok(
      new PanelDocument(new PanelResourceTransformer()),
      $panel
    );
  }

}
