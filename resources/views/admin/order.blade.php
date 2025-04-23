<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
    table
    {
        border:2px solid white;
        text-align: center;
    }
    th
    {
        background-color: rgb(50, 49, 49);
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }
    .table_center
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    td
    {
        color: white;
        padding: 10px;
        border: 1px solid rgb(255, 255, 255);
    }
    </style>
  </head>
  <body>
    @include('admin.header')
        @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <div class="table_center">
            <table>
                <tr>
                    <th>Customer name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>Status</th>
                    <th>Change Status</th>
                </tr>

                @foreach ($data as $data)
                
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->rec_address}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->product->title}}</td>
                    <td>{{$data->product->price}}</td>
                    <td>
                        <img width="150" src="products/{{ $data->product->image }}" alt="">
                    </td>
                    <td>
                        @if($data->status == 'in progress')
                        <span style="color: red">{{$data->status}}</span>
                        @elseif($data->status == 'On the way')
                        <span style="color: yellow">{{$data->status}}</span>
                        @else
                        <span style="color:blue">{{$data->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('on_the_way',$data->id) }}">On the Way</a>
                        <a class="btn btn-success" href="{{ url('delivered',$data->id) }}">Delivered</a>
                    </td>
                </tr>
                    
                @endforeach
            </table>
            </div> 
        </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>