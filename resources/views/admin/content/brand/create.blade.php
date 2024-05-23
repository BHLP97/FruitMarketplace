@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add a new Brand</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.brand.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="brandName">Tên của brand</label>
                        <input type="text" class="form-control" id="brandName" name="name" placeholder="Enter the category's name...">
                    </div>
                    <div class="form-group">
                        <label for="brandSlug">Slug</label>
                        <input type="text" class="form-control" id="brandSlug" name="slug" placeholder="Nhập slug của danh mục...">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection