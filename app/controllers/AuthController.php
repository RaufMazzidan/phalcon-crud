<?php
/**
 * Created by PhpStorm.
 * User: Rauf Mazzidan
 * Date: 19/07/2018
 * Time: 9:16
 */

class AuthController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/style.css');
//        if ($this->session->has("auth")) {
//            $auth = $this->session->get("auth");
//            $log= $auth['islog'];
//            if ($log == "Y"){
//                echo "<script>alert('Anda Sudah Login');window.location = 'http://localhost/PhalCRUD/crud';</script>";
//            }
//            else{
//                $this->response->redirect("http://localhost/PhalCRUD/auth");
//            }
//        }
    }

    public function loginAction()
    {
        if ($this->request->isPost()) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $tbluser = User::findFirst("username='$username'");
            if ($tbluser) {
                if ($password == $tbluser->password) {
                    $this->_registerSession($tbluser);
                    $this->response->redirect('crud');
                }
            }
            echo "<script>alert('Username atau password salah');window.location = 'http://localhost/PhalCRUD/auth';</script>";
//            return $this->dispatcher->forward(array("action" => "index"));
        }
    }

    private function _registerSession(User $user)
    {
        $this->session->set('auth', array(
            'isLog' => 'Y',
            'id' => $user->id,
            'username' => $user->username
        ));
    }

    public function logoutAction()
    {
        $this->session->destroy();
        echo "<script>alert('Anda Sudah Logout'); window.location = \"http://localhost/PhalCRUD/auth\";</script>";
    }

}

