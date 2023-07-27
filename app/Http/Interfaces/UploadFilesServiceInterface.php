<?php

namespace App\Http\Interfaces;

use Illuminate\Http\Request;

interface UploadFilesServiceInterface
{
    public function uploadFilesMultiple(Request $request, string $directory, ?string $column = null): array;

    public function uploadFileOne(Request $request, string $directory, ?string $column = null): bool|string;
}
