@section('sidebar')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.getUser') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pengguna
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kehadiran.getKehadiran') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Kehadiran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jabatan.getJabatan') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
                    Jabatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/fullcalender">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Jadwal
                </a>
            </li>


        </ul>

    </div>
</nav>
@endsection