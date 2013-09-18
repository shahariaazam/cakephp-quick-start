<?php echo $this->Session->flash();?>
<hr>
<h4>Change Password</h4>
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