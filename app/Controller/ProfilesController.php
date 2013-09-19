<?php
/**
 * @Author  Shaharia Azam
 * @URI http://www.shahariaazam.com
 *
 * Application level Controller
 *
 * This file is Profile controller file. You can put all
 * profile controller-related methods here.
 *
 */
App::uses('Controller', 'Controller');

class ProfilesController extends AppController
{
    function beforeFilter()
    {
        $this->layout = "bootstrap-member";
    }

    public function index()
    {
        $profileInfo = $this->Profile->find('first',array('conditions'=>array('Profile.user_id' => $this->Auth->User('id'))));
        $this->set('profile', $profileInfo);
    }

    /**
     * @param null $id
     * Update profile
     */
    public function edit($id = null)
    {
        if($this->request->is('put')){
            $this->Profile->id = $this->request->data['Profile']['id'];
            if($this->Profile->saveAll($this->request->data)){
                $this->Session->setFlash("Profile has been update");
            }else{
                $this->Session->setFlash("Something wrong! Try again.");
            }
        }
        if(!empty($id)){
            $userId = $id;
        }else{
            $userId = $this->Auth->User('id');
        }
        $profileInfo = $this->Profile->find('first',array('conditions'=>array('Profile.user_id' => $userId)));
        $this->set('profile', $profileInfo);
    }
}