<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return response(UserResource::collection($user),'200');
    }


    public function store(Request $request)
    {
        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            Log::channel('usuarios')->info("Usuario $user->name, foi salvo no sistema");
            return response()->json(['success'=>'Salvo com Sucesso'],'201');
        }catch (Throwable $e){
            Log::channel('usuarios')->error("Usuario $user->name, não conseguiu salvar no sistema");
            return response()->json(["erro ". $e->getLine()],'500');
        }

    }

    public function show(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
