<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\UploadFilesServiceInterface;
use App\Http\Requests\CreateStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    private UploadFilesServiceInterface $uploadService;

    public function __construct(UploadFilesServiceInterface $uploadService)
    {
        $this->middleware('user.has.store')->only(['create', 'store']);
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $store = auth()->user()->store;
        return view('admin.stores.index', [
            'store' => $store ?? []
        ]);
    }

    public function create()
    {
        return view('admin.stores.create');
    }

    public function store(CreateStoreRequest $request)
    {
        $data = $request->all();
        $user = auth()->user();

        if ($request->hasFile('logo')) {
            $logo = $this->uploadService->uploadFileOne($request, 'stores/logo');
            $data['logo'] = $logo;
        }

        $store = $user->store()->create($data);

        flash('Loja criada com Sucesso.')->success();
        return redirect()->route('stores');
    }

    public function edit($store)
    {
        $store = Store::find($store);
        return view('admin.stores.edit', [
            'store' => $store
        ]);
    }

    public function update(UpdateStoreRequest $request, $store)
    {
        $data = $request->all();
        $store = Store::find($store);

        if ($request->hasFile('logo')) {

            if (Storage::disk('public')->exists($store->logo)) {
                Storage::disk('public')->delete($store->logo);
            }

            $logo = $this->uploadService->uploadFileOne($request, 'stores/logo');
            $data['logo'] = $logo;
        }

        $store->update($data);

        flash('Loja atualizada com Sucesso.')->success();
        return redirect()->back();
    }

    public function destroy($store)
    {
        $store = Store::find($store);
        $store->delete();
        flash('Loja removida com Sucesso.')->success();
        return redirect()->route('stores');
    }
}
