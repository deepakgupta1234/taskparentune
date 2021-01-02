<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Parentune Home Page </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
   
    <!-- Custom styles for this template -->
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top rounded">
      <img class = "navbar-brand" src=https://www.parentune.com/mobile/images/mob-logo.png>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <div class="swiper-container-2 homeBanner" style="margin-top: 62px">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><div class="content {{ $activclass=='blog'?'active':''}}"><a href="/"> Blogs </a></div></div>
            <div class="swiper-slide"><div class="content {{ $activclass=='expert'?'active':''}}"><a href="/askexpert"> Ask Expert </a></div></div>
        </div>
        <div class="swiper-scrollbar-2"></div>
       
    </div>

    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card-image">
            <img class = "img-slide" src="https://img1.parentune.com/images/banners/dashboard/12_app_1609333672App-Wap-and-Blog-creative.pptx-42.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class = "img-slide" src="https://img1.parentune.com/images/banners/dashboard/1_1530244162APP_WAP_Banner_How_To_Deal_With_Inverted_Nipples.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class = "img-slide" src="https://img1.parentune.com/images/banners/dashboard/12_app_1591619392APP-WAP-Banner_Does-your-child-have-anxiety-Watch-out-for-these-signs.jpg" alt="Image Slider">
          </div>
        </div>
       
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Scrollbar -->
     
    </div>

    <div class="container-fluid">
      @yield("content")
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js" integrity="sha512-51l8tSwY8XyM6zkByW3A0E36xeiwDpSQnvDfjBAzJAO9+O1RrEcOFYAs3yIF3EDRS/QWPqMzrl6t7ZKEJgkCgw==" crossorigin="anonymous"></script>

   <script>
       var mySwiper = new Swiper('.swiper-container', {
         freeMode: true,
         freeModeSticky: true,
         freeModeMinimumVelocity: 0.4,
         freeModeMomentumRatio: 0.28,
         slidesPerView: 1,
         loop:true,
         scrollbar: '.swiper-scrollbar',
          navigation: {
           nextEl: ".swiper-button-next",
           prevEl: ".swiper-button-prev"
         },
         

       });

       var mySwiper = new Swiper('.swiper-container-2', {
         freeMode: true,
         freeModeSticky: true,
         freeModeMinimumVelocity: 0.4,
         freeModeMomentumRatio: 0.28,
         slidesPerView: 2,
        scrollbar: {
          el:".swiper-scrollbar-2",
          hide:false
        },
       });


       $('ul.pagination').hide();
           $(function() {
               $('.infinite-scroll').jscroll({
                   autoTrigger: true,
                   loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
                   padding: 0,
                   nextSelector: '.pagination li.active + li a',
                   contentSelector: 'div.infinite-scroll',
                   callback: function() {
                       $('ul.pagination').remove();
                   }
               });
           });


       

   </script>
  </body>
</html>

