<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ThemeResource;
use App\Models\Theme;
use App\Services\Contracts\ProcessServiceInterface;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function getThemeByUser()
    {
        $user = auth()->user();

        $theme = Theme::query()->where('user_id', $user->getAuthIdentifier())->first();

        return response()->json(new ThemeResource($theme), 200);

    }

    public function updateThemeByUser(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = auth()->user();

        try {
            Theme::query()
                ->where('user_id', $user->getAuthIdentifier())
                ->update([$data->where => $data->value]);
            return response()->json(['data' => [], 'message' => 'Atualizado com sucesso.'], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => [], 'message' => $e->getMessage()], 500);
        }

    }
}
