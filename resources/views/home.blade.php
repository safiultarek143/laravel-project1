@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <h2>Add A post</h2>
                   <form action="{!! ('posts.store') !!}">
                    <label for="">Enter Post Title</label><br>
                    <input type="text" name="title" class="form-control">
                    <label for="">Enter Post Description</label><br>
                    <textarea name="description" class="form-control" rows="5"></textarea>
                    <label for="">category</label><br>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option vaule="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="mt-2 btn btn-success" value="publish">
                    
                       
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
