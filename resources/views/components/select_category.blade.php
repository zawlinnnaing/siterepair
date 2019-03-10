<select name="category_id" required>
    <option value=""> -- Select A Category --</option>
    @php
        $categories = \App\Category::all();
    @endphp
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ ucwords($category->title) }}</option>
    @endforeach
</select>

<p class="help is-warning">Please note that category cannot be changed later</p>
@if($errors->has('category_id'))
    <p class="help is-danger">{{ $errors->first('category_id') }}</p>
@endif