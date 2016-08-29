<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function register()
    {
		if ($this->isPost) {
            $full_name = $_POST['full_name'];
		    $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $photo = $_POST['photo'];

            if (strlen($username) <= 2) {
                $this->setValidationError("username", "Невалидно потребителско име. /минимална дължина - 3 символа/");
            }

            if (strlen($password) <= 4) {
                $this->setValidationError("password", "Невалидна парола. /минимална дължина - 5 символа/");
            }

            if ($password != $password_confirm) {
                $this->setValidationError("password_confirm", "Паролите не съвпадат.");
            }

//            if (strlen($phone) <= 9 || strlen($phone) > 15) {
//                $this->setValidationError("phone", "The phone number has to be in valid format (08******** or 3598********).");
//            }

            if ($this->formValid()) {
                $userId = $this->model->register($full_name, $username, $password, $email, $phone, $photo);
                if ($userId) {
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addInfoMessage("Регистрацията е успешна!");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешна регистрация!");
                }
            }
        }
    }

    public function login()
    {
		if ($this->isPost) {
		    $username = $_POST['username'];
            $password = $_POST['password'];
            $loggedUserId = $this->model->login($username, $password);
            if ($loggedUserId) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $loggedUserId;
                $this->addInfoMessage("Успешен вход.");
                return $this->redirect("");
            } else {
                $this->addErrorMessage("Грешка: неуспешен вход.");
            }
        }
    }

    public function logout()
    {
		session_destroy();
        $this->addInfoMessage("Успешен изход!");
        $this->redirect("");
    }

    public function profile(int $id) {
        $this->users = $this->model->getUserById($id);
        if (!$this->users)
        {
            $this->addErrorMessage("Грешка: невалидно ID!");
            $this->redirect("");
        }
        $this->user = $this->users;


    }
}
