<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top fw-bolder mainNav">
    <a href="{{ route('home') }}" class="navbar-brand">Logo</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target=".mainManu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse mainManu justify-content-between text-center">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle link-secondary" data-bs-toggle="dropdown"
                   id="categories">Categories</a>
                <ul class="dropdown-menu bg-dark text-center text-md-start" aria-labelledby="categories">
                    <li><a class="dropdown-item link-secondary small fw-bolder bg-dark" href="categoryPage.html">Category 1</a></li>
                    <li><a class="dropdown-item link-secondary small fw-bolder bg-dark" href="categoryPage.html">Category 2</a></li>
                    <li><a class="dropdown-item link-secondary small fw-bolder bg-dark" href="categoryPage.html">Category 3</a></li>
                </ul>
            </li>
        </ul>
        <form class="mx-auto form-inline justify-content-around w-50" method="post" action="searchPage.html" autocomplete="off">
            <div class="input-group input-group-sm w-100">
                <input type="search" class="form-control form-control-sm bg-dark border border-secondary text-secondary shadow-none"
                       placeholder="Search your products or categories">
                <button class="btn shadow-none btn-secondary shadow-none" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link link-secondary{{  request()->routeIs('home') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-secondary{{  request()->routeIs('contact') ? ' active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <a class="position-relative text-decoration-none link-dark bg-secondary rounded px-2" href="{{ route('cart') }}">
            <i class="bi bi-bag-fill"></i>
            <span>Cart - 10$</span>
            <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-secondary text-dark">5</span>
        </a>
    </div>
</nav>
