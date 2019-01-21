<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/16/2019
 * Time: 3:08 PM
 */
class loginController extends appController
{

    public function __construct()
    {
        $adminModel = new adminModel();
        $admins = $adminModel->getRows();
        if (empty($admins)) {
            $data = array(
                'username' => 'nguyentienhoang',
                'email' => 'tienhoangkhmt@gmail.com',
                'password' => '0988712192',
                'status' => 1
            );
            $adminModel->store($data);
        }
    }
    public function indexAction()
    {
        if ((isset($_COOKIE["member_login"]) && $_COOKIE["member_login"]) &&
            (isset($_COOKIE["member_password"]) && $_COOKIE["member_password"])) {
            $email = $_COOKIE['member_login'];
            $password = $_COOKIE['member_password'];

            $adminModel = new adminModel();

            $admin = $adminModel->getLogin($email, $password);

            if (isset($admin['username']) && isset($admin['email']) && isset($admin['password'])) {
                $_SESSION['login_user'] = $admin;

                $adminURL = ADMIN_URL . 'index.php?controller=index&action=index';

                header("Location: $adminURL");
                die;
            }
        }
        return $this->view('login', 'index', array());
    }
    public function loginAction()
    {
        if ((isset($_POST['Sign_In']) && ($_POST['Sign_In'] == 'Login')) &&
            (isset($_POST['email']) && ($_POST['email'])) &&
            (isset($_POST['password']) && ($_POST['password']))) {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $adminModel = new adminModel();
            $admin = $adminModel->getLogin($email, $password);
            if (isset($admin['username']) && isset($admin['email']) && isset($admin['password'])) {
                $_SESSION['login_user'] = $admin;

                if (isset($_POST['remember']) && !empty($_POST['remember'])) {

                    setcookie("member_login", $email, time() + (1 * 24 * 60 * 60));
                    setcookie("member_password", $password, time() + (1 * 24 * 60 * 60));
                } else {
                    if (isset($_COOKIE["member_login"])) {
                        setcookie("member_login", "");
                    }
                    if (isset($_COOKIE["member_password"])) {
                        setcookie("member_password", "");
                    }
                }
                $adminURL = ADMIN_URL . 'index.php?controller=index&action=index';

                header("Location: $adminURL");
                die;
            }
        }
        $_SESSION['login_fail'] = 'Login fail. Invalid email or password';

        $loginURL = ADMIN_URL . 'index.php?controller=login&action=index';

        header("Location: $loginURL");
        die;
    }

    public function logoutAction()
    {
        session_start();
        unset($_SESSION["login_user"]);

        if (isset($_COOKIE["member_login"])) {
            setcookie("member_login", "");
        }
        if (isset($_COOKIE["member_password"])) {
            setcookie("member_password", "");
        }
        $loginURL = ADMIN_URL . 'index.php?controller=login&action=index';

        header("Location: $loginURL");
        die;
    }



}