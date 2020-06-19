@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach ($project_category->projects as $project)
                    <div class="block-category">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img" style="background: url('/images/projects/thumb_{{ $project->thumbnail }}') center center; background-size: cover;"></div>
                            </div>
                            <div class="col-md-7">
                                <h4 title="{{ $project->$name }}"><a href="{{ route('projects.detail', $project->id) }}">{{ $project->$name }}</a></h4>
                                <small class="time"><i class="far fa-clock"></i> {{ $project->created_at->format('Y-m-d') }}</small>
                                <p>{{ $project->$short_desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right')
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    
    $('.time').each(function () {
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
        var publish_time = moment($(this).html()).locale(lang_js).fromNow();

        $(this).html(publish_time);
    });
</script>
@endsection
