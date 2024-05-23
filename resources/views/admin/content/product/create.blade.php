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
          <form action="{{route("admin.product.store")}}" method="POST">
              @csrf
              <div class="form-group">
                  <label for="categoryName">Name</label>
                  <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter the category's name..." value="">
              </div>
              <div class="form-group">
                  <label for="categorySlug">Brand</label>
                  <input type="text" class="form-control" id="product_author" name="product_author" placeholder="Nhập slug của danh mục..."  value="">
              </div>
              <div class="form-group">
                  <label for="categorySlug">Slug</label>
                  <input type="text" class="form-control" id="product_slug" name="product_slug" placeholder="Nhập slug của danh mục..."  value="">
              </div>
              <div class="form-group">
                  <label for="product_category_id">Category</label>
                  <select name="product_category_id" id="product_category_id">
                    <option value="">Choose a category here</option>
                    @foreach ($products as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
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