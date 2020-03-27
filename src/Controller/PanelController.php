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
 * @Route("/panels")
 */
class PanelController extends Controller
{
    /**
     * @Route("/", name="panels_index", methods="GET")
     */
    public function index(PanelRepository $panelRepository, ResourceCollection $resourceCollection): ResponseInterface
    {
        $resourceCollection->setRepository($panelRepository);

        $resourceCollection->handleIndexRequest();

        return $this->jsonApi()->respond()->ok(
            new PanelsDocument(new PanelResourceTransformer()),
            $resourceCollection
        );
    }

    /**
     * @Route("/", name="panels_new", methods="POST")
     */
    public function new(ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $panel = $this->jsonApi()->hydrate(new CreatePanelHydrator($entityManager, $exceptionFactory), new Panel());

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($panel);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->persist($panel);
        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new PanelDocument(new PanelResourceTransformer()),
            $panel
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

    /**
     * @Route("/{id}", name="panels_edit", methods="PATCH")
     */
    public function edit(Panel $panel, ValidatorInterface $validator, DefaultExceptionFactory $exceptionFactory): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();

        $panel = $this->jsonApi()->hydrate(new UpdatePanelHydrator($entityManager, $exceptionFactory), $panel);

        /** @var ConstraintViolationList $errors */
        $errors = $validator->validate($panel);
        if ($errors->count() > 0) {
            return $this->validationErrorResponse($errors);
        }

        $entityManager->flush();

        return $this->jsonApi()->respond()->ok(
            new PanelDocument(new PanelResourceTransformer()),
            $panel
        );
    }

    /**
     * @Route("/{id}", name="panels_delete", methods="DELETE")
     */
    public function delete(Request $request, Panel $panel): ResponseInterface
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($panel);
        $entityManager->flush();

        return $this->jsonApi()->respond()->genericSuccess(204);
    }
}
