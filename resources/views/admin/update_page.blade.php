<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
        @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <h2>Update product</h2>
            <div>
                <form action="">
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{ $data->title }}">
                    </div>
                    <div>
                        <label for="">Description</label>
                       <textarea name="Description"> {{ $data->description }} </textarea>
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input type="text" name="price" value="{{ $data->price }}">
                    </div>
                    <div>
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" value="{{ $data->quantity }}">
                    </div>
                    <div>
                        <label for="">Category</label>
                        <select name="category">
                            <option value="{{ $data->category }}">{{ $data->category }}</option>
                        </select>
                    </div>

                </form>
            </div>

        </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>