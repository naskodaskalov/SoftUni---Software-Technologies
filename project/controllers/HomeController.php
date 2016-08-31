<?php

class HomeController extends BaseController
{
    function index() {
        $lastAds = $this->model->getLastAds(3);
        $this->advertisements = $this->model->getLastAds(10);
        $this->sidebarAds = $lastAds;
    }

    function view(int $id) {
        $advertisement = $this->model->getAdsById($id);
        if (!$advertisement)
        {
            $this->addErrorMessage("Грешка: невалиден номер на обявата!");
            $this->redirect("");
        }
        $this->advertisement = $advertisement;
    }
}
