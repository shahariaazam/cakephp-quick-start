<h4>Change Password</h4>
    <hr>
<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'role'=>'form'));?>
<div class="form-group">
    <label for="username" class="col-lg-2 control-label">Existing Password</label>
    <div class="col-lg-4">
        <?php echo $this->Form->input('password', array('div'=>false, 'label'=>false, 'class'=>'form-control'));?>
    </div>
</div>
<div class="form-group">
    <label for="username" class="col-lg-2 control-label">Existing Password</label>
    <div class="col-lg-4">
        <?php echo $this->Form->input('newpassword', array('div'=>false, 'label'=>false, 'class'=>'form-control'));?>
    </div>
</div>
<div class="form-group">
    <label for="username" class="col-lg-2 control-label">Existing Password</label>
    <div class="col-lg-4">
        <?php echo $this->Form->input('renewpassword', array('div'=>false, 'label'=>false, 'class'=>'form-control'));?>
    </div>
</div>
<div class="form-group">
    <label for="login" class="col-lg-2 control-label"></label>
    <div class="col-lg-4">
        <?php echo $this->Form->submit('Change Password', array('div'=>false, 'label'=>false, 'class'=>'btn btn-default'));?>
    </div>
</div>
<?php echo $this->Form->end();?>