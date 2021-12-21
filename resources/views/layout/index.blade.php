<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css\base.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <link rel="stylesheet" href="{{asset('themify-icons\themify-icons.css')}}">
    <title>Trang chủ</title>
</head>
<body>
    <div class="wrapper">

        <!-- CONTAINER -->

        <div class="container mt-50">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-2">

                        <!-- MENU -->
                        <nav class="menu">
                            <ul class="menu-category">
                                <li class="menu-list">
                                    <a href="index.html" class="menu-list__link">
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