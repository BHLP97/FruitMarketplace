@foreach($categories as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>Placeholder image</td>
        <td>{{str_repeat("----", $level)}}  {{$item->name}}</td>
        <td>{{$item->slug}}</td>

        <td class="text-center">
            <a href="{{route('admin.category.{model_type}.edit', [$item->id, $model_type])}}">
                <button class="btn btn-outline-warning mr-2"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{route('admin.category.{model_type}.destroy', [$item->id, $model_type])}}"
               onclick="return confirm('Are you sure you want to delete this?');">
               <button class="btn btn-outline-danger mr-2"><i class="fas fa-trash"></i></button>
            </a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.category.row_table', ["categories" => $item->childs, "level"=>$level+1])
    @endif
@endforeach