@foreach($comments as $comment)
    <option value="{{$comment->id}}">{{str_repeat("----", $level).$comment->content}}</option>
    @if($comment->childs)
        @include('admin.content.comment.comment_option', ["comment" =>$comment->childs, 'level' => $level+1])
    @endif
@endforeach