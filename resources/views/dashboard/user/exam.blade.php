@extends('layout.master')
@section('content')
<div class="grid__col-6">
    <div class="testing">
        <div class="grid__row">
            
            <div class="testing__header">
                <h2 class="testing__header-title">COMP 125 - Kiến thức cơ bản về WORD</h2>
            </div>
            <div class="grid__col-6-2">
                <form id="myform" method="post" name="quiz" action="{{route('user.submitExam')}}">
                @csrf
                @foreach ($listQuest as $key => $value)
                <div class="testing__question-wrapper">
                    <div class="testing__question">
                        <a name="{{$key+1}}"></a>
                        <h3 class="testing__question-num-header">Câu hỏi: {{$key+1}} </h3>
                        <div class="testing__question-properties">
                            <div class="testing__question-mark">Đạt điểm 1,00</div>
                            <div class="testing__question-flag">
                                <i class="testing__question-icon ti-close"></i>
                                Đặt cờ
                            </div>
                        </div>
                    </div>
	                    <div class="testing__question-content ">
	                        <h3 class="testing__question-title">{{$value['question']}}</h3>
                                @foreach ($value['answer'] as $key2 => $ans)
                                    @if ($key2 != 'ans')
                                    <div class="testing__question-answer-choosen">
                                        <input type="radio" value="{{$key2}}" name="{{$value['question_id']}}" id="{{$value['question_id'].$key2}}" class="testing__question-answer-input">
                                        <label for="{{$value['question_id'].$key2}}"class="testing__question-answer-label">{{$ans}}</label>
                                    </div>
                                    @endif
                                @endforeach
	                    </div>
                </div>
                @endforeach
                </form>
            </div>
            <div class="grid__col-2-2">
                <div class="testing__question-extra">
                    <div class="grid__row">
                        <h3 class="testing__question-extra-header">Các câu hỏi trong bài kiểm tra</h3>
                        <div class="count-down">
                            <div class="count-down-wrapper">
                                <div class="count-down__icon">
                                    <i class="ti-alarm-clock"></i>
                                </div>
                                <div id="quiz-time-left"></div>
                            </div>
                        </div>
                        @foreach ($listQuest as $key => $value)
                        <div class="testing__question-id">
                            <div class="testing__question-id-num">
                                <a href="#{{$key+1}}">{{$key+1}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        <button form="myform" type="submit" class="testing__question-extra-submit">Kết thúc bài kiểm tra</button>
                </div>

            </div>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    var total_seconds = 60*20;
    var c_minutes = parseInt(total_seconds/60);
    var c_seconds = parseInt(total_seconds%60);

    function CheckTime(){
        if(c_seconds<10){
            c_seconds = "0" + c_seconds;
        }

        document.getElementById("quiz-time-left").innerHTML
        = 'Thời gian còn lại: ' + c_minutes + ':' + c_seconds + ' ' ;
       
        if(total_seconds <=0){
            setTimeout(function(){document.quiz.submit() ;},1);
        } 
        else {
            total_seconds = total_seconds -1;
            c_minutes = parseInt(total_seconds/60);
            c_seconds = parseInt(total_seconds%60);
            setTimeout(function(){CheckTime() ;},1000);
        }
    }
    setTimeout(function(){CheckTime() ;},1000);
</script>
@endsection