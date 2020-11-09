<?php

class HomeController extends Controller
{

    public function index()
    {
        $this->setView('index');
        $this->view->pageTitle = SITENAME . " - HOME";
        $this->view->render();
    }

    public function about()
    {
        $this->setView('about');
        $this->view->pageTitle = SITENAME . " - ABOUT";
        $this->view->render();
    }

    public function contact()
    {
        $this->setView('contact');
        $this->view->pageTitle = SITENAME . " - Contact";
        $this->view->render();
    }

    public function comingSoon()
    {
        $this->setView('comingSoon');
        $this->view->pageTitle = SITENAME . " - Coming Soon";
        $this->view->render();
    }

    public function pageNotFound()
    {
        $this->setView('pageNotFound');
        $this->view->render();
    }

    public function login()
    {
        if ($_SESSION['userIsAdmin'] && !empty($_SESSION['userId'])) {
            $this->go('home', 'dashboard');
        } else {
            $this->setView('login');
            $this->view->render();
        }
    }

    public function dashboard()
    {
        if ($_SESSION['userIsAdmin'] && !empty($_SESSION['userId'])) {
            $subscriberModel = $this->model('Subscriber');
            $dashboardData['subscriberCount'] = $subscriberModel->count();

            $this->setView('admin/dashboard', $dashboardData);
            $this->view->render();
        } else {
            $this->go('home', 'login');
        }
    }

    public function doLogIn()
    {
        $userModel = $this->model('User');

        $user = $userModel->LogIn($_POST["username"], $_POST["password"]);

        $_SESSION["userId"] = $user->id;
        $_SESSION["userIsAdmin"] = $user->is_admin;
        $_SESSION["userName"] = $user->name;
        $_SESSION["userEmail"] = $user->email;

        if ($_SESSION["userId"] && $_SESSION['userIsAdmin']) {
            $this->go('home', 'dashboard');
        } else {
            $this->go('home', 'login');
        }
    }

    public function doLogOut()
    {

        unset($_SESSION["userId"]);
        unset($_SESSION["userIsAdmin"]);
        unset($_SESSION["userName"]);
        unset($_SESSION["userEmail"]);
        $this->go("home", "login");
    }
}
