<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" id="navbar">
                <li><a href="{{ route('index') }}" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="{{ route('orders.index') }}" class="nav-link px-2 text-white">Orders</a></li>
                <li><a href="{{ route('contactus') }}" class="nav-link px-2 text-white">Contact Us</a></li>
                <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="display:flex;" method="GET" action="{{ route('search') }}">
               <input type="search" name="search" class="form-control form-control-dark" placeholder="Search..."
                    aria-label="Search">
                <button id="search-button" style="width:20%" class="form-control form-control-dark" type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <div class="text-end">
                <div class="YUhWwv">
                    <a class="_3SkBxJ" href="{{ route('cart.index') }}"><svg class="V3C5bO" width="14"
                            height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="_1bS9ic"
                                d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86"
                                fill="#fff"></path>
                        </svg>
                        @auth
                            <div class="KK-o3G">{{ Auth::user()->cart->sum('pivot.quantity') }}</div>
                        @endauth
                        <span>Cart</span>
                    </a>
                </div>
            </div>
            @auth
                {{ auth()->user()->name }}
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                </div>
            @endguest
        </div>
    </div>
</header>
