<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" <?php echo base_url(); ?>assets/bootstrap/css/signin.css" rel="stylesheet">
    
    
  </head>

  <body>

    <div class="container-fluid">
      
      <form class="form-signin" role="form" action="<?php echo base_url();?>user_management/login" method="post">
        <h2 class="form-signin-heading">Please log in</h2>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" ><?php echo form_error('username'); ?>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" ><?php echo form_error('password'); ?>
        <div class="checkbox">
          <label for="checkbox">
            <input id="checkbox" type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <center>
        <?php echo $error;?>
        </center>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
