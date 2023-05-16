@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$step->title}}</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <strong>{{$step->info}}</strong>
            </div>
            <div class="row">
                <pre>
                    {{$step->textstep->info}}
                </pre>

            </div>
        </div>



    </div>
@endsection
