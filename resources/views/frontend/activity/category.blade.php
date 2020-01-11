@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach ($activity_category->activities as $activity)
                    <div class="block-category">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="img" style="background: url('/images/activities/{{ $activity->id }}/thumb_{{ $activity->thumbnail }}') center center; background-size: cover;"></div>
                            </div>
                            <div class="col-sm-7">
                                <h4><a href="{{ route('activity.detail', $activity->id) }}">{{ $activity->$name }}</a></h4>
                                <small class="time"><i class="far fa-clock"></i> {{ $activity->created_at->diffForHumans() }}</small>
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
