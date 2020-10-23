<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admin | Forgot Password</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Favicon icon -->

      <link rel="icon" href="{{ asset('public/images/green_logo.png') }}" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/bower_components/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/waves.min.css') }}" type="text/css" media="all">
      <!-- feather icon --> 
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/feather/css/feather.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/icofont/css/icofont.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/pages.css') }}">

      <link rel="stylesheet" href="{{ asset('public/assets/sweetalert/dist/sweetalert.css') }}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row" >
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="" style="margin: 5%" method="post" id="forgot_form">

                        <div class="text-center">
                            <a href="#" style="font-size: 40px;"><b style="font-weight: 800;">Boonmi</b> Admin</a>
                        </div>
                        <div class="auth-box card">
                            <div class="forgot-block">
                              <center>
                                <span id="err_server_msg" class="error"></span>
                                <br>
                                <br>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend" >
                                            <label class="input-group-text"><i class="fa fa-envelope" style="font-size: 12px;"></i></label>
                                        </span>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>                              
                                <!-- <div class="row m-t-30"> -->
                                    <div class="col-sm-8 col-lg-10">
                                      <!-- <center> -->
                                          <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Forgot Password</button> 
                                        <!-- </center> -->
                                    </div>
                                <!-- </div> -->
                                </center>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="forgot-phone text-right float-right">
                                            <a href="{{ url('/') }}" class="text-right f-w-600"> Back to Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- end of form -->
                  </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

<script src="{{ asset('public/assets/sweetalert/dist/sweetalert.js') }}"></script>
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- waves js -->
<script src="{{ asset('public/assets/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('public/assets/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/common-pages.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">

    $(document).ready(function(){


      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $("#forgot_form").on("submit", function (e) {
          e.preventDefault();
          var email = $('#email').val();

          if(email == "" || email == null){
              $('#err_server_msg').text('please enter Email id');
              return false;
          }else{
              if (IsEmail(email) == false) {
                  $("#err_server_msg").text('Please enter valid Email Id.');
                  return false;
              }else{
                  $('#err_server_msg').text('');  
              }              
          }

          $.ajax({
              type: 'POST',
              url: '{{ url("admin/forgot_password") }}',
              data: {
                  email: email,
              },
              success: function (data)
              {
                    if (data == 1) {
                        $("#email").val("");

                        // swal("good Job!","Password Successfully reset.","success");
                        setTimeout(function(){
                           window.location.href = "{{ url('/admin/') }}";
                        },3000)
                        $("#err_server_msg").text('Password Successfully reset.');
                        
                    }
                    if (data == 4) {
                        $("#err_server_msg").text('Email does not exist.');
                    }
              },
              error: function () {
              }
          });
                    
      });

      function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if (!regex.test(email)) {
              return false;
          } else {
              return true;
          }
      }

    });
  </script>
</body>

</html>
