@extends('layouts.app')
@section('content')
<div class="columns">
	@include('depSideBar')
	<div class="column">
		@if(Session::has('msg'))
            <p class="is-success">{{ Session::get('msg') }}</p>
        @endif
        <form action="{{ route('admin.insert_staff') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Select a major</h3>
            <div class="field">
                @include('admin.selectDep')
            </div>
            <div class="field">
                <label class="label">
                	Name
                </label>
                <div class="control">
                    <input type="text" name="staff_name" class="input" required>
                    @if($errors->has('staff_name'))
                    <p class="help is-danger">{{ $errors->first('staff_name') }}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label">Staff title</label>
                <div class="control">
                    <input type="text" name="title" class="input" placeholder="Eg.Head of Department,Professor,..."> @if($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div>
            </div> 
            <div class="field">
                <label class="label">Research area</label>
                <div class="control">
                    <input type="text" name="research_area" class="input"> @if($errors->has('research_area'))
                    <p class="help is-danger">{{ $errors->first('research_area') }}</p>
                    @endif
                </div>
            </div> 
            <div class="field">
                <label class="label">Current Research</label>
                <div class="control">
                    <input type="text" name="current_research" class="input"> @if($errors->has('current_research'))
                    <p class="help is-danger">{{ $errors->first('current_research') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
            	<label class="label">Image</label>
            	<div class="control">
            		<input type="file" name="img_dir">
            		 @if($errors->has('img_dir'))
                    <p class="help is-danger">{{ $errors->first('img_dir') }}</p>
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