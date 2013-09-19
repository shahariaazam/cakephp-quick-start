<h1>Member profile</h1>
<hr>
<?php echo $this->Form->create('Profile', array('class'=>'form-horizontal', 'role'=>'form'));?>
    <?php
        foreach($profile['Profile'] as $key=>$value):
    ?>
        <div class="form-group">
            <label for="username" class="col-lg-2 control-label"><?php echo Inflector::humanize($key);?></label>
            <div class="col-lg-10">
                <?php echo $this->Form->input($key, array('value'=>$value,'div'=>false, 'label'=>false, 'class'=>'form-control'));?>
            </div>
        </div>
    <?php endforeach;?>
    <?php echo $this->Form->submit('Update', array('class'=>'btn btn-default'));?>
</table>
<?php echo $this->Form->end();?>