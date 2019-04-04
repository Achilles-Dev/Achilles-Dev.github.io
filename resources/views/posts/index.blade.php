@extends('layouts.app')
   
    @section('content')
            <h1>Posts</h1>
            @if(count($posts)> 0)
            <div>
                <h2>Categories</h2>
            </div>
            <div class="widget-body">
                
                <ul>
                    @foreach ($categories as $category)
                        
                    
                    <li>
                        <a href="{{route('category', $category->id)}} ">
                            <i class="fa fa-angle-right"></i> {{$category->title}}</a>
                        <span class="badge pull-centre">{{$category->posts->count()}}</span>
                    </li>
                    @endforeach
                </ul>

            </div>
            
                @foreach($posts as $post)
                    <div class='card bg-light p-3 mb-2'>
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                       <div class="float-right"> <small >Written on {{$post->created_at}} by {{$post['user']['name']}} </small></div>
                        <span>{{$post->comments->count()}} {{str_plural('comment', $post->comments->count())}}</span>
                    </div>    
                @endforeach
                {{$posts->links()}}
            @else
                <p> There are no posts.</p>
            @endif
    @endsection
    

