<?php echo $this->Session->flash();?>
<hr>
Welcome, <strong><?php echo $this->Html->link($users['User']['username'], array('controller'=>'profiles', 'action'=>'index'));?></strong>
<p>
    <?php echo $this->Html->link('Profile', array('controller'=>'Profiles', 'action'=>'index'));?> &raquo; <?php echo $this->Html->link('Profile Update', array('controller'=>'Profiles', 'action'=>'edit'));?> &raquo; <?php echo $this->Html->link('Change Password', array('controller'=>'Users', 'action'=>'changePassword'));?> &raquo; <?php echo $this->Html->link('Logout', array('controller'=>'Users', 'action'=>'logout'));?>
</p>