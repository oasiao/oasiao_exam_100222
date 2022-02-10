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
                        <h3>@lang('Add a new post')</h3>
                        <p>@lang('Fill in the data below')</p>
                        <form class="requires-validation" method="post" action="/posts">
                            @csrf
                            <div class="col-md-12 mt-3">
                                <input type="text" name="title" placeholder="@lang('Title')" value="{{ old('title') }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="extract" placeholder="@lang('Extract')" value="{{ old('extract') }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="content" placeholder="@lang('Content')" value="{{ old('content') }}" class="form-control" required/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <select name="access" id="access" class="block mt-1 w-full">
                                    <option value="public">@lang('Public')</option>
                                    <option value="private">@lang('Private')</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="date" name="publication" placeholder="@lang('Publication')" value="{{ old('publication') }}" class="form-control" required/>
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
