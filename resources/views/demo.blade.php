<html lang="en"><head>

  <meta charset="UTF-8">

  <link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
  
  <link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
  <meta name="apple-mobile-web-app-title" content="CodePen">

  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>CodePen - Animated Ripples background </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  <style>

    .container{
      background: #3399ff;
      width: 2000px;
      height: 150px;
    }
    /*body{
      background: #3399ff;
      }*/


      .circle{
        position: absolute;
        border-radius: 50%;
        background: white;
        animation: ripple 15s infinite;
        box-shadow: 0px 0px 1px 0px #508fb9;
      }

      .small{
        width: 200px;
        height: 200px;
        left: -100px;
        bottom: -100px;
      }

      .medium{
        width: 400px;
        height: 400px;
        left: -200px;
        bottom: -200px;
      }

      .large{
        width: 600px;
        height: 600px;
        left: -300px;
        bottom: -300px;
      }

      .xlarge{
        width: 800px;
        height: 800px;
        left: -400px;
        bottom: -400px;
      }

      .xxlarge{
        width: 1000px;
        height: 1000px;
        left: -500px;
        bottom: -500px;
      }

      .shade1{
        opacity: 0.2;
      }
      .shade2{
        opacity: 0.5;
      }

      .shade3{
        opacity: 0.7;
      }

      .shade4{
        opacity: 0.8;
      }

      .shade5{
        opacity: 0.9;
      }

      @keyframes ripple{
        0%{
          transform: scale(0.8);
        }

        50%{
          transform: scale(1.2);
        }

        100%{
          transform: scale(0.8);
        }
      }
    </style>

    <script>
      window.console = window.console || function(t) {};
    </script>



    <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>


  </head>

  <body translate="no">


  <!-- <div class="ripple-background">
    <div class="circle xxlarge shade1"></div>
    <div class="circle xlarge shade2"></div>
    <div class="circle large shade3"></div>
    <div class="circle mediun shade4"></div>
    <div class="circle small shade5"></div>
  </div>   -->
  

  
  <div class="ripple-background">
    
    <div class="circle xxlarge shade1"></div>
    <div class="circle xlarge shade2"></div>
    <div class="circle large shade3"></div>
    <div class="circle mediun shade4"></div>
    <div class="circle small shade5"></div>
  </div>

  
  

</body>
</html>