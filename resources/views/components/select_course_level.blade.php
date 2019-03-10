<div class="field">
    <label class="label">Course Level</label>
    <div class="control">
        <select name="course_level" class="select" required>
            <option value="1">{{ Config::get('constants.course_level')[1] }}</option>
            <option value="2">{{ Config::get('constants.course_level')[2] }}</option>
            <option value="3">{{ Config::get('constants.course_level')[3] }}</option>
        </select>
    </div>
    @if($errors->has('course_level'))
        <p class="help is-danger">{{ $errors->first('course_level') }}</p>
    @endif
</div>