@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postsave') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Body</label>

                            <div class="col-md-6">
                                <input id="body" type="text" class="form-control" name="body" value="{{ old('body') }}">

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  


                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="text" class="form-control" name="category" value="{{ old('category') }}">
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<div class="panel panel-default">
                <div class="panel-heading">Post list</div>

                <div class="panel-body">

    @foreach ($posts as $post)
    {{$post->post_title}},{{$post->post_body}}, {{$post->phone->phonenumber}} , {{$post->category->category_name}}&nbsp;&nbsp;&nbsp;<a href="{{url('/')}}/edit/{{$post->id}}">Edit</a>&nbsp;&nbsp;&nbsp;<a href="{{url('/')}}/delete/{{$post->id}}">Delete</a>
    <br>
    @endforeach
                </div>
            </div>

        </div>
    </div>
    
</div>
@endsection
