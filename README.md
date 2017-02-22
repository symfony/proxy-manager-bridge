ProxyManager Bridge
===================

Provides integration for [ProxyManager][1] with various Symfony components.

Resources
---------

  * [Contributing](https://symfony.com/doc/current/contributing/index.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)

[1]: https://github.com/Ocramius/ProxyManager

How to use Lazy Loading
---------

Example code based in the one used in Drupal Symfony Inject:

    if ($definition->isLazy()) {
      $set_proxy_instantiator = TRUE;
      $container_builder->setProxyInstantiator(new CachedInstantiator($proxies_path));
      $definition->setLazy(true);
    }
