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

    public function doLogIn()
    {

        $userModel = $this->model('User');

        $user = $userModel->LogIn($_POST["username"], $_POST["password"]);

        $_SESSION["userId"] = $user['id'];
        $_SESSION["userIsAdmin"] = $user['is_admin'];

        if ($_SESSION["userId"] && $_SESSION['userIsAdmin']) {
            echo "hello admin";
            // $this->go("user", "main"); // if details entered exist in the db allow user to login
        } else {
            //$this->loadView("views/login.php");
            // $this->go("public", "errorLogin"); // if details entered do not exist in the db redirect user back to login form with error
            echo "not admin";
        }
    }
}
