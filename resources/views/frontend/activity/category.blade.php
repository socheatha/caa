@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach ($activity_category->activities as $activity)
                    <div class="block-activity">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="img" style="background: url('/images/activities/{{ $activity->id }}/thumb_{{ $activity->thumbnail }}') center center; background-size: cover;"></div>
                            </div>
                            <div class="col-sm-7">
                                <h5><a href="{{ route('activity.detail', $activity->id) }}">{{ $activity->$name }}</a></h5>
                                <div class="time">{{ $activity->created_at->format('Y-m-d') }}</div>
                                <p>{{ $activity->$short_desc }}</p>
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
