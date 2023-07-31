<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUpdateUser;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    private $repository;

    public function __construct(User $user)
    {
        $this->repository = $user;
//        $this->middleware(['can:Ver Usuários']);
    }

    public function index(): Renderable
    {
        $user = auth()->user();
        return view('admin.pages.mydata.index', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = $this->repository->find($id);

        if (!$user) {
            return redirect()->back();
        }

        return view('admin.pages.mydata.edit', ['user' => $user]);
    }

    public function update(StoreUpdateUser $request, $id)
    {
        $user = $this->repository->find($id);

        if (!$user) {
            return redirect()->back();
        }

        $data = $request->only(['name', 'email']);

        if($request->password) {
            $data['password'] = password_hash($request->password, PASSWORD_DEFAULT) ;
        }

        $user->update($data);
        flash('Usuário atualizado com sucesso.')->success();
        return redirect()->route('perfil');
    }
}
