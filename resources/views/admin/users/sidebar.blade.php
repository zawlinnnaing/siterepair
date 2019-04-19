<div class="column is-3">
    <aside class="menu">
        <p class="menu-label">
            Manage Users
        </p>
        <ul class="menu-list">
            <li>You
                <ul>
                    <li><a href="{{ route('admin.change_password') }}">Change Password</a>
                    </li>
                </ul>
            </li>
            <li><a href="{{route('users.index') }}">Users</a>
                <ul>
                    <li><a href="{{ route('users.create') }}">Add User</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>