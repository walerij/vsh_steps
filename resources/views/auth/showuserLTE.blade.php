@extends('layouts.layout')
@section('content')
<h3>Личный кабинет</h3>

<p>
    {{$user->name}}
</p>
<p>
    {{$user->email}}
</p>
@endsection
