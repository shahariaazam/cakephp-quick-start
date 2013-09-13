<?php echo $this->Session->flash(); ?>
<h3>Login to access!</h3>
<p>
    <?php
        echo $this->Form->create('User', array('action' => 'login'));
        echo $this->Form->input('username');   //text
        echo $this->Form->input('password');   //password
        echo $this->Form->submit();
        echo $this->Form->end();
    ?>
If you aren't registered, please <?php echo $this->Html->link('click here', array('controller'=>'Users', 'action'=>'signup'))?> to signup.
</p>