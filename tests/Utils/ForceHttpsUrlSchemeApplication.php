<?php
namespace Shin1x1\ForceHttpsUrlScheme\Test\Utils;

use Closure;

/**
 * Class ForceHttpsUrlSchemeApplication
 * @package Shin1x1\ForceHttpsUrlScheme\Test\Utils
 */
class ForceHttpsUrlSchemeApplication implements \Illuminate\Contracts\Foundation\Application
{
    public $environment = 'production';

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        // TODO: Implement version() method.
    }

    /**
     * Get or check the current application environment.
     *
     * @param  mixed
     * @return string
     */
    public function environment()
    {
        return $this->environment;
    }

    /**
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public function isDownForMaintenance()
    {
        // TODO: Implement isDownForMaintenance() method.
    }

    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders()
    {
        // TODO: Implement registerConfiguredProviders() method.
    }

    /**
     * Register a service provider with the application.
     *
     * @param  \Illuminate\Support\ServiceProvider|string $provider
     * @param  array $options
     * @param  bool $force
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $options = array(), $force = false)
    {
        // TODO: Implement register() method.
    }

    /**
     * Register a deferred provider and service.
     *
     * @param  string $provider
     * @param  string $service
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null)
    {
        // TODO: Implement registerDeferredProvider() method.
    }

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }

    /**
     * Register a new boot listener.
     *
     * @param  mixed $callback
     * @return void
     */
    public function booting($callback)
    {
        // TODO: Implement booting() method.
    }

    /**
     * Register a new "booted" listener.
     *
     * @param  mixed $callback
     * @return void
     */
    public function booted($callback)
    {
        // TODO: Implement booted() method.
    }

    /**
     * Determine if the given type has been bound.
     *
     * @param  string $abstract
     * @return bool
     */
    public function bound($abstract)
    {
        // TODO: Implement bound() method.
    }

    /**
     * Alias a type to a different name.
     *
     * @param  string $abstract
     * @param  string $alias
     * @return void
     */
    public function alias($abstract, $alias)
    {
        // TODO: Implement alias() method.
    }

    /**
     * Assign a set of tags to a given binding.
     *
     * @param  array|string $abstracts
     * @param  array|mixed ...$tags
     * @return void
     */
    public function tag($abstracts, $tags)
    {
        // TODO: Implement tag() method.
    }

    /**
     * Resolve all of the bindings for a given tag.
     *
     * @param  array $tag
     * @return array
     */
    public function tagged($tag)
    {
        // TODO: Implement tagged() method.
    }

    /**
     * Register a binding with the container.
     *
     * @param  string|array $abstract
     * @param  \Closure|string|null $concrete
     * @param  bool $shared
     * @return void
     */
    public function bind($abstract, $concrete = null, $shared = false)
    {
        // TODO: Implement bind() method.
    }

    /**
     * Register a binding if it hasn't already been registered.
     *
     * @param  string $abstract
     * @param  \Closure|string|null $concrete
     * @param  bool $shared
     * @return void
     */
    public function bindIf($abstract, $concrete = null, $shared = false)
    {
        // TODO: Implement bindIf() method.
    }

    /**
     * Register a shared binding in the container.
     *
     * @param  string $abstract
     * @param  \Closure|string|null $concrete
     * @return void
     */
    public function singleton($abstract, $concrete = null)
    {
        // TODO: Implement singleton() method.
    }

    /**
     * "Extend" an type in the container.
     *
     * @param  string $abstract
     * @param  \Closure $closure
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function extend($abstract, Closure $closure)
    {
        // TODO: Implement extend() method.
    }

    /**
     * Register an existing instance as shared in the container.
     *
     * @param  string $abstract
     * @param  mixed $instance
     * @return void
     */
    public function instance($abstract, $instance)
    {
        // TODO: Implement instance() method.
    }

    /**
     * Define a contextual binding.
     *
     * @param  string $concrete
     * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
     */
    public function when($concrete)
    {
        // TODO: Implement when() method.
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string $abstract
     * @param  array $parameters
     * @return mixed
     */
    public function make($abstract, array $parameters = array())
    {
        // TODO: Implement make() method.
    }

    /**
     * Call the given Closure / class@method and inject its dependencies.
     *
     * @param  callable|string $callback
     * @param  array $parameters
     * @param  string|null $defaultMethod
     * @return mixed
     */
    public function call($callback, array $parameters = array(), $defaultMethod = null)
    {
        // TODO: Implement call() method.
    }

    /**
     * Determine if the given type has been resolved.
     *
     * @param  string $abstract
     * @return bool
     */
    public function resolved($abstract)
    {
        // TODO: Implement resolved() method.
    }

    /**
     * Register a new resolving callback.
     *
     * @param  string $abstract
     * @param  \Closure $callback
     * @return void
     */
    public function resolving($abstract, Closure $callback = null)
    {
        // TODO: Implement resolving() method.
    }

    /**
     * Register a new after resolving callback.
     *
     * @param  string $abstract
     * @param  \Closure $callback
     * @return void
     */
    public function afterResolving($abstract, Closure $callback = null)
    {
        // TODO: Implement afterResolving() method.
    }

    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath()
    {
        // TODO: Implement basePath() method.
    }

    /**
     * Get the path to the cached "compiled.php" file.
     *
     * @return string
     */
    public function getCachedCompilePath()
    {
        // TODO: Implement getCachedCompilePath() method.
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
        // TODO: Implement getCachedServicesPath() method.
    }
}