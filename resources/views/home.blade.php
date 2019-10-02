@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h4 class="text-center text-success">{{Session::get('msg')}}</h4>

                <div class="panel-body">
                   <h2>Add A post</h2>
                   <form action="{{ route('post.store') }}" method="post">
                    {{ csrf_field() }}
                    <label for="">Enter Post Title</label><br>
                    <input type="text" name="title" class="form-control">
                    <label for="">Enter Post Description</label><br>
                    <textarea name="description" class="form-control" rows="5"></textarea>
                    <label for="">category</label><br>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="mt-2 btn btn-success" value="publish">
                    
                       
                   </form>
                </div>
            </div>
            <div class="panel panel-body"> 
                <h2>all posts</h2>
                @if($posts)
                @foreach($posts as $post)
                <div class="panel panel-body mt-2">
                    <h3>{{ $post->title }} 
                        <mark><small>
            <a href="{!! route('category',$post->category->id) !!}">
                {{ $post->category->name }}</a>

                        </small></mark></h3>
                
                <div>{!! $post->description !!}
                </div>
                </div> 
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
