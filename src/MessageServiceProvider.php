<?php

namespace Nicelizhi\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Message $extension)
    {
        if (! Message::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-message');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/nicelizhi/laravel-admin-message')],
                'laravel-admin-message'
            );
        }

        $this->app->booted(function () {
            Message::routes(__DIR__.'/../routes/web.php');
        });
    }
}