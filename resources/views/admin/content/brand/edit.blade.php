@extends('layout.cms')
@section('content_body')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Edit brand information</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.brand.update",$item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="brandName">Brand name</label>
                        <input type="text" class="form-control" id="brandName" name="name" placeholder="Enter the brand's name..." value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="brandImage">Brand image</label>
                        <input type="text" class="form-control" id="brandImage" name="image" placeholder="Upload the brand's image..."  value="{{$item->image}}">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection