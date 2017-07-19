<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function list()
    {
      $users = User::all();
      
      return response()->json([
        'data'=>$users
      ]);
    }
}
