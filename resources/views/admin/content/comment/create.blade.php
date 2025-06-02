@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add new comment</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action='{{route("admin.comment.store")}}' method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="commentContent">Contents of the comment</label>
                        <input type="text" class="form-control" id="commentContent" name="name" placeholder="Enter the contents of the comment...">
                    </div>
                    <div class="form-group">
                        <label for="commentParentId">Comment cha</label>
                        <select class="form-control" id="commentParentId" name="parent_id">
                            <option value="0">No Parent Comment</option>
                            @include('admin.content.comment.comment_option', ["comments" =>$comments, 'level' => 0])
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection