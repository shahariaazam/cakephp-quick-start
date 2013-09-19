<h1>Member profile</h1>
<hr>
<table class="table table-stripped">
    <?php
        foreach($profile['Profile'] as $key=>$value):
    ?>
    <tr>
        <td><h4><?php echo Inflector::humanize($key);?></h4></td>
        <td><?php echo $value;?></td>
    </tr>
    <?php endforeach;?>
</table>