@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Edit menu information</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.menu.update",$item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="menuName">Category name</label>
                        <input type="text" class="form-control" id="menuName" name="name" placeholder="Enter the menu's name..." value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="menuSlug">Slug</label>
                        <input type="text" class="form-control" id="menuSlug" name="slug" placeholder="Enter the menu's slug..."  value="{{$item->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="menuParentId">Menu parent</label>
                        <select class="form-control" id="menuParentId" name="parent_id">
                            <option value="0">No parent category</option>
                            @include("admin.content.menu.menu_selected_option", ["menus"=>$menu, "level"=>0, "item"=>$item])
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection