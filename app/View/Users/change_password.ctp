<?php echo $this->Session->flash();?>
<hr>
<h4>Change Password</h4>
<p>
    <?php echo $this->Html->link('Profile', array('controller'=>'Profiles', 'action'=>'index'));?> &raquo; <?php echo $this->Html->link('Profile Update', array('controller'=>'Profiles', 'action'=>'edit'));?> &raquo; <?php echo $this->Html->link('Change Password', array('controller'=>'Users', 'action'=>'changePassword'));?> &raquo; <?php echo $this->Html->link('Logout', array('controller'=>'Users', 'action'=>'logout'));?>
</p>
    <hr>
    <?php echo $this->Form->create('Users');?>
<table>
    <tr>
        <td>Old Password</td>
        <td><?php echo $this->Form->input('password');?></td>
    </tr>
    <tr>
        <td>New Password</td>
        <td><?php echo $this->Form->input('newpassword', array('type'=>'password'));?></td>
    </tr>
    <tr>
        <td>Re-type Password</td>
        <td><?php echo $this->Form->input('renewpassword', array('type'=>'password'));?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $this->Form->submit();?></td>
    </tr>
</table>
    <?php echo $this->Form->end();?>