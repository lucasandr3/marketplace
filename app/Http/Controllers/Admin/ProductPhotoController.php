<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductPhotos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    public function removePhoto($photoId)
    {
        $photo = ProductPhotos::find($photoId);

        if ($photo === null) {
            flash('Algo deu errado, verifique os dados informados')->error();
            return redirect()->back();
        }

        if (Storage::disk('public')->exists($photo->image)) {
            Storage::disk('public')->delete($photo->image);
        }

        $photo->delete();
        flash('Foto removida com sucesso.');
        return redirect()->back();
    }
}
