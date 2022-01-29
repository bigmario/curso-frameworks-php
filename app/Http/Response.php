<?php

namespace App\Http;

class Response{
    protected $view; //array, json, pdf...

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function getView(){
        return $this->view;
    }

    public function send(){
        $view = $this->getView();

        try {
            $content = file_get_contents(viewPath($view));
        } catch (\Exception $exception) {
            error_log($exception->getMessage());
        }

        require viewPath('layout');
    }

}