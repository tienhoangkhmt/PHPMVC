<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/15/2019
 * Time: 4:23 PM
 */
Class adminController{
    public function __construct()
    {
    }
    public function indexAction(){
        $adminModel = new adminModel();
        $admins=$adminModel->getRows();
        return $this->view('admin','index',array('admin' =>$admins));
    }
    public function editAction(){
        $id=isset($_GET['id'])? $_GET['id']:0;
        $adminModel=new admoinModel();
        $admin =$adminModel->getRow();
    }
    public  function addAction(){
        $adminModel = new adminModel();
        return $this->view('admin','add',array());
    }
    public  function storeAction(){
        $data=$_POST;
        $adminModel = new adminModel();
        // chuyen ket qua truy van den
        $adminModel ->store($data);
        if($data['id']>0){
            $newURL = ADMIN_URL.'index.php?controller=admin&action=edit&id='.$data['id'];
        }else{
            $newURL = ADMIN_URL.'index.php?controller=admin&action=edit&id='.$adminModel->getInsertLastId();
        }
        header("Location: $newURL");
        die();
    }
    public function deleteAction(){
        $id = $_GET['$id'];
        $adminModel = new adminModel();
        if($id>0){
            $adminModel->remove($id);
        }
        $admins = $adminModel ->getRows();
        return $this->view('admin','index',array('admins'=>$admins));
    }
    public function viewAction(){

    }
}
