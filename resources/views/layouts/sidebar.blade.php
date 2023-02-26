<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img width="40px" src="{{ asset('assets/img/kit.png') }}" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Livewire <sup style="background-color: red">Kit</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('index_page') }}">
            <i class="fas fa-fw fa-plus"></i>
            <span>Sayfalar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @foreach($pages as $page)
        <li class="nav-item {{ Route::current()->page == $page->slug ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('page.show', $page->slug ) }}">
                <span>{{ $page->title }}</span></a>
        </li>
    @endforeach

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
