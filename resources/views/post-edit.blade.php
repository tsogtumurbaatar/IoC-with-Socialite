@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('postput') }}">
                        <input type="hidden" name="id" value="{{$post->id}}" />
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $post->post_title }}" autofocus>

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
                                <input id="body" type="text" class="form-control" name="body" value="{{ $post->post_body }}">

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
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $post->phone->phonenumber }}">

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
                                <select id="category" type="text" class="form-control" name="category" >
                                 
                                @if($post->category_id==1)
                                <option selected value="1">Category 1</option>
                                @else
                                <option value="1">Category 1</option>
                                @endif
                                
                                @if($post->category_id==2)
                                <option selected value="2">Category 2</option>
                                @else
                                <option value="2">Category 2</option>
                                @endif
                     

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
                                    Save post
                                </button>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/')}}/post">Go Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
</div>
@endsection
