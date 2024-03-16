<?php



class Controller{
    protected $flasher;

    public function __construct() {
        $this->flasher = new Flasher();
    }
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php'; 
        return new $model;
    }
}