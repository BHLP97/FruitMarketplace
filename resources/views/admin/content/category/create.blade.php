@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add a new Category</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.category.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="name" placeholder="Enter the category's name...">
                    </div>
                    <div class="form-group">
                        <label for="categoryType">Parent Category</label>
                        <select name="type" id="categoryType">
                            <option value="post">Post</option>
                            <option value="category">Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="slug" placeholder="Enter the category's slug...">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Parent Category</label>
                        <select class="form-control" id="categoryParentId" name="parent_id">
                            <option value="0">No Parent</option>
                            @include('admin.content.category.category_option', ["categories" => $categories, 'level' => 0])
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categoryImage">Image</label>
                        <input type="text" class="form-control" id="categoryImage" name="image">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection