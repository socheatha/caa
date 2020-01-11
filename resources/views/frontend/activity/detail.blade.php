@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <br/>
                <img src="/images/activities/{!! $activity->id !!}/{!! $activity->thumbnail !!}" alt="">
                <br/>
                <br/>
                
                {!! $activity->$detail !!}
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right')
            </div>
        </div>
    </div>
@endsection