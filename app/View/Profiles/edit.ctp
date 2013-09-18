<?php
$this->Session->flash();
?>
<h1>Member profile</h1>
<?php echo $this->Html->link('Update profile', array('controller' => 'Profiles', 'action' => 'edit'));?>
<hr>
<?php echo $this->Form->create('Profile');?>
<table>
    <?php
        foreach($profile['Profile'] as $key=>$value):
    ?>
    <tr>
        <td><h4><?php echo Inflector::humanize($key);?></h4></td>
        <td><?php echo $this->Form->input($key, array('value'=>$value));?></td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td></td>
        <td><?php echo $this->Form->submit();?></td>
    </tr>
</table>
<?php echo $this->Form->end();?>