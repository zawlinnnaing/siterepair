<select name="name" required>
    <option value=""> -- Select A Dep --</option>
    @php
        $departments = \App\Department::all();
    @endphp
    @foreach($departments as $dep)
        <option value="{{ $dep->name }}">{{ ucwords($dep->name) }}</option>
    @endforeach
</select>

<p class="help is-warning">Please note that department cannot be changed later</p>