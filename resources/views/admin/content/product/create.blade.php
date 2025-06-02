@extends('layout.cms')

@section('content_body')
<div id='page-wrapper'>
  <div class="app-content">
    <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
          <div class="iq-header-title">
            <h4 class="card-title">Create new product</h4>
          </div>
      </div>
      <div class="iq-card-body">
        <form action='{{route("admin.product.store")}}' method="POST">
            @csrf
            <div class="form-group">
                <label for="product_title">Name</label>
                <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter the product's name..." value="">
            </div>
            <div class="form-group">
                <label for="product_category">Category</label>
                <select class="form-control" id="product_category" name="product_category">
                    <option>No Category</option>
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    <option value="0">Other</option>
                </select>
                <input type="text" class="form-control mt-3 d-none" id="new_category_title" name="new_category_title" placeholder="Enter the other category name..."  value="">
            </div>
            <div class="form-group">
              <label for="product_brand">Brand</label>
              <select class="form-control" id="product_brand" name="product_brand">
                <option>No Brand</option>
                @foreach ($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
                <option id="new_brand" value="0">Other</option>
              </select>
              <input type="text" class="form-control mt-3 d-none" id="new_brand_title" name="new_brand_title" placeholder="Enter the other brand name..."  value="">
            </div>
            <div class="form-group">
              <label for="product_brand">Slug</label>
              <input type="text" class="form-control" id="product_slug" name="product_slug" placeholder="Enter the product's slug..."  value="">
            </div>
            <div class="form-group">
              <label for="product_image" class="form-label">Image</label>
              <input class="form-control" type="file" id="product_image" name="product_image">
            </div>
            <div class="form-group">
                <label for="product_description">Description</label>
                <input type="text" class="form-control" id="product_description" name="product_description" placeholder="Enter the product's description..."  value="">
            </div>
            <div class="form-group">
                <label for="product_price">Price</label>
                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter the product's price..."  value="">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
@endsection

@push('js')
    <script> 
      $('#product_brand').on('change', function(){
        if($('#product_brand option:selected').html() == "Other"){
          $('#new_brand_title').removeClass('d-none')
        } else {
          $('#new_brand_title').addClass('d-none')
        }
      })
      $('#product_category').on('change', function(){
        if($('#product_category option:selected').html() == "Other"){
          $('#new_category_title').removeClass('d-none')
        } else {
          $('#new_category_title').addClass('d-none')
        }
      })
    </script>
@endpush