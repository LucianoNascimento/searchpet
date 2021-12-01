<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Log::error("O usuario foi logado com sucesso");
            return response()->json(['data'=>"usuario logado com sucesso"],200);
        }
        else{
            Log::error("O usuario não conseguiu logar");
            return response()->json(['data'=>'algo não está dando errado'],500);
        }

    }

    public function index()
    {
        $user = User::all();
        return response(UserResource::collection($user),'200');
    }
    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        if (empty($request->nome)) {
            return response()->json(['nome' => 'nome obrigatório'],422);
        }
        if (empty($request->email)) {
            return response()->json(['nome' => 'email obrigatório'],422);
        }

        try {
            $user = new User;
            $user->name = $request->nome;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            Log::channel('usuarios')->info("Usuario $user->name, foi salvo no sistema");
            return response()->json(['success'=>'Salvo com Sucesso'],'201');
        }catch (Throwable $e){
            Log::channel('usuarios')->error("Usuario $user->name, não conseguiu salvar no sistema");
            return response()->json(['error'=>'Deu erro em alguma coisa'],'500');
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
