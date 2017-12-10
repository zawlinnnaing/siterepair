<div class="column is-3">
	<aside class="menu">
		<p class="menu-label">
			Research
		</p>
		<ul class="menu-list">
			<li><a href="{{ route('admin.add_research') }}">Add research facilities</a></li>
			<li><a href="{{ route('admin.add_degree') }}">Add Degrees</a></li>
		</ul>
		<p class="menu-label">
			Dept details
		</p>
		<ul class="menu-list">
			<li><a href="{{ route('admin.edit_dep',['keyword' => 'archi']) }}">Archi</a></li>
			<li><a href="{{ route('admin.edit_dep','biotech') }}">BioTech</a></li>
			<li><a href="{{ route('admin.edit_dep','chemical') }}">Chemical</a></li>
			<li><a href="{{ route('admin.edit_dep','civil') }}">Civil</a></li>
			<li><a href="{{ route('admin.edit_dep','ec') }}">EC</a></li>
			<li><a href="{{ route('admin.edit_dep','ep') }}">EP</a></li>
			<li><a href="{{ route('admin.edit_dep','it') }}">IT</a></li>
			<li><a href="{{ route('admin.edit_dep','nuclear') }}">Nuclear</a></li>
		</ul>
	</aside>
</div>