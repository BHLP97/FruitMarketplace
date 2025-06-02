@extends('layout.cms')

@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add a new Post</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action='{{route("admin.menu.store")}}' method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="menuName">Post title</label>
                        <input type="text" class="form-control" id="menuName" name="name" placeholder="Enter the title of the post...">
                    </div>
                    @include('frontend/tinymce',['title'=>'Contents of the post'])
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection