<?php echo $this->Session->flash();?>
<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Signup now'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>