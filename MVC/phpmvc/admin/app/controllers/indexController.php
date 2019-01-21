<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/15/2019
 * Time: 4:26 PM
 */
class indexController extends appController{

    public function __construct()
    {

    }
    public function indexAction() {
        if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
            $loginURL = ADMIN_URL . 'index.php?controller=login&action=index';

            header("Location: $loginURL");
            die;
        }
        $name = "PHP MVC 1";
        return $this->view('index', 'index', array('name' => $name));
    }
}