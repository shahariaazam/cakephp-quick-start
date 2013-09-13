<?php echo $this->Session->flash(); ?>
<hr>

<p>
    <?php
        echo $this->Form->create('User', array('action' => 'login'));
        echo $this->Form->input('username');   //text
        echo $this->Form->input('password');   //password
        echo $this->Form->submit();
        echo $this->Form->end();
    ?>

</p>