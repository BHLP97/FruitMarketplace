@foreach($posts as $item)
    @php
        $user = User::find($item->user_id);
    @endphp
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$item->title}}<br>{{$item->description}}<br>{{$item->content}}</td>

        <td class="text-center">
            <a href="{{route('admin.post.edit', $item->id)}}">
                <button class="btn btn-outline-warning mr-2"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{route('admin.post.destroy', $item->id)}}"
               onclick="return confirm('Are you sure you want to delete this?');">
               <button class="btn btn-outline-danger mr-2"><i class="fas fa-trash"></i></button>
            </a>
        </td>
    </tr>
    <!-- @if($item->childs)
        @include('admin.content.category.row_table', ["posts" => $item->childs, "level"=>$level+1])
    @endif -->
@endforeach