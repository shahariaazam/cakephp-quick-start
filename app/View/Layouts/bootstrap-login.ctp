<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css(array('bootstrap.min', 'cakephp.quick'));?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->Html->script(array('html5shiv', 'respond.min'));?>
    <![endif]-->
</head>

<body>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 sidebar">
        <div class="text-panel">
            <?php echo $this->Html->image('cakephp_logo_250_trans.png', array('class'=>'img-circle'));?>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h3>CakePHP Quick Start</h3>
            <hr>
            <p>
                Here is the details text you want to display for your application.
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-lg-offset-3">
        <div class="contentMain">
            <?php echo $this->Session->flash();?>
            <!--<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Hi <a href="#" class="alert-link">...</a>
            </div>-->
            <?php echo $this->fetch('content'); //Our main application content goes here?>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script(array('jquery-1.10.2.min', 'bootstrap.min'));?>
</body>
</html>