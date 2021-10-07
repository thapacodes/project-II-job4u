<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
    <div class="container">
        <div class="d-flex align-items-center">
            @if(Auth::user())
            <button class="btn btn-danger me-2 d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="white" />
                </svg>
            </button>
            @endif
            <a class="navbar-brand fs-30 fw-700" href="{{ env('APP_URL') }}">
                Job4u
            </a>
        </div>
        <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown my-2 my-md-0">
                    <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/blog">Blog Post</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Youtube
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Twitter
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown my-2 my-md-0">
                    <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Job Seekers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/job">Browse Jobs</a></li>
                </li>
                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/all-companies">All Companies</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/learning-portal">Learning Portal</a>
                </li>
            </ul>
            </li>
            <li class="nav-item dropdown my-2 my-md-0">
                <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Employers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/post-a-job">Post a Job</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/why-choose-job4u">Why Choose Job4u
                            ?</a></li>
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/job4u-faq">Job4u FAQ</a></li>
                </ul>
            </li>
            <li class="nav-item mb-3 mb-md-0">
                <a class="nav-link text-black fw-500 fs-15 mx-2 me-3" href="{{ env('APP_URL') }}/search">
                    <svg class="search-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                            fill="black" />
                    </svg>
                </a>
            </li>
            <li class="nav-item"">
                          @if (Auth::user())
                @if (Auth::user()['role'] == 'job-seeker')
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle rounded-0" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()['name'] }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/settings">Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @elseif(Auth::user()['role'] == 'employeer')
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle rounded-0" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()['name'] }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/post-a-job">Post a
                                    job</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/company-details">Add
                                    Company
                                    Details</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/settings">Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            @else
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle rounded-0" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/login">Login</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/register">Register</a></li>
                    </ul>
                </div>
                @endif
            </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dashboard</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @if(Auth::user())
            @if(Auth::user()['role'] == 'job-seeker')
            @elseif(Auth::user()['role'] == 'employeer')
            @elseif(Auth::user()['role'] == 'admin')
            @endif
        @endif
    </div>
</div>
