@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <br/>
                <img src="/images/projects/{!! $project->id !!}/{!! $project->thumbnail !!}" alt="">
                <br/>
                <br/>
                {{-- {{ session('locale') }} --}}
                {!! $project->$detail !!}
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right')
            </div>
        </div>
    </div>
@endsection
