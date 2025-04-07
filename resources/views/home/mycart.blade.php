<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
  .div_deg
  {
    display: flex;
    justify-content: center;
    align-items: center; 
    margin: 60px;
  }
  table
  {
    border: 2px solid black;
    text-align: center; 
    width: 800px;
  }
  th
  {
    border: 2px solid black;
    text-align: center;
    color: white;
    font: 20px;
    font-weight: bold;
    background-color: black;
  }
  td
  {
    border: skyblue;
  }

  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header -->
    @include('home.header')
  </div>

  <div class="div_deg">
    <table>
        <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Remove</th>
        </tr>
        @foreach ($cart as $cart)
        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="150" src="/prodcuts/{{ $cart->product->image }}">
            </td>
        </tr>
        @endforeach
    </table>
  </div>

<br><br><br>

    <!-- footer -->
    @include('home.footer')
  
</body>

</html>