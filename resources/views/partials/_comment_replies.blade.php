<div class="display-comment">
    @if(is_array($comments))
@foreach($comments as $comment)
    <div class="display-comment">
        <strong> {{$comment->user->name}}</strong>
        <p>{{$comment->body}}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{route('reply.add')}}">
            <div class="form-group">
                <input type="text" class="form-control" name="comment_body"/>
                <input type="hidden" name="post_id" value="{{$post->id}}"/>
                <input type="hidden" name="post_id" value="{{$comment->id}}"/>
            </div> 
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Add Reply"/>
            </div>
        </form>
        @include('partials._comment_replies', ['comments'=>$comment->replies])

    
    
@endforeach
@endif
</div>