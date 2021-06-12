<?php

namespace App\Http\Controllers\Arministracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getListarUsuarios(Request $request){
        if (!$request->ajax()) return redirect('/');
        return $request;
    }
}
