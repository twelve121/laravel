<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css\base.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <link rel="stylesheet" href="{{asset('themify-icons\themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome\css\all.min.css')}}">
    <title>Trang chủ</title>
</head>
<body>
    <div class="wrapper">

        <!-- HEADER -->

        <header class="top-bar">
            <div class="top-bar__grid">
                <div class="top-bar__search">
                    <div class="top-bar__search-input">
                        <form action="" method="post">
                            <input type="text" class="search-input" placeholder="Tìm kiếm khóa học" name="search">
                        </form>
                        <button class="top-bar__search-btn">
                            <i class="top-bar__search-icon ti-search"></i>
                        </button>
                    </div>
                </div>
                <ul class="top-bar__user-login">

                    <!-- NOT LOGGED -->
                    @guest
                        @if (Route::has('login'))
                            <li class="top-bar__login">
                                <a class="top-bar__login-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="top-bar__login">
                                <a class="top-bar__login-link"href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                            </li>
                        @endif
                    <!-- LOGGED -->
                    @else
                    <li class="top-bar__user">
                        <i class="ti-angle-down top-bar__user-icon"></i>
                        <!-- <img src="..\images\f3.png" alt="" class="top-bar__user-img"> -->
                        <span class="top-bar__user-name">{{ Auth::user()->name }}</span>
                        <ul class="top-bar__user-logout" >
                            <li class="top-bar__user-logout-list" style="width: 180px;">
                                <a href="profile.html" class="top-bar__user-logout-link" >
                                    <i class="ti-user top-bar__user-list-icon"></i>
                                    Trang cá nhân
                                </a>
                            </li>
                            <li class="top-bar__user-logout-list" style="background-color: #c62d2d; border-bottom-right-radius:3px; border-bottom-left-radius:3px;width: 180px;">
                                <a href="" class="top-bar__user-logout-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-share top-bar__user-list-icon"></i>
                                        {{ __('Đăng xuất') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </header>

        <!-- CONTAINER -->

        <div class="container mt-50">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-2">

                        <!-- MENU -->
                        <nav class="menu">
                            <ul class="menu-category">
                                <li class="menu-list">
                                    <a href="{{route('user.dashboard')}}" class="menu-list__link">
                                        <i class="menu-icon ti-home"></i>
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="menu-list">
                                    <a href="contact.html" class="menu-list__link">
                                        <i class="menu-icon ti-location-pin"></i>
                                        Liên hệ
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu__course">
                                <li class="menu__course-list">
                                    <a href="#" style="cursor: default" class="menu__course-list__link">
                                        <i class="menu-icon ti-list"></i>
                                        Các khóa học
                                    </a>
                                    <ul class="menu__course-2">
                                        <li class="menu__course-list-2">
                                            <a href="testing.html" class="menu__course-list__link-2">
                                                <i class="menu-icon ti-agenda"></i>
                                                COMP125 KIẾN THỨC CƠ BẢN WORD
                                            </a>
                                        </li>
                                        <li class="menu__course-list-2">
                                            <a href="testing.html" class="menu__course-list__link-2">
                                                <i class="menu-icon ti-agenda"></i>
                                                COMP229 KIẾN THỨC CƠ BẢN JAVASCRIPT</a>
                                        </li>
                                        <li class="menu__course-list-2">
                                            <a href="testing.html" class="menu__course-list__link-2">
                                                <i class="menu-icon ti-agenda"></i>
                                                COMP125 KIẾN THỨC CƠ BẢN MÁY TÍNH VÀ MẠNG MÁY TÍNH
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- FOOTER -->

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-2">
                        <div class="footer__school">
                            <div class="footer__school-wrapper">
                                <h2 class="footer__school-name">trường đại học sư phạm hà nội</h2>
                                <span class="footer__website">Website: </span><a href="hnue.edu.vn" class="footer__website-link">hnue.edu.vn</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid__col-6 ">
                        <div class="footer__col-6">
                            <div class="footer__career">
                                <h2 class="footer__career-name">khoa công nghệ thông tin</h2>
                                <span class="footer__website">Website: </span><a href="hnue.edu.vn" class="footer__website-link">fit.hnue.edu.vn</a>
                            </div>
                            <div class="footer__author">
                                <h2 class="footer__author-header">người sáng lập</h2>
                                <span class="footer__author-name" id="footer__author-name-1">Nguyễn Việt Tiến</span><span class="footer__author-name" id="footer__author-name-2">Trịnh Hoàng Việt</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>