
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/vertical-layout-light/style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/theme/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>/theme/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3"  id="LoginForm" data-url="<?php echo base_url('auth'); ?>">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="EmailTxt" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="PasswordTxt" placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="javascript:;">SIGN IN</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check" style="display:none;">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" style="display:none;"  class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2" style="display:none;">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light" style="display:none;">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
                <input type="submit" id="HiddenSub" style="display:none;" />
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>/theme/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>/theme/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>/theme/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>/theme/js/template.js"></script>
  <script src="<?php echo base_url(); ?>/theme/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>/theme/js/todolist.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
      
      $(document).ready(function(){
         
         
         $(".auth-form-btn").click(function(){
             
            if (!$("#LoginForm")[0].checkValidity()) {
    
            $("#HiddenSub").trigger("click");
    
  }else{
      
      $.ajax({
          type:'post',
          url:$("#LoginForm").attr("data-url"),
          data:'email='+$("#EmailTxt").val()+'&password='+$("#PasswordTxt").val()
      }).done(function(resp){
         
	        if(resp.code==200)
	        {
	          
	          toastr.success('Successfully Logged In', 'Message');  
	          
	          setTimeout(function(){
	              
	              window.location.href="<?php echo base_url('/dashboard'); ?>";
	              
	          },700);
	            
	        }
	        else
	        {
	            toastr.error('Sorry, Invalid Username or Password!', 'Message');
	        }
         
      }).fail(function(resp){
          console.log(resp);
      });
      
  }
             
         });
         
        
          
      });
      
  </script>
  <!-- endinject -->
</body>

</html>
