<?php
/**
 * @Author  Shaharia Azam
 * @URI http://www.shahariaazam.com
 *
 * Application level Controller
 *
 * This file is User's authentication controller file. You can put all
 * authentication controller-related methods here.
 *
 */
App::uses('Controller', 'Controller');

class UsersController extends AppController
{
    function beforeFilter()
    {
        //forgetPassword access without authentication
        $this->Auth->allow('forgetPassword');
    }
    /**
     * @method index
     * Home page of restricted member area.
     */
    public function index()
    {
        $this->set('title_for_layout', "Member area");
        $this->Session->setFlash('Welcome to your member area!');
    }

    /**
     * @method login
     * Authenticate login of an user
     */
    public function login()
    {
        $this->set('title_for_layout', "Authenticate yourself");
        $this->Session->setFlash('Login to access');
    }

    /**
     * @method logout
     * To clear users session for logging out of an user
     */
    public function logout()
    {
        if($this->redirect($this->Auth->logout())){
            $this->Session->setFlash('Logout successful');
        }else{
            $this->redirect(array('Controller' => 'Users', 'Action' => 'login'));
        }
    }

    /**
     * @method forgetPassword
     * Retrieve password
     */
    public function forgetPassword()
    {
        $this->set('title_for_layout', "Password retrieval assistance");
        $this->Session->setFlash('Retrieve password!');
    }
}
