<?php

class HomeController extends BaseController
{
    function index() {
        $lastAds = $this->model->getLastAds(3);
        $this->advertisements = $this->model->getLastAds(10);
        $this->sidebarAds = $lastAds;
    }

    public function view(int $id) {
        $this->advertisement = $this->model->getAdsById($id);
        if (!$this->advertisement)
        {
            $this->addErrorMessage("Грешка: невалиден номер на обявата!");
            $this->redirect("");
        }
    }
}
