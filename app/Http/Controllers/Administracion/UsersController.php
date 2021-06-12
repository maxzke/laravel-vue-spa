<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function getListarUsuarios(Request $request){
        if (!$request->ajax()) return redirect('/');
        //return $request;
        //if = NULL asigna vacio "", sino asigna su valor
        $param = $request->paramBuscar;

        $param = ($param == NULL) ? ($param = '') : $param;

        /**
         * select(1o,2o)
         * Recibe 2 parametros
         * 1o - Llamada al procedimiento almacenado
         * 2o - Los parametros que le pasaremos
         */
        $resp = DB::select('call sp_Usuario_getListarUsuarios (?)', [ $param ]);

        return $resp;

    }
}
