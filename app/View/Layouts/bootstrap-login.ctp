<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title_for_layout;?></title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css(array('bootstrap.min','cakephp.quick'));?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->Html->script(array('html5shiv','respond.min'));?>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CakePHP Quick Start</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><?php echo $this->Html->link('Home', array('controller'=>'users', 'action'=>'index'));?></li>
                <li><?php echo $this->Html->link('My Profile', array('controller'=>'profiles', 'action'=>'index'));?></li>
                <li><?php echo $this->Html->link('Update Profile', array('controller'=>'profiles', 'action'=>'index'));?></li>
                <li><?php echo $this->Html->link('Change Password', array('controller'=>'users', 'action'=>'changePassword'));?></li>
                <li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'));?></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>CakePHP Quick Start</h1>
        <p>This is a Quick Start project developed by CakePHP. You can use it to initialize any kinds of CakePHP project in a second. It has lots of built-in features that will let you build your apps more quickly.</p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
            This is the instruction set for your application for each methods. You can write down here the way about how to interact with your application. Also you can put anything here.
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <?php echo $this->fetch('content');?>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2013</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script(array('jquery-1.10.2.min', 'bootstrap.min'));?>
</body>
</html>