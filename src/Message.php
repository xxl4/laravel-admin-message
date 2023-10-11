<?php

namespace Nicelizhi\Message;

use Nicelizhi\Admin\Extension;

class Message extends Extension
{
    public $name = 'laravel-admin-message';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Message',
        'path'  => 'laravel-admin-message',
        'icon'  => 'fa-gears',
    ];
}