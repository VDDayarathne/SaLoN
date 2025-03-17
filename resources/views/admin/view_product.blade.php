<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .table_deg
        {
            border: 2px rgb(255, 255, 255) solid;

        }
        th
        {
            border: 2px rgb(255, 255, 255) solid;
            background-color: grey;
            color:white;
            font-size: 18px;
            font-weight: bold;
            padding: 15px;

        }
        td
        {
            border: 1px solid rgb(255, 255, 255);
            text-align: center;
        }


    </style>

  </head>
  <body>
    @include('admin.header')
        @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                @foreach($product as $products)
                    <tr>
                        <td>{{ $products->title }}</td>
                        <td>{!!Str::words($products->description,5)!!}</td>
                        <td>{{ $products->category }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->quantity }}</td>
                        <td>
                            <img height="100" width="100" src="products/{{ $products->image}}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                        </td>
                        
                    </tr>

                @endforeach

                </table>

            </div> 
            <div class="div_deg">
                {{ $product->onEachSide(1) -> links() }}
            </div>
           
        </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>