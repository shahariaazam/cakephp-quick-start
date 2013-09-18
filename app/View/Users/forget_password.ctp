<?php echo $this->Session->flash();?>
<hr>
<h4>Password assistant</h4>
<hr>
<?php echo $this->Form->create('Users');?>
    <table>
        <tr>
            <td>Your email</td>
            <td><?php echo $this->Form->input('email');?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $this->Form->submit();?></td>
        </tr>
    </table>
<?php echo $this->Form->end();?>