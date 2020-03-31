<?php

namespace App\Controller;

use App\JsonApi\Document\DefaultDocument;
use App\JsonApi\Transformer\DefaultResourceTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Paknahad\JsonApiBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

  /**
   * @Route("/jsonapi", name="index", methods="GET");
   *
   * @param \Doctrine\ORM\EntityManagerInterface $entityManager
   *
   * @return \Psr\Http\Message\ResponseInterface
   */
  function index(EntityManagerInterface $entityManager) {
    $router = $this->container->get('router');
    $collection = $router->getRouteCollection();
    $allRoutes = $collection->all();
    $toSerialize = [];
    foreach ($allRoutes as $routeName => $route) {
      if (strpos($routeName, '_index') !== false) {
        $toSerialize[] = [
          'route' => $route,
          'id' => $routeName,
        ];
      }
    }
     return $this->jsonApi()->respond()->ok(
      new DefaultDocument(new DefaultResourceTransformer() ),
       $toSerialize
    );
  }


}
