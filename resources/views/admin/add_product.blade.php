<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    
    <style>
    .dev_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px
    }
    h1
    {
        color: white;

    }
    label
    {
        display: inline-flex;
        width: 350px;
        font-size: 18px;
        color: white!important ;

    }

    input[type="text"]
    {
        width: 200px;
        height: 50px;
    }
    textarea
    {
        width: 450px;
        height: 80px;

    }
    .input_deg
    {
        padding: 15px;
    }
    </style>
    

  </head>
  <body>
    @include('admin.header')
        @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Add Product</h1>
            <div class="dev_deg">
                <form action="{{ url('upload_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input_deg">
                        <label for="">Product Title</label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="input_deg">
                        <label for="">Description</label>
                        <textarea name="description" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="input_deg">
                        <label for="">Price</label>
                        <input type="text" name="price">
                    </div>
                    <div class="input_deg">
                        <label for="">Quantity</label>
                        <input type="text" name="qty">
                    </div>
                    <div class="input_deg">
                        <label for="">Product Category</label>
                        <select name="category" required>
                            <option>Select the Category</option>
                            @foreach ($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="input_deg">
                        <label for="">Product image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="input_deg">
                        <input class="btn btn-success" type="submit" value="Add Product">
                    </div>

                </form>
            </div>

        </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>