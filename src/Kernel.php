<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

/**
 * Class Kernel
 *
 * @package App
 */
class Kernel extends BaseKernel
{
  use MicroKernelTrait;

  private const CONFIG_EXTS = '.{php,xml,yaml,yml}';

  /**
   * Returns an array of bundles to register.
   *
   * @return iterable|BundleInterface[] An iterable of bundle instances
   */
  public function registerBundles()
  {
    $contents = require $this->getProjectDir() . '/config/bundles.php';
    foreach ($contents as $class => $envs) {
      if ($envs[$this->environment] ?? $envs['all'] ?? false) {
        yield new $class();
      }
    }
  }

  /**
   * @inheritDoc}
   *
   * @return string
   */
  public function getProjectDir()
  {
    return dirname(__DIR__);
  }

  /**
   * Configures the container.
   *
   * You can register extensions:
   *
   *     $c->loadFromExtension('framework', [
   *         'secret' => '%secret%'
   *     ]);
   *
   * Or services:
   *
   *     $c->register('halloween', 'FooBundle\HalloweenProvider');
   *
   * Or parameters:
   *
   *     $c->setParameter('halloween', 'lot of fun');
   */
  protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
  {
    $c->addResource(new FileResource($this->getProjectDir() . '/config/bundles.php'));
    $c->setParameter('container.dumper.inline_class_loader', \PHP_VERSION_ID < 70400 || $this->debug);
    $c->setParameter('container.dumper.inline_factories', true);
    $confDir = $this->getProjectDir() . '/config';

    $loader->load($confDir . '/{packages}/*' . self::CONFIG_EXTS, 'glob');
    $loader->load($confDir . '/{packages}/' . $this->environment . '/*' . self::CONFIG_EXTS, 'glob');
    $loader->load($confDir . '/{services}' . self::CONFIG_EXTS, 'glob');
    $loader->load($confDir . '/{services}_' . $this->environment . self::CONFIG_EXTS, 'glob');
  }

  /**
   * {@inheritDoc}
   *
   * @param \Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator $routes
   */
  protected function configureRoutes(RouteCollectionBuilder $routes): void
  {
    $confDir = $this->getProjectDir().'/config';
    $routes->import($confDir.'/{routes}/'.$this->environment.'/*'.self::CONFIG_EXTS, '/', 'glob');
    \Kint::dump($routes);
    exit();
    $routes->import($confDir.'/{routes}/*'.self::CONFIG_EXTS, '/', 'glob');



    $routes->import($confDir.'/{routes}'.self::CONFIG_EXTS, '/', 'glob');

    if (is_file(\dirname(__DIR__) . '/config/routes.yaml')) {
      $routes->import(\dirname(__DIR__) . '/config/routes.yaml');
    } elseif (is_file($path = \dirname(__DIR__) . '/config/routes.php')) {
      (require $path)($routes->withPath($path), $this);
    }
  }
}
