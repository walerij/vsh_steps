@extends('layouts.layout')

@section('content')


    <div class="timeline-body">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$step->videostep->link}}" allowfullscreen=""></iframe>
        </div>
    </div>
@endsection
