@extends('layout.cms')

@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="tables">
            <div class="table-responsive bs-example widget-shadow">
                <a href="{{route('admin.product.create')}}"><button type="button" class="btn btn-success">Add entry</button></a>
                <div class="flex justify-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->brand_id}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>
                                    <img src="{{$product->image}}" alt="" style="width:50px; height:50px">
                                </td>
                                <td>
                                    <a href="{{route('admin.product.edit', $product->id)}}">Edit</a>
                                    <a href="{{route('admin.product.destroy', $product->id)}}"
                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr> 
                        @endforeach
                    </table>
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