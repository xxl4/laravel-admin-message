<?php

namespace Nicelizhi\Message\Http\Controllers;

use Nicelizhi\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class MessageController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('laravel-admin-message::index'));
    }
}