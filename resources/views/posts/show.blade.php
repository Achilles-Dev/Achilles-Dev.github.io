@extends('layouts.app')
   
    @section('content')
        
        <a class="btn btn-default " href="/posts">Go Back</a>
          
            <h1>{{$post['title']}}</h1>
            <div>
                <h3>{!!$post['body']!!}</h3>
            </div>
            
            <small>Written on {{$post['created_at']}} by {{$post['user']['name']}}</small>
            

            <hr>
            <h4> Comments</h4>
            <hr>
            @if(is_array($post)|| is_object($post))
                @foreach ($post->comments as $comment)
                    <div class="dispaly-comment">
                         <strong>{{$comment->user->name}}</strong>
                        <p>{{$comment['body']}}</p>
                    </div>    
            
                @endforeach 
           @endif
             
        
            <hr />

            

           @if (Auth::check())
            {!! Form::open(['action' => ['CommentsController@store'], 'method'=> 'POST']) !!}
                <div class="form-group">
                {{Form::label('comment', 'Add Comment')}}
                {{Form::text('comment_body' ,old('body'),['class'=>'form-control', 'placeholder'=> 'Comment'])}}
                {{Form::hidden('post_id',$post['id'])}}
                </div>
                {{Form::submit('Add Comment' ,['class'=> 'btn btn-danger'])}}
            {!! Form::close() !!}
           @endif
            <hr />

   
        @if(!Auth::guest())    
            @if(Auth::user()->id == $post['user_id'])
            <a class="btn btn-inline btn-dark" href="/posts/{{$post->id}}/edit">Edit </a>
            <br>
            <br>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST',
            'class' => 'pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete' ,['class'=> 'btn btn-inline btn-danger '])}}
            {!! Form::close() !!}
            @endif
        @endif
       
            
    @endsection
    

