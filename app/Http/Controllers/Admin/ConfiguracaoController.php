<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Services\QuantitiesRegisterServiceInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    public function index(QuantitiesRegisterServiceInterface $quantities): Renderable
    {
        return view('admin.pages.settings.index', [
            'quantities' => $quantities->quantitiesSettings(),
        ]);
    }
}
