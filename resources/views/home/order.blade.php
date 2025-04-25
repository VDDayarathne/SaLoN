<!DOCTYPE html>
<html lang="en">
<head>
    <title>myorders</title>
    @include('home.css')
    <style type="text/css">
        .div_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px
        }
        table
        {
            border: 2px solid grey;
            text-align: center;
            width: 800px;
        }
        th
        {
            border: 2px solid grey;
            background-color: black;
            color: white;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }
        td
        {
            border: 1px solid grey;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header -->
    @include('home.header')
    
    <div class="div_center">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Delivery status</th>
                <th>Image</th>
            </tr>

            @foreach ($order as $order)
            
            <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <img src="products/{{$order->product->image}}" alt="" height="200" width="300">
                </td>
            </tr>

            @endforeach

        </table>
    </div>
    <!-- footer -->
    @include('home.footer')
    </div>
</body>
</html>