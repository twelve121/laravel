@extends('layout.master')
@section('content')
<div class="grid__col-6">
    <div class="testing">
        <div class="grid__row">
            
            <div class="testing__header">
                <h2 class="testing__header-title">Kết quả kiểm tra: Kiến thức cơ bản về WORD</h2>
            </div>
            <div class="grid__col-6-2">
                @foreach ($listQuest as $key => $value)
                <div class="testing__question-wrapper">
                    <div class="testing__question">
                        <a name="{{$key+1}}"></a>
                        <h3 class="testing__question-num-header">Câu hỏi: {{$key+1}} </h3>
                        <div class="testing__question-properties">
                            <div class="testing__question-mark">Đạt điểm {{$value['score']}}</div>
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
                                        @if ($key2 == $value['choose'])
                                            @if ($key2 == $value['answer']['ans'])
                                            <div class="testing__question-answer-choosen">
                                                <input type="radio" value="{{$key2}}" checked name="{{$value['question_id']}}" id="{{$value['question_id'].$key2}}" class="testing__question-answer-input">
                                                <label style="color:green" for="{{$value['question_id'].$key2}}"class="testing__question-answer-label">{{$ans}}</label>
                                            </div>
                                            @else
                                            <div class="testing__question-answer-choosen">
                                                <input type="radio" value="{{$key2}}" checked name="{{$value['question_id']}}" id="{{$value['question_id'].$key2}}" class="testing__question-answer-input">
                                                <label style="color:red" for="{{$value['question_id'].$key2}}"class="testing__question-answer-label">{{$ans}}</label>
                                            </div>
                                            @endif
                                        @else
                                        <div class="testing__question-answer-choosen">
                                            <input type="radio" value="{{$key2}}" name="{{$value['question_id']}}" id="{{$value['question_id'].$key2}}" class="testing__question-answer-input">
                                            <label for="{{$value['question_id'].$key2}}"class="testing__question-answer-label">{{$ans}}</label>
                                        </div>
                                        @endif
                                    @endif
                                @endforeach
	                    </div>
                </div>
                @endforeach
                <h2 >Tổng điểm là: {{$score}}</h2>
            </div>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".testing__question-mark").each(function (i) {
        if($(this).text().search("0,5") == -1) $(this).attr('style', 'background-color:red');
    });
</script>
@endsection