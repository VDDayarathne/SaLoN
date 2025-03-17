<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
        @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Update Category</h1>
           <div class="div_deg">
                
                <form action="{{ url('update_category',$data->id) }}" method="POST">
                    @csrf
                    <input type="text" name="category" value="{{ $data->category_name }}">
                    <input class="btn btn-primary" type="submit" value="Update category">
                </form>
           </div>
        </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>