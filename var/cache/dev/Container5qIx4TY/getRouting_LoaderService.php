<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/FileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';

$a = ($this->services['kernel'] ?? $this->get('kernel'));

$b = new \Symfony\Component\HttpKernel\Config\FileLocator($a, ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src')));

$c = new \Symfony\Component\Config\Loader\LoaderResolver();
$c->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$c->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
$c->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$c->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$c->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$c->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($a)), $c);
