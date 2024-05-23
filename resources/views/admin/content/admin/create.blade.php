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
               <div class="iq-header-title">
                  <h4 class="card-title">Add admin</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.admin.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="adminName">Tên</label>
                        <input type="text" class="form-control" id="adminName" name="name" placeholder="Input username...">
                    </div>
                    <div class="form-group">
                        <label for="adminEmail">Email</label>
                        <input type="text" class="form-control" id="adminEmail" name="email" placeholder="Input email...">
                    </div>
                    <div class="form-group">
                        <label for="adminPassword">Password</label>
                        <input type="text" class="form-control" id="adminPassword" name="password" placeholder="Input password...">
                    </div>
                    <div class="form-group">
                        <label for="adminConfirmPassword">Password</label>
                        <input type="text" class="form-control" id="adminConfirmPassword" name="confirmPassword" placeholder="Input password again...">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush