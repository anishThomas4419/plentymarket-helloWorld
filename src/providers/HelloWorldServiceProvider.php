<?php

namespace HelloWorld\Providers;

public function register()
        {
            $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
        }

        public function map(Router $router)
    {
        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');
    }

use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {

    }
}
