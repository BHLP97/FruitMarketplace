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
                <form action="{{route("admin.comment.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="userId">User</label>
                        <select class="form-control" id="userId" name="userId">
                            <option value="0">Chọn tác giả của comment</option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="commentContent">Content of the comment</label>
                        <input type="text" class="form-control" id="commentContent" name="name" placeholder="Nhập content của comment...">
                    </div>
                    <div class="form-group">
                        <label for="commentParentId">Comment cha</label>
                        <select class="form-control" id="commentParentId" name="parent_id">
                            <option value="0">Không có comment cha</option>
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