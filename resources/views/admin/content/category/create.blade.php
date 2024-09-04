@extends('layout.cms')
@section('content_body')
@php
    $model_type = str_replace("/admin/category/","", $_SERVER['REDIRECT_URL']);
    $model_type = str_replace("/create","", $model_type);
@endphp
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add a new {{$model_type}} Category</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.category.{model_type}.store', $model_type)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="name" placeholder="Enter the category's name...">
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="slug" placeholder="Enter the category's slug...">
                    </div>
                    <div class="form-group d-none">
                        <label for="categoryType">Category Type</label>
                        <input type="text" class="form-control" id="categoryType" name="type" value="{model_type}">
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