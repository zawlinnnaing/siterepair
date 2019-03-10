<div class="column is-3">
    <aside class="menu">
        <ul class="menu-list">
            <li><a href="{{ route('admin.createDep') }}">Add department</a></li>
        </ul>
        <p class="menu-label">
            Manage Website
        </p>
        <ul class="menu-list">
            <li>Inserting Information
                <ul>
                    <li><a href="{{ route('admin.add_research') }}">Research facilities</a></li>
                    <li><a href="{{ route('admin.add_degree') }}">Degrees</a></li>
                    <li><a href="{{ route('admin.add_staff') }}">Staff</a></li>
                    <li><a href="{{ route('admin.add_course') }}">Course</a></li>
                    <li><a href="{{ route('research_papers.create') }}">Research papers</a></li>
                </ul>
            </li>
            <li>Lists</li>
            <ul>
                <li><a href="{{ route('research_papers.index') }}">Research Papers</a></li>
            </ul>
        </ul>

        <p class="menu-label">
            Dept details
        </p>
        @php
            $departments = \App\Department::all();
        @endphp
        <ul class="menu-list">
            @foreach($departments as $dep)
                <li><a href="{{route('admin.edit_dep',$dep->name)}}">{{ ucwords($dep->name) }}</a></li>
            @endforeach
        </ul>
    </aside>
</div>