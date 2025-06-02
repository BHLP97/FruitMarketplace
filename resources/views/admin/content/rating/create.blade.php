@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Thêm mới danh mục</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.rating.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="userId">User</label>
                        <select class="form-control" id="userId" name="userId">
                            <option value="0">Chọn tác giả của review</option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="reviewDescription">Short description of the review</label>
                        <input type="text" class="form-control" id="reviewDescription" name="description" placeholder="Nhập description của review...">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Danh mục cha</label>
                        <select class="form-control" id="categoryParentId" name="parent_id">
                            <option value="0">No parent category</option>
                            @include('admin.content.category.category_option', ["categories" =>$categories, 'level' => 0])
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection