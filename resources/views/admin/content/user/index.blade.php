@extends('layout.cms')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="table-responsive bs-example widget-shadow">
                    <a href="{{route('admin.user.create')}}"><button type="button" class="btn btn-outline-success mb-3">Add a User</button></button></a>
                    <div class="flex justify-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <img src="{{$user->avatar}}" alt="" style="width:50px; height:50px">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{route('admin.user.edit', $user->id)}}">Edit</a>
                                        <a href="{{route('admin.user.destroy', $user->id)}}"
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
@stop

{{-- Push extra CSS --}}

@push('css')
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
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush