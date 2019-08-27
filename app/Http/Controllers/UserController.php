<?php

namespace App\Http\Controllers;

use App\User as user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all()
            ->where("activo","1");
        return $users->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user;
        $user->username = $request->input('user');
        $user->password = $request->input('pass');
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->cargo = $request->input('cargo');
        $user->activo = $request->input('activo');

        $user->save();

        return $user->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user2)
    {
        $user = user::find($user2);

        return $user->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$user2)
    {
        $user = user::find($user2);
        if($request->input('user')){
            $user->username = $request->input('user');
        }
        if($request->input('pass')){
            $user->password = $request->input('pass');
        }
        if($request->input('nombre')){
            $user->nombre = $request->input('nombre');
        }
        if($request->input('apellido')){
            $user->apellido = $request->input('apellido');
        }  
        if($request->input('email')){
            $user->email = $request->input('email');
        }
        if($request->input('cargo')){
            $user->cargo = $request->input('cargo');
        }
        if($request->input('activo')){
            $user->activo = $request->input('activo');
        }
        

        $user->save();

        return $user->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($userI)
    {
        $user = user::find($userI);
        $user->activo = 0;
        $user->save();
        return 0;
    }


    public function iniciaSesion($usuario, $password){
        $user = user::all()
                    ->where('username',$usuario)
                    ->where('password',$password)
                    ->first();
        if($user == NULL){
            return 0;
        }
        if($user->activo <= 0)
            return -2;
        
        return $user->toJson(JSON_PRETTY_PRINT);
    }


}
