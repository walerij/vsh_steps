@extends('layouts.layout')

@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Полное имя</th>
                <th>Email</th>
                <th>Роли</th>

            </tr>
        </thead>
        <tbody>
           @foreach($users as $user)
               <tr>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td><a href="#" class="btn btn-success" title="Редактировать роли">{{$user->roles->count()}}</a></td>
               </tr>
           @endforeach
        </tbody>
    </table>

@endsection
