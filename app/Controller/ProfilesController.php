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
    public function index()
    {
        $profileInfo = $this->Profile->find('first',array('conditions'=>array('Profile.user_id' => $this->Auth->User('id'))));
        $this->set('profile', $profileInfo);
    }
}