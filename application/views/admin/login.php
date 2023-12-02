<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title> Sub Admin System Log in</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css" rel="stylesheet" type="text/css" />


</head>

<style>
  body{
    
    background: #f2f2df;
    margin-top: 21px;
 
  }
 .fgty{
  background: hsla(0, 0%, 100%, 0.55);
    backdrop-filter: blur(30px);
    margin-bottom: 0px;
    border: none !important;
    box-shadow: none !important;
 }
  .account-logo{
    text-align:center;
    margin-bottom: 42px;
  }
  .sswe{
    font-size: 14px;
    font-weight: 500;
  }
  .blue{
    background-color: #159AFF !important;
    color: #fff;
    border-radius: 4px !important;
    width: 35% !important;
    text-align: center;
  }
.form-signin {

  max-width: 100%;
background-image: url(../assets/images/bg.svg);
     

    margin: 0 auto;
 

    border-radius: 6px;
 
}
.account-title{
  text-align:center;
}
.account-subtitle {
    color: #888;
    font-size: 18px;
    text-align: center;
    margin: 0 0 30px;
    font-weight: 700;
}

.account-btn {
    background: #ff9b44;
    background: linear-gradient(90deg,#ff9b44 0,#fc6075);
    border: 0;
    display: block;
    font-size: 22px;
    width: 100%;
    border-radius: 4px;
    padding: 10px 26px;
}
#show-password {
  float: right;
    z-index: 99999;
    margin-top: -31px;
    margin-right: 10px;
    color: gray;
    cursor: pointer;
    font-size: 1rem;
}
label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 400 !important ;
}
</style>


<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container-fluid " style="
    padding: 0px;
">

    <!-- <div class="account-logo">
            <img src="<?= base_url()?>assets/images/logo.png" alt="Dreamguy's Technologies">
    </div> -->

    <form action="<?php echo base_url(); ?>admin/login/loginMe" method="post" class="form-signin">
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php $this->load->helper('form');
          $error = $this->session->flashdata('error');
          if($error)
          {
          ?>

        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error; unset($_SESSION['error'])  ?>
        </div>
        <?php }
          $success = $this->session->flashdata('success');
          if($success)
          {
          ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $success; unset($_SESSION['success']) ?>
        </div>
        <?php } ?>
        <div style="text-align: centre;margin-top: 14px;margin-left: 538px;"> <img src="<?= base_url()?>assets/images/tc-logo.png" style="
   width: 25%;
   margin-top: 5px;
"></div>
       
        <section class="vh-100" style="margin-top: -71px; background-image: url(<?= base_url()?>assets/images/bg.svg);">
  <div class="container   ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
      
        <div class="card" style="border-radius: 1rem;box-shadow: none; border: none; margin-top: 50px;">
       
          <div class="row g-0">
          <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="card cascading-right fgty" >
          <div class="card-body p-5 shadow-5  " style="padding: 34px 10px 10px 10px !important; margin-top: 0px;">
            
            <h2 class="fw-bold" style="display: block;font-size: 24px;font-weight: 500 !important; margin-bottom: 30px; line-height: 30px;transition: all .1s ease-in-out;">Sign in <br> <span class="sswe" >to access Super Admin<span> </h2>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email"  name="email" required autofocus id="form3Example3" class="form-control" placeholder="Email address / Username" />
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus/><span id="show-password"><i class="bi bi-eye-fill"></i></span>
              </div>
              <!-- Submit button -->
              <div class="text-center" >
                  <button type="submit" class="btn btn-primary btn-block mb-4 blue">
                Sign in
              </button>
          </div>
              <!-- Checkbox -->
              <!-- <div class="form-check d-flex justify-content-center mb-4">
           
                Forgot Password?
                </label>
              </div> -->
              <!-- Register buttons -->
              <div class="text-center">
         
               <a href="https://www.facebook.com/TechCentrica/"  ><button type="button" class="btn btn-link btn-floating mx-1" style="
                background: #14539a;
                color: white;  ">
                  <i class="fa fa-facebook-f"></i>
                </button></a> 

                <a href="https://in.linkedin.com/company/techcentrica" ><button type="button" class="btn btn-link btn-floating mx-1" style="
                background: #0072b1;
                color: white;
            ">
                  <i class="fa fa-linkedin"></i>
                </button></a>

                <a href="https://twitter.com/Tech_Centrica" ><button type="button" class="btn btn-link btn-floating mx-1" style="
                background: #0072b1;
                color: white;
            ">
                  <i class="fa fa-twitter"></i>
                </button></a>

               <A href="https://www.instagram.com/techcentrica/" > <button type="button" class="btn btn-link btn-floating mx-1" style="
                background: #0072b1;
                color: white;
            ">
                  <i class="fa fa-instagram"></i>
                </button></A>
              </div>
            
          </div>
        </div>
      </div>
            <div class="col-md-5   d-none d-md-block" style="text-align: center;background: none;"> 
               <lottie-player src="https://lottie.host/793df35b-9d2d-4cea-acab-247fa313ae0b/dLP3Yc973A.json" background="transparent" speed="1" class="bottom_img" loop autoplay></lottie-player>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="cp-text" style="text-align: center;">
    © Copyright 2023 TCLMS. All Rights Reserved.
</p>
</section>

          </form>
<script>
    const passwordInput = document.getElementById("password");
    const showPasswordButton = document.getElementById("show-password");

    showPasswordButton.addEventListener("click", () => {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
       $(".bi-eye-fill").addClass('bi-eye-slash');
       $(".bi-eye-fill").removeClass('bi-eye-fill');
      } else {
        passwordInput.type = "password";
        $(".bi-eye-slash").addClass('bi-eye-fill');
       $(".bi-eye-slash").removeClass('bi-eye-slash');
      }
    });
  </script>

 
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>

</html>