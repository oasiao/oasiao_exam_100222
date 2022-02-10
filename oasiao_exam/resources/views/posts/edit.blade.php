@extends('layout')
@section('title','Create')
@section('content')
    @if( $errors->any())
        <div class="text-danger">
            @foreach( $errors->all() as $e)
                <li style="list-style:none">{{ $e }}</li>
            @endforeach
        </div>
    @endif
    <div class="form-body">
        <div class="row gap-2">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>@lang('Edit') #{{ $post->id }} </h3>
                        <p>@lang('Fill in the data below')</p>
                        <form class="requires-validation" method="post" action="/posts/{{ $post->id }}">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 mt-3">
                                <input type="text" name="title" placeholder="@lang('Title')" value="{{ old('title',$post->title) }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="extract" placeholder="@lang('Extract')" value="{{ old('extract',$post->extract) }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="content" placeholder="@lang('Content')" value="{{ old('content',$post->content) }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <select name="access" id="access" class="block mt-1 w-full">
                                    <option value="public" {{ $post->access == 'public' ? 'selected' : '' }}>@lang('Public')</option>
                                    <option value="private" {{ $post->access == 'private' ? 'selected' : '' }}>@lang('Private')</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="date" name="publication" placeholder="@lang('Publication')" value="{{ old('publication',$post->publication) }}" class="form-control" required/>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">@lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
