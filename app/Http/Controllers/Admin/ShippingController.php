<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipping;
use App\Models\Store;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $services = auth()->user()->store->shipping()->paginate(10);

//        $services->map(function ($service) {
//
//        });

        return view('admin.pages.frete.index', [
            'services' => $services
        ]);
    }

    public function create()
    {
        $stores = auth()->user()->store;

        return view('admin.pages.frete.create', [
            'stores' => [$stores]
        ]);
    }

    public function store(Request $request)
    {
        $store = Store::find($request->store_id);
        $isCreated = $store->shipping()->create($request->all());

        if (!$isCreated) {
            flash('Algo deu errado, tente novamente')->error();
            return redirect()->back();
        }

        flash('Serviço criado com sucesso.')->success();
        return redirect()->route('frete');
    }

    public function edit($codService)
    {
        $service = Shipping::find($codService);
        $stores = auth()->user()->store;

        if (!$service) {
            flash('Serviço não existe')->warning();
            return redirect()->back();
        }

        return view('admin.pages.frete.edit', [
            'service' => $service,
            'stores' => [$stores]
        ]);
    }

    public function update(Request $request, $codService)
    {
        $service = Shipping::find($codService);

        if (!$service) {
            flash('Serviço não existe')->warning();
            return redirect()->back();
        }

        $store = Store::find($request->store_id);
        $data = $request->all();
        $shipping = array_shift($data);
        $isUpdated = $store->shipping()->update($data);

        if (!$isUpdated) {
            flash('Algo deu errado, tente novamente')->error();
            return redirect()->back();
        }

        flash('Serviço atualizado com sucesso.')->success();
        return redirect()->route('frete');
    }

    public function show($codService)
    {

    }
}
