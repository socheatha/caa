@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach ($project_category->projects as $project)
                    <div class="block-project">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="img" style="background: url('/images/projects/{{ $project->id }}/thumb_{{ $project->thumbnail }}') center center; background-size: cover;"></div>
                            </div>
                            <div class="col-sm-7">
                                <h5><a href="{{ route('project.detail', $project->id) }}">{{ $project->$name }}</a></h5>
                                <div class="time">{{ $project->created_at->format('Y-m-d') }}</div>
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
