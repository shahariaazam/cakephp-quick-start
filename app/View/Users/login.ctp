<div class="loginForm col-lg-offset-3">
    <h3>Login to access!</h3>
    <p>
        <?php echo $this->Form->create('User', array('action'=>'login', 'class'=>'form-horizontal', 'role'=>'form'));?>
    <div class="form-group">
        <label for="username" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-4">
            <?php echo $this->Form->input('username', array('div'=>false, 'label'=>false, 'class'=>'form-control'));?>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-4">
            <?php echo $this->Form->input('password', array('div'=>false, 'label'=>false, 'class'=>'form-control'));?>
        </div>
    </div>
    <div class="form-group">
        <label for="login" class="col-lg-2 control-label"></label>
        <div class="col-lg-4">
            <?php echo $this->Form->submit('Login', array('div'=>false, 'label'=>false, 'class'=>'btn btn-default'));?>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
    If you aren't registered, please <?php echo $this->Html->link('click here', array('controller'=>'Users', 'action'=>'signup'))?> to signup.
    </p>
</div>