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
            <div class="row">{{$step->linkstep->info}}</div>
        </div>

        <div class="card-footer">
            <a href="{{$step->linkstep->link}}" type="button" class="btn btn-block btn-outline-primary btn-lg">Перейти</a>
        </div>

    </div>

@endsection
