<?php echo $this->Session->flash();?>
<hr>
<h4>Password assistant</h4>
<hr>
<?php echo $this->Form->create('Profile');?>
    <table>
        <tr>
            <td>Security Question</td>
            <td><?php echo $profiles['Profile']['security_question_1'];?></td>
        </tr>
        <tr>
            <td>Answer</td>
            <td><?php echo $this->Form->input('security_answer');?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $this->Form->submit();?></td>
        </tr>
    </table>
<?php echo $this->Form->end();?>