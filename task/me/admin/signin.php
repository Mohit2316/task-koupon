<?php include("bin/top.php");?>
<body background="./media/images/logo.png">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <center><img src='images/logo1.png' width='200px'></center>
    <div class="row m-n">
      <div class="col-md-4 col-md-offset-4 m-t-lg">
        <section class="panel">
          <header class="panel-heading text-center">
            Sign in
          </header>
          <form name="login" action="bin/login.php" method="POST" class="panel-body">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="email" placeholder="test@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Keep me logged in
              </label>
            </div>		
            <a href="forgot_pass.php" class="pull-right m-t-xs"><small>Forgot password?</small></a>
            <button type="submit" class="btn btn-info">Sign in</button>
            <!--<div class="line line-dashed"></div>
            <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="icon-facebook pull-left"></i>Sign in with Facebook</a>
            <a href="#" class="btn btn-twitter btn-block"><i class="icon-twitter pull-left"></i>Sign in with Twitter</a>
            <div class="line line-dashed"></div>-->
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a href="signup_merchant.php" class="btn btn-white btn-block">Create an account</a>
          </form>
        </section>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>All Rights Reserved &copy; 2013</small>
      <small>kouponize.com</small></p>
    </div>
  </footer>
</body>
</html>