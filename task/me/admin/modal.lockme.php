<?php 
include("bin/business_info_fun.php");
include('bin/lock.php');
?>

<div class="modal-over">
  <div class="modal-center animated flipInX" style="width:300px;margin:-30px 0 0 -150px;">
  <form name="login" action="bin/login.php" method="POST" class="panel-body">
    <div class="pull-left thumb m-r"><img src="<?php echo get_merchant_details($_SESSION['login_user'],"image"); ?>" class="img-thumbnail"></div>
    <div class="clear">
      <p class="text-white"><?php echo get_merchant_details($_SESSION['login_user'],"company_name"); ?></p>
      <div class="input-group input-s">
        <input type="hidden" name='email' value="<?php echo get_merchant_details($_SESSION['login_user'],"email"); ?>">
        <input type="password" name='password' class="form-control text-sm" placeholder="Enter pwd to continue">
        <span class="input-group-btn">
          <button class="btn btn-success" type="submit"><i class="icon-arrow-right"></i></button>
        </span>
      </div>
    </div>
	</form>
  </div>
</div>