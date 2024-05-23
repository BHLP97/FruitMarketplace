@extends('layout.cms')

@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="table-responsive bs-example widget-shadow">
                    <div class="flex justify-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Preview</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>User</th>
                            </tr>
                            @foreach ($ratings as $rating)
                                <tr>
                                    <td>{{$rating->id}}</td>
                                    <td>
                                        <img src="{{$rating->preview_image}}" alt="" style="width:50px; height:50px">
                                    </td>
                                    <td>{{$rating->description}}</td>
                                    <td>{{$rating->content}}</td>
                                    <td>{{$rating->user_id}}</td>
                                    <td>
                                        <a href="{{route('admin.rating.edit', $rating->id)}}">Edit</a>
                                        <a href="{{route('admin.rating.destroy', $rating->id)}}"
                                            onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
                                    </td>
                                </tr> 
                            @endforeach
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