@foreach($menus as $item)
    <option value="{{$item->id}}">{{str_repeat("----", $level).$item->name}}</option>
    @if($item->childs)
        @include('admin.content.menu.menu_option', ["menus" => $item->childs, 'level' => $level+1])
    @endif
@endforeach