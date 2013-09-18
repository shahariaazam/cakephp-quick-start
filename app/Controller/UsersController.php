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
        $this->Auth->allow('forgetPassword', 'signup');
    }

    /**
     * @method index
     * Home page of restricted member area.
     */
    public function index()
    {
        $this->User->recursive = 0;
        $this->set(
            'users',
            $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))))
        );
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

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash('Login successfully');
                $this->redirect(array('controller' => 'Users', 'action' => 'index'));
            } else {
                $this->Session->setFlash("Login failed");
            }
        }
    }

    /**
     * @method logout
     * To clear users session for logging out of an user
     */
    public function logout()
    {
        if ($this->redirect($this->Auth->logout())) {
            $this->Session->setFlash('Logout successful');
        } else {
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

    /**
     * @method signup method to create account by clients
     */
    public function signup()
    {
        $this->set('title_for_layout', "Signup to access");
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $createdId = $this->User->getLastInsertId();
                if (!empty($createdId)) {
                    $this->loadModel('Profile');
                    $this->Profile->create();
                    $this->request->data['Profile']['user_id'] = $createdId;
                    if ($this->Profile->save($this->request->data)) {
                        $this->Session->setFlash(__('Signup has been completed!'));
                        return $this->redirect(array('action' => 'index'));
                    }
                }
            }
            $this->Session->setFlash(__('Registration failed! Try again.'));
        }
    }

    function changePassword()
    {
        if($this->request->is('post')){
            $oldPassEncr = AuthComponent::password($this->request->data['Users']['password']);
            $userId = $this->Auth->User('id');
            $userLoginInfo = $this->User->find('first', array('conditions'=>array('User.id'=>$userId)));
            if($userLoginInfo['User']['password'] === $oldPassEncr){
                if($this->request->data['Users']['newpassword'] === $this->request->data['Users']['renewpassword']){
                    $this->User->id = $userId;
                    if($this->User->saveField('password', $this->request->data['Users']['newpassword'])){
                        $this->Session->setFlash("Password changed successfully");
                    }else{
                        $this->Session->setFlash("Something wrong! Try again later.");
                    }
                }else{
                    $this->Session->setFlash("New passwords mismatch");
                }
            }else{
                $this->Session->setFlash("Old password wrong!");
            }
        }
    }
}