<?php

namespace App\Http\Services;

use App\Http\Interfaces\Services\UploadFilesServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadFilesMultipleService implements UploadFilesServiceInterface
{

    public function uploadFilesMultiple(Request $request, string $directory, ?string $column = null): array
    {
        $uploadedFiles = [];
        $filesCount = count($request->files->get('photos'));
        $files = $request->files->get('photos');

        for ($i = 0; $i < $filesCount; $i++) {
            $fileName = Str::kebab($files[$i]->getClientOriginalName());
            $path = "{$directory}";
            $uploadedFiles[] = [$column => Storage::disk('public')->putFileAs(
                $path,
                $files[$i],
                $fileName
            )];
        }

        return $uploadedFiles;
    }

    public function uploadFileOne(Request $request, string $directory, ?string $column = null): bool|string
    {
        $file = $request->files->get('logo');

        $fileName = Str::kebab($file->getClientOriginalName());
        $path = "{$directory}";
        return Storage::disk('public')->putFileAs(
            $path,
            $file,
            $fileName
        );
    }
}
