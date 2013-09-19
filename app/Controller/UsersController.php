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
        $this->Auth->allow('forgetPassword', 'signup', 'forgetPasswordLast');

        //set bootstrap layout for all methods
        $this->layout = "bootstrap-member";
    }

    /**
     * @method index
     * Home page of restricted member area.
     */
    public function index()
    {
        $this->redirect(array('controller' => 'Profiles', 'action' => 'index'));
    }

    /**
     * @method login
     * Authenticate login of an user
     */
    public function login()
    {
        $this->set('title_for_layout', "Authenticate yourself");
        $this->layout = "bootstrap-login";
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash('Login successfully');
                $this->redirect(array('controller' => 'Profiles', 'action' => 'index'));
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
        if($this->request->is('post')){
            $userInfo = $this->User->find('first', array('conditions'=>array('User.username' => $this->request->data['Users']['email'])));
            if(!empty($userInfo)){
                $this->Cookie->write('forgetPasswordEmailPut', $userInfo['User']['username']);
                var_dump($this->Cookie->read('forgetPasswordEmailPut'));
                $this->redirect(array('controller'=>'Users', 'action'=>'forgetPasswordLast'));
            }else{
                $this->Session->setFlash("Wrong email address!");
            }
        }
    }

    public function forgetPasswordLast()
    {
        if($this->request->is('post')){
            $userInfo = $this->User->find('first', array('conditions'=>array('User.username'=>$this->Cookie->read('forgetPasswordEmailPut'))));
            $this->loadModel('Profile');
            $profileInfo = $this->Profile->find('first', array('conditions'=>array('Profile.security_answer_1'=>$this->request->data['Profile']['security_answer'], 'Profile.user_id' => $userInfo['User']['id'])));
            if(!empty($profileInfo)){
                $randomPassword = rand(rand(1111,9999), rand(11111,99999));
                $this->send_mail($userInfo['User']['username'], $profileInfo['Profile']['first_name'], $randomPassword);
                $this->User->id = $userInfo['User']['id'];
                if($this->User->saveField('password', $randomPassword)){
                    $this->Session->setFlash("Password sent to your email.");
                    $this->redirect(array('controller'=>'Users','action'=>'login'));
                }
            }else{
                $this->Session->setFlash("Something wrong!");
            }
        }
        $this->set('title_for_layout', "Password retrieval assistance");
        $emailAddress = $this->Cookie->read('forgetPasswordEmailPut');
        if(empty($emailAddress)){
            $this->Session->setFlash("Something wrong!");
            $this->redirect(array('controller'=>'users', 'action'=>'forgetPassword'));
        }else{
            $userInfo = $this->User->find('first', array('conditions'=>array('User.username'=>$emailAddress)));
            $this->loadModel('Profile');
            $profileInfo = $this->Profile->find('first', array('conditions'=>array('Profile.user_id'=>$userInfo['User']['id'])));
            $this->set('profiles', $profileInfo);
        }
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