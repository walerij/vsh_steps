<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserrolecrudController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('roleadmin.userrole.index', compact('users'));
    }

  public function create()
  {
      dd("Создание");
  }
}
