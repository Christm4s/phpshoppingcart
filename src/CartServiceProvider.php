<?php
namespace Juhi\Phpcart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cart', function() {
            return new \Juhi\Phpcart\Cart;
        });
    }
}
