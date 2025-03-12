<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header -->
    @include('home.header')
    
    <!-- slider section -->
    @include('home.slider')

  </div>

    <!-- shop section -->
    @include('home.product')

    <!-- contact section -->
    @include('home.contact')
  
<br><br><br>

    <!-- footer -->
    @include('home.footer')
  

</body>

</html>