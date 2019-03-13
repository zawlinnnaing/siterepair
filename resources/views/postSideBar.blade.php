<div class="column is-3">
    <aside class="menu">
        <p class="menu-label">
            Posts
        </p>
        <ul class="menu-list">
            <li><a href="{{ route('posts.index') }}">Posts</a>
                <ul>
                    <li><a href="{{ route('posts.add') }}">Add post</a></li>
                </ul>
            </li>
            <li><a href="{{route('announcements.index') }}">Announcements</a>
                <ul>
                    <li><a href="{{ route('announcements.add') }}">Add Announcement</a></li>
                </ul>
            </li>
            <li><a href="{{ route('categories.index') }}">Categories</a>
                <ul>
                    <li><a href="{{ route('categories.create') }}">Add Categories</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>