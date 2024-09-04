@extends('layout.cms')

@section('content_body')
@php
    $model_type = str_replace("/admin/category/","", $_SERVER['REDIRECT_URL']);
@endphp
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="table-responsive bs-example widget-shadow">
                    <a href="{{route('admin.category.{model_type}.create', $model_type)}}"><button type="button" class="btn btn-outline-success my-3">Add a new {{$model_type}} Category</button></button></a>
                    <div class="flex justify-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                            @include("admin.content.category.row_table", ["categories"=>$categories, "level"=>0])
                        </table>
                    </div>
                </div>  
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