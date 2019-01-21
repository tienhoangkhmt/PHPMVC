<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/15/2019
 * Time: 4:25 PM
 */
class errorController extends appController{

    public function __construct()
    {
    }
    public function indexAction() {

        $name = "404";
        return $this->view('error', 'index', array('name' => $name));
    }
}