<?php
$this->Session->flash();
?>
<h1>Member profile</h1>
<p>
    <?php echo $this->Html->link('Profile', array('controller'=>'Profiles', 'action'=>'index'));?> &raquo; <?php echo $this->Html->link('Profile Update', array('controller'=>'Profiles', 'action'=>'edit'));?> &raquo; <?php echo $this->Html->link('Change Password', array('controller'=>'Users', 'action'=>'changePassword'));?> &raquo; <?php echo $this->Html->link('Logout', array('controller'=>'Users', 'action'=>'logout'));?>
</p>
<hr>
<table>
    <?php
        foreach($profile['Profile'] as $key=>$value):
    ?>
    <tr>
        <td><h4><?php echo Inflector::humanize($key);?></h4></td>
        <td><?php echo $value;?></td>
    </tr>
    <?php endforeach;?>
</table>