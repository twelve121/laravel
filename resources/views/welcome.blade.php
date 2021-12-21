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
                                    <a href="{{url('/')}}" class="menu-list__link">
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
        <div class="grid__col-6">
            <div class="home-course mb-20">
                <div class="grid__row">
                    <div class="home-course__heading">
                        <h2 class="home-course__heading-title">Các khóa học</h2>
                    </div>
                    <!-- LOGGED -->
                    <div class="grid__col-2-3">
                        <div class="home-course__subject">
                            <a href="testing.html" class="home-course__subject-img-link">
                                <div class="home-course__subject-img" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAD5GzLci-goNT5-mahGt7LzKW2nFVxXjSfQ&usqp=CAU)"></div>
                            </a>
                            <div class="home-course__subject-wrapper">
                                <div class="home-course__subject-title">
                                    <h3 class="home-course__subject-title-name">
                                        <a href="testing.html" class="home-course__subject-title-link">COMP 125 - Kiến thức cơ bản về Word</a> </h3>
                                </div> 
                                <div class="home-course__subject-description">
                                    <span>Microsoft Word là chương trình soạn thảo, xử lý văn bản phổ biến với tất cả mọi người dùng máy tính trên toàn thế giới, được phát triển bởi Microsoft và thuộc bộ ứng dụng Microsoft Office. Thông qua các công cụ định dạng Microsoft Word giúp bạn tạo ra các tài liệu có chất lượng chuyên nghiệp một cách hiệu quả. Bên cạnh đó, Word còn bao gồm các công cụ chỉnh sửa và sửa đổi giúp bạn có thể cộng tác với mọi người một cách dễ dàng.</span>
                                </div>
                                <a href="testing.html" class="home-course__subject-link">
                                    <i class="ti-face-smile home-course__subject-icon"></i>
                                    Đăng ký thi thử
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid__col-2-3">
                        <div class="home-course__subject opacity">
                            <a href="testing.html" class="home-course__subject-img-link" style="cursor: default;">
                                <div class="home-course__subject-img" style=" background-image: url(https://cafedev.vn/wp-content/uploads/2019/12/cafedev_javascript.png)"></div>
                            </a>
                            <div class="home-course__subject-wrapper">
                                <div class="home-course__subject-title">
                                    <h3 class="home-course__subject-title-name">
                                        <a href="testing.html" class="home-course__subject-title-link" style="cursor: default;">COMP 125 - Kiến thức cơ bản về JavaScript</a> </h3>
                                </div> 
                                <div class="home-course__subject-description">
                                    <span>JavaScript là ngôn ngữ lập trình phổ biến nhất trên thế giới trong suốt 20 năm qua. JavaScript có thể học nhanh và dễ dàng áp dụng cho nhiều mục đích khác nhau, từ việc cải thiện tính năng của website đến việc chạy game và tạo phần mềm nền web. Hơn nữa, có hàng ngàn mẫu template JavaScript và ứng dụng ngoài kia, nhờ vào sự cống hiến của cộng đồng, đặc biệt là Github.</span>
                                </div>
                                <a href="#" class="home-course__subject-link js-home-course__subject-link">
                                    <i class="ti-face-smile home-course__subject-icon"></i>
                                    Đăng ký thi thử
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid__col-2-3">
                        <div class="home-course__subject opacity">
                            <a href="testing.html" class="home-course__subject-img-link" style="cursor: default;">
                                <div class="home-course__subject-img" style="background-image: url(https://www.semtek.com.vn/wp-content/uploads/2021/04/mang-may-tinh.jpg)"></div>
                            </a>
                            <div class="home-course__subject-wrapper">
                                <div class="home-course__subject-title">
                                    <h3 class="home-course__subject-title-name">
                                        <a href="testing.html" class="home-course__subject-title-link" style="cursor: default;">COMP 125 - Kiến thức cơ bản về Máy tính và Mạng máy tính</a> </h3>
                                </div>  
                                <div class="home-course__subject-description">
                                    <span>Mạng máy tính là một hệ thống gồm nhiều máy tính và các thiết bị được kết nối với nhau bởi đường truyền vật lý theo một kiến trúc (Network Architecture) nào đó nhằm thu thập, trao đổi dữ liệu và chia sẽ tài nguyên cho nhiều người sử dụng. Các máy tính được kết nối với nhau có thể trong cùng một phòng, một tòa nhà, một thành phố hoặc trên phạm vi toàn cầu.</span>
                                </div>
                                <a href="#" class="home-course__subject-link js-home-course__subject-link">
                                    <i class="ti-face-smile home-course__subject-icon"></i>
                                    Đăng ký thi thử
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="modal js-modal">
            <div class="modal__overlay"></div>


            <div class="modal__slider js-modal__slider ">
                <div class="modal__slider-image">
                    <img src="/images/Microsoft-Office-Word-2016-Part-1.jpg" alt="">
                    <img src="/images/js-modal.jpg" alt="">
                    <img src="/images/mmt-modal.png" alt="">
                </div>
                <div class="modal__slider-close-icon ">
                    <span class="ti-close"></span>
                </div>
                <div onclick="side_slide(-1)" class="modal__slider-icon left ">
                    <span class="ti-angle-left"></span>
                </div>
                <div onclick="side_slide(1)" class="modal__slider-icon right ">
                    <span class="ti-angle-right"></span>
                </div>
                <div class="btm-slider">
                    <span onclick="btm_slide(1)" class="btm-slider-reg"></span>
                    <span onclick="btm_slide(2)" class="btm-slider-reg"></span>
                    <span onclick="btm_slide(3)" class="btm-slider-reg"></span>
                </div>
            </div>
        </div>
        <div class="modal__login js-modal-login">
            <div class="modal__overlay"></div>
            <div class="modal__alert js-modal__alert">
                <div class="modal__alert-des">
                    <i class="fas fa-sad-tear modal__alert-icon"></i>
                    <h3 class="modal__alert-text">Bạn cần đăng nhập để thực hiện các khóa học tiếp theo</h3>
                </div>
                <div class="modal__alert-close-icon ">
                    <span class="ti-close"></span>
                </div>
                <div class="modal__alert-login">
                    <div class="modal__alert-login-button">
                        <a href="" class="modal__alert-login-link">Đăng nhập</a>
                    </div>
                    <a href="" class="modal__alert-login-question">Bạn chưa có tài khoản?</a>
                </div>
            </div>
        </div>
        <script>
        const modalLogin = document.querySelector('.js-modal-login');
        const alerts = document.querySelectorAll('.js-home-course__subject-link')
        const modalAlert = document.querySelector('.js-modal__alert')
        const modal_Close = document.querySelector('.modal__alert-close-icon');

        function showLogin(){
            modalLogin.classList.add('open');
        }

        for(const alert of alerts){
            alert.addEventListener('click', showLogin);
        }
        
        modal_Close.addEventListener('click', function(){
            modalLogin.classList.remove('open');
        })

        modalLogin.addEventListener('click', function(){
            modalLogin.classList.remove('open');
        })
        
        modalAlert.addEventListener('click', function(event){
            event.stopPropagation();
        })
</script>
<script>
    var indexValue = 1;
    showImg(indexValue);
    
    function btm_slide(e){ showImg(indexValue = e);}
    function side_slide(e){ showImg(indexValue += e);}

    function showImg(e){
        var i; 
        const img = document.querySelectorAll('img');
        const sliders = document.querySelectorAll('.btm-slider span');
        
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}

        for(i = 0; i < img.length; i++){
            img[i].style.display = "none";
        }

        for(i = 0; i < sliders.length; i++){
            sliders[i].style.background = "rgba(255, 255, 255, 0.1)";
        }

        img[indexValue-1].style.display = "block";
        sliders[indexValue-1].style.background = "white";
    }
    
    const modal = document.querySelector('.js-modal');
    const modalSlider = document.querySelector('.js-modal__slider')
    const modalClose = document.querySelector('.modal__slider-close-icon');
    
    modalClose.addEventListener('click', function(){
        modal.classList.add('hide');
    })

    modal.addEventListener('click', function(){
        modal.classList.add('hide');
    })
    
    modalSlider.addEventListener('click', function(event){
        event.stopPropagation();
    })
</script>