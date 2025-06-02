@foreach($comments as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$item->name}}</td>
        <td>{{$item->slug}}</td>

        <td class="text-center">
            <a href="{{route('admin.comment.edit',$item->id )}}">
                <button class="btn btn-outline-warning mr-2"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{route('admin.comment.destroy',$item->id )}}"
               onclick="return confirm('Are you sure you want to delete this?');">
               <button class="btn btn-outline-danger mr-2"><i class="fas fa-trash"></i></button>
            </a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.comment.row_table', ["comments"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach