<!doctype html>
<html lang="en">
<head>
    <title>Todo |{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-4.4.1.min.css')}}">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" id="cpswitch" href="{{asset('frontend/css/purple.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{asset('frontend/css/datepicker.css')}}">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
</head>


<body id="main-homepage">

    <div class="wrapper">
     <!--============= TOP-BAR ===========-->
         @include('frontend.body.header')
        
        
        <section id="At_glance" class="section-padding">
            
            <div class="container">
                 
                   
                  @yield('content')


             </div>


        </section>


        <!--======================= FOOTER =======================-->
       @include('frontend.body.footer')
       
    </div>
 <style>
        

    /* TODO list */
ul.todo li {
  padding-left: 1.3em;
  list-style: none;
}

    ul.todo li::before {
  content: '\2610';
  color: #eec666;;
  width: 13px;
  height: 12px;
  display: block;
  background-size: 13px 12px;
position: absolute;
left: 52px;
}

.overlay-text {
  font-size:3.5vw;
  float:right;
  width:65%; /*important*/
  /*bottom:21vw;*/ /*important*/
  padding: 25px;
 background: #f7f7f7;
 right: 97px;
   margin: 33px;
}

.overlay-text2{
  font-size:3.5vw;
  float:left;
  width:65%; /*important*/
  /*bottom:21vw;*/ /*important*/
  padding: 25px;
 background: #000;
left: 74px;
   margin: 33px;
     z-index: 22;
}




.overlap{
   
   
    padding: 10px;
  
  
}

.hotel-btn{

    background: black;
    color: #fff;
    top: 75px;
    position: relative;
}

.navigationFooter__link{
    font-style: normal;
font-weight: 400;
font-family: Eurostile-Bla,sans-serif;
color: #9a9f9f;
font-size: 22px;
line-height: 24px;
text-decoration: none;
position: relative;
display: block;
text-transform: uppercase;
padding: 15px 0;
}
ul.list-unstyled  li a{

     padding: 0px 4px;
}


.title::before {
  display: block;
  width: 3000px;
  left: 55%;
}

.title::after, .title::before {
  content: "";
  display: block;
  background-color: #f2f3f3;
  width: 70%;
  position: absolute;
  top: 0;
  bottom: 8px;
  right: 0;
  z-index: -1;
}
.title::after, .title::before {
  width: 45%;
  bottom: 12px;
}

.place {
    background: #cccccc91;;
width: 117px !important;
text-align: center;
padding: 14px;
margin-left: 82px;
}
.detail-box{
    background: #cccccc91;;
    padding: 11px;
    color: #000;

}
.detail-box a{
    border: 1px solid #b99fc9;
    color: #b99fc9;
}
.detail-in{
    color: #fff;
background: #cccccc85;
padding: 27px;
font-size: 20px;
}
.btn-outline-light{
    background: #fff;
}

#new-location ul li a{
     background: #bfb9b6;
    border: none;
    border-radius: 0px;
    margin: 0px;
    color: #fff;
    margin: 2px;
}
.search-tabs .nav-tabs li a {
    background: #000;
    border-radius: 0px;
    color: white;
    line-height: 1.428571;
}
.search-tabs .nav-tabs li {
    border-left: 1px solid #fff;
}

.main-navbar .navbar-search-link > li:nth-child(2) a {
  height: 35px;
  width: 35px;
  text-align: center;
  padding: 5px 7px 6px 8px;
  margin-top: -5px;
  text-decoration: none;
}

ul.menu3  li a{
   font-size: 11px !important;
text-transform: uppercase; !important;
}
.main-navbar.navbar-custom .navbar-nav > li {
  padding: 0px 0 !important;

}


.main-navbar .navbar-search-link > li:nth-child(2) {
  margin-left: 8px;
  margin-top: 0px;
}

.main-navbar .navbar-search-link >li:nth-child(2) a{
   height: 30px;
width: 30px;
text-align: center;
padding: 5px 7px 6px 8px;
margin-top: -5px;
text-decoration: none;
}

ul.navbar-search-link li a{
    font-size: 12px !important;
}
.main-navbar .navbar-nav > li > a {
 
 
  display: ruby-base;
}
</style>     
<script type="text/javascript">
               
               $(document).ready(function() {
                  
                  $('#myTab a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                  })
                  
                })

           </script>        
                        
    <!-- Page Scripts Starts -->
    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-4.4.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom-navigation.js')}}"></script>
    <script src="{{asset('frontend/js/custom-flex.js')}}"></script>
    <script src="{{asset('frontend/js/custom-owl.js')}}"></script>
    <script src="{{asset('frontend/js/custom-date-picker.js')}}"></script>
    <script src="{{asset('frontend/js/custom-video.js')}}"></script>
    <script src="{{asset('frontend/js/popup-ad.js')}}"></script>
    <!-- Page Scripts Ends -->
    
</body>
</html>