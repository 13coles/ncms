

<div class="sidebar mt-5 border border-success shadow-sm">
    <div class="container mt-3 mb-3">
        <a class="m-3" href="{{ route('view.website') }}">View Website</a>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link m-3" href="{{ route('dashboard') }}">Dashboard</a>
        @if(Auth::user()->role === 'admin')
            <a class="nav-link m-3" href="{{ route('users.management') }}">User Management</a>
            <a class="nav-link m-3" href="{{ route('course.management') }}">Course Management</a>
            <a class="nav-link m-3" href="{{ route('applicants') }}">Applicants</a>
            <a class="nav-link m-3" href="{{ route('cms') }}">CMS</a>
        @elseif(Auth::user()->role === 'cms_admin')
            <a class="nav-link m-3" href="{{ route('cms') }}">CMS</a>
        @elseif(Auth::user()->role === 'nolitc_staff')
            <a class="nav-link m-3" href="{{ route('course.management') }}">Course Management</a>
            <a class="nav-link m-3" href="{{ route('applicants') }}">Applicants</a>
        @endif
    </nav>
</div>

