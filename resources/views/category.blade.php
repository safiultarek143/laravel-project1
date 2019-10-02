@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            
            <div class="panel panel-body">
                <h2>category={{ $category->name }}</h2>
                @foreach($category->posts as $post)
                <div class="panel panel-body mt-2">
                    <h3>{{ $post->title }} <mark><small>{{ $post->category->name }}</small></mark></h3>
                
                <div>{!! $post->description !!}
                </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
