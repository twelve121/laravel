@extends('layout.master')
@section('content')
	<div class="grid__col-6">
        <div class="home-course mb-20">
            <div class="grid__row">
                <div class="home-course__heading">
                    <h2 class="home-course__heading-title">Các khóa học của tôi</h2>
                </div>
                @foreach($topic as $key => $value)
                <div class="grid__col-2-3">
                    <div class="home-course__subject">
                        <!-- ,['id'=>'$value['topic_id']'] -->
                        <a href="{{route('user.exam',$value['exam_id'])}}" class="home-course__subject-img-link">
                            <div class="home-course__subject-img"style="background-image: url({{$value['thumbnail']}})"></div>
                        </a>
                        <div class="home-course__subject-wrapper">
                            <div class="home-course__subject-title">
                                <h3 class="home-course__subject-title-name">
                                    <a href="{{route('user.exam',$value['exam_id'])}}" class="home-course__subject-title-link">{{$value['title']}}</a>
                                </h3>
                            </div> 
                            <div class="home-course__subject-description">
                                <span>{{$value['description']}}</span>
                            </div>
                            <a href="{{route('user.exam',$value['exam_id'])}}" class="home-course__subject-link">
                                <i class="ti-face-smile home-course__subject-icon"></i>
                                Vào học
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
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
@endsection
