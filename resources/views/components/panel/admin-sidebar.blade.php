{{-- ----------------------------------- Admin Section ----------------------------------- --}}

<!-- Sidenav Heading (Books)-->
<div class="sidenav-menu-heading">Books</div>

<!-- Sidenav Accordion (Flows)-->
<a
    class="nav-link collapsed"
    href="javascript:void(0);"
    data-bs-toggle="collapse"
    data-bs-target="#collapseFlows"
    aria-expanded="false"
    aria-controls="collapseFlows"
>
    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
    Books Section
    <div class="sidenav-collapse-arrow">
        <i class="fas fa-angle-down"></i>
    </div>
</a>
<div
    class="collapse"
    id="collapseFlows"
    data-bs-parent="#accordionSidenav"
>
    <nav class="sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('book.create') }}"
        >Add books</a
        >
        <a class="nav-link" href="{{ route('book.index') }}">View & Update Books</a>
        <a class="nav-link" href="{{ route('books.export') }}">Export Books</a>
        <a class="nav-link" href="{{ route('books.import_view') }}">Import Books</a>
    </nav>
</div>


{{-- ------------------------- Profile Section ------------------------- --}}

<!-- Sidenav Heading (Books)-->
<div class="sidenav-menu-heading">Profile Section</div>

<!-- Sidenav Link (Dashboard)-->
<a class="nav-link" href="{{ route('profile.edit') }}">
    <div class="nav-link-icon">
        <i data-feather="bar-chart"></i>
    </div>
    Profile
</a>

<a class="nav-link" href="{{ route('front') }}">
    <div class="nav-link-icon">
        <i data-feather="bar-chart"></i>
    </div>
    Back to Home
</a>


{{-- ----------------------------------- Admin Section ----------------------------------- --}}
