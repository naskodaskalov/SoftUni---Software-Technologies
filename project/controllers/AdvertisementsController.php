<?php

class AdvertisementsController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }

    public function index()
    {
        $this->advertisements = $this->model->getAllAds();
    }

    public function create()
    {
        if ($this->isPost) {
            $title = $_POST['title'];
            if(strlen($title) < 1) {
                $this->setValidationError("title", "Заглавието е прекалено кратко.");
            }
            $content = $_POST['content'];
            if(strlen($content) < 10) {
                $this->setValidationError("content", "Съдържанието трябва да бъде поне 10 символа.");
            }
            $price = $_POST['price'];
            $photo = $_POST['photo'];
            if($this->formValid()) {
                $userId = $_SESSION['user_id'];
                if ($this->model->create($title, $content, $userId, $price, $photo)) {
                    $this->addInfoMessage("Обявата беше успешно добавена!");
                    $this->redirect("advertisements");
                } else {
                    $this->addErrorMessage("Грешка: обявата не може да бъде добавена!");
                }
            }
        }
    }

    public function edit(int $id)
    {
        if ($this->isPost) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $price = $_POST['price'];
            $user_id = $_POST['user_id'];
            if (strlen($title) < 2){
                $this->setValidationError("title", "Заглавието не може да бъде по-кратко от 2 символа.");
            }
            if (strlen($content) < 20) {
                $this->setValidationError("content", "Съдържанието не може да бъде по-кратко от 20 символа.");
            }
//            $date = $_POST['date'];
//            $dateRegex = '/^\d{2,4}-\d{1,2}-\d{1,2}(\d{1,2}:\d{1,2}(:\d{1,2})?)?$/';
//            if (!preg_match($dateRegex, $date)) {
//                $this->setValidationError("date", "Невалидна дата!");
//            }
//            if ($user_id <= 0 || $user_id > 100000) {
//                $this->setValidationError("user_id", "Невалидно ID на автора!");
//            }
            if ($this->formValid()) {
                if ($this->model->edit($id, $title, $content, $price, $user_id)) {
                    $this->addInfoMessage("Обявата беше успешно редактирана!");
                } else {
                    $this->addErrorMessage("Грешка: обявата не може да бъде редактирана!");
                }
                $this->redirect("advertisements");
            }
        }
        $advertisement = $this->model->getById($id);
        if (!$advertisement) {
            $this->addErrorMessage("Грешка: обявата не съществува!");
            $this->redirect("advertisements");
        }
        $this->advertisement = $advertisement;
        //$this->users = $this->model->getAllUsers();
    }

    public function delete(int $id)
    {
        if($this->isPost) {
            if($this->model->delete($id)) {
                $this->addInfoMessage("Обявата е успешно изтрита!");
            } else {
                $this->addErrorMessage("Грешка: обявата не може да бъде изтрита!");
            }
            $this->redirect("advertisements");
        } else {
            $advertisement = $this->model->getById($id);
            if (!$advertisement) {
                $this->addErrorMessage("Грешка: тази обява не съществува!");
                $this->redirect("advertisements");
            }
            $this->advertisement = $advertisement;
        }
    }
}