<?php
$this->Session->flash();
?>
<h1>Member profile</h1>
<?php echo $this->Html->link('Update profile', array('controller' => 'Profiles', 'action' => 'edit'));?>
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