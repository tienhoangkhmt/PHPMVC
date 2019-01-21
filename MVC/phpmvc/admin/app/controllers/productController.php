<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/16/2019
 * Time: 2:02 PM
 */
class productController extends appController{
    public $controller = 'product';
    public $model = 'productModel';
    public $view = 'product';
    public function __construct()
    {

    }
    public function indexAction() {
        $model = new $this->model();
        $rows = $model->getRows();

        return $this->view($this->view, 'index', array('rows' => $rows));
    }

    public function editAction() {

        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        $model = new $this->model();
        $row = $model->getRow($id);

        return $this->view($this->view, 'edit', array('row' => $row));
    }

    public function addAction() {

        $model = new $this->model();

        return $this->view($this->view, 'add', array());
    }

    public function storeAction() {
        $data = $_POST;

        $model = new $this->model();
        $store = $model->store($data);

        if ($store) {
            $_SESSION['store_record'] = 1;
        } else {
            $_SESSION['store_record'] = 0;
        }

        if ($_POST['save'] == 1) {
            $newURL = ADMIN_URL . 'index.php?controller='.$this->controller.'&action=index';
            header("Location: $newURL");
            die();
        }


        if ($data['id'] > 0) {
            $newURL = ADMIN_URL . 'index.php?controller='.$this->controller.'&action=edit&id='.$data['id'];
        } else {
            $newURL = ADMIN_URL . 'index.php?controller='.$this->controller.'&action=edit&id='.$model->getInsertLastId();
        }

        header("Location: $newURL");
        die();
    }


    public function deleteAction(){

        $id = $_GET['id'];
        $model = new $this->model();

        if ($id > 0) {
            $model->remove($id);
        }

        $rows = $model->getRows();

        return $this->view($this->view, 'index', array('rows' => $rows));
    }

    public function viewAction() {

    }
}