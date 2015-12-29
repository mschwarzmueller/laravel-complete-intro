<header class="top-nav">
    <nav>
        <ul>
            <li {{ Request::is('admin') ? 'class=active' : '' }}><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li {{ Request::is('admin/blog/post*') ? 'class=active' : '' }}><a href="{{ route('admin.blog.index') }}">Posts</a></li>
            <li {{ Request::is('admin/blog/category*') || Request::is('admin/blog/categories*') ? 'class=active' : '' }}><a href="{{ route('admin.blog.categories') }}">Categories</a></li>
            <li {{ Request::is('admin/contact/*') ? 'class=active' : '' }}><a href="{{ route('admin.contact.index') }}">Contact Messages</a></li>
            <li {{ Request::is('admin/logout') ? 'class=active' : '' }}><a href="{{ route('admin.logout') }}">Logout</a></li>
        </ul>
    </nav>
</header>