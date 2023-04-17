<?php

namespace app\controllers;

class SeriesController
{
    public function index(){
        return "Index Page";
    }
    public function serie($slug){
        return "Seri Page";
    }
    public function episode($slug, $id){
        return "Episode Page";
    }
}