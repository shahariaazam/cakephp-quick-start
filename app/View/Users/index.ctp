<?php echo $this->Session->flash();?>
<hr>
Welcome, <strong><?php echo $this->Html->link($users['User']['username'], array('controller'=>'profiles', 'action'=>'index'));?></strong>
    <p>
        <?php echo $this->Html->link('Logout', array('Controller'=>'Users', 'action'=>'logout'));?>
    </p>