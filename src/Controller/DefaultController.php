<?php

namespace App\Controller;

use App\JsonApi\Document\DefaultDocument;
use App\JsonApi\Transformer\DefaultResourceTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Paknahad\JsonApiBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

  /**
   * @Route("/", name="index", methods="GET");
   *
   * @param \Doctrine\ORM\EntityManagerInterface $entityManager
   *
   * @return \Psr\Http\Message\ResponseInterface
   */
  function index(EntityManagerInterface $entityManager) {
    $metas = $entityManager->getMetadataFactory()->getAllMetadata();
    print_r($metas);
    exit();
    return $this->jsonApi()->respond()->ok(
      new DefaultDocument(new DefaultResourceTransformer() ),
      $metas
    );
  }


}
