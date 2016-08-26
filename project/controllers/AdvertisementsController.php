<?php

class AdvertisementsController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }

    public function index()
    {
        $this->advertisements = $this->model->getAll();
    }

    public function create()
    {

    }

    public function edit(int $id)
    {

    }

    public function delete(int $id)
    {

    }
}