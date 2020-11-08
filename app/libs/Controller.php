<?php
class Controller
{
    protected $view;

    public function setView($viewFile, $viewData = [])
    {
        $this->view = new View($viewFile, $viewData);
        return $this->view;
    }

    public function model($model)
    {
        $model = ucfirst($model);
        require_once MODEL . $model . '.php';
        return new $model;
    }
}
