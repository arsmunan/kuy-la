<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/icon_set/logo_kuyla.png') }}" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb">
        <span class="navbar-toggler-icon">
        </span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr3">
                <li class="nav-item mx-md-2">
                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ url('/detail') }}" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop"
                    data-toggle="dropdown">
                    Services
                </a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Link</a>
                    <a href="#" class="dropdown-item">Link</a>
                    <a href="#" class="dropdown-item">Link</a>
                </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>
            
               @guest
                    <!-- Mobile Button -->

                        <form action="" class="form-inline d-sm-block d-md-none">
                            <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                                Masuk
                            </button>
                        </form>

                        <!-- Dekstop Button -->
                        <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                                Masuk
                            </button>
                        </form>
               @endguest
               @auth
                    <!-- Mobile Button -->

                        <form action="{{ url('logout') }}" method="POST" class="form-inline d-sm-block d-md-none">
                            <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                                @csrf
                                Keluar
                            </button>
                        </form>

                        <!-- Dekstop Button -->
                        <form action="{{ url('logout') }}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                                @csrf
                                Keluar
                            </button>
                        </form>
               @endauth

        </div>
    </nav>
</div>