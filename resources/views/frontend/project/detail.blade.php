@extends('layouts.app')

@section('content')
    <div class="container detail-container">
        <div class="row">
            <div class="col-sm-8">
                <h3 title="{!! $project->$name !!}" class="my-3">{!! $project->$name !!}</h3>
                <ul class="list-inline">
                    <li class="list-inline-item" style="color: #777;"><i class="far fa-clock"></i> <span class="publish_time">{!! $project->created_at->format('Y-m-d') !!}</span></li>
                    {{-- <li class="list-inline-item"> | </li>
                    <li class="list-inline-item"></li> --}}
                </ul>
                <hr style="margin-top: -8px;"/>
                <img src="/images/projects/{!! $project->thumbnail !!}" alt="">
                <br/>
                <br/>
                {!! $project->$detail !!}
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right')
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    
    $('.publish_time').each(function () {
        var lang_js = 'en';
        if ('{{ $web_lang }}'== 'kh') {
            lang_js = 'km';
        }else if ('{{ $web_lang }}'== 'my') {
            lang_js = 'ml';
        }else if ('{{ $web_lang }}'== 'sa') {
            lang_js = 'ar';
        }else{
            lang_js = 'en';
        }
        var publish_time = moment($(this).html()).locale(lang_js).format('dddd, DD MMMM YYYY HH:mm');

        $(this).html(publish_time);
    });
</script>
@endsection
