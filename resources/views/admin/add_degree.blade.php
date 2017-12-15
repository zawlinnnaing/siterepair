@extends('layouts.app') @section('content')
<div class="columns">
    @include('depSideBar')
    <div class="column">
        @if(Session::has('msg'))
            <p class="is-success">{{ Session::get('msg') }}</p>
        @endif
        <form action="{{ route('admin.insert_deg') }}" method="POST">
            {{ csrf_field() }}
            <h3>Select a major</h3>
            <div class="field">
                @include('admin.selectDep')
            </div>
            <div class="field">
                <label class="label">
                    Undergraduate / Postgraduate
                </label>
                <div class="control">
                    <select  name="type" required>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="postgraduate">Postgraduate</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label class="label">Degree title</label>
                <div class="control">
                    <input type="text" name="deg_title" class="input"> @if($errors->has('deg_title'))
                    <p class="help is-danger">{{ $errors->first('deg_title') }}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection