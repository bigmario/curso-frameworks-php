<?php

namespace App\Http\Controllers;
use App\Http\Response;

class HomeController{
    public function Index() {
        return new Response('home');
    }
}