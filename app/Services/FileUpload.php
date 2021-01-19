<?php
namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class FileUpload
{
    public $path;

    public function path($var)
    {
        $this->path = $var;
        return $this;
    }
    public function upload($files, $requestId)
    {
        foreach ($files as $file)
        {
            $fileName = str_replace('public/', '', Storage::put($this->path, $file));
            $ar[] = [
                'filename' => $fileName,
                'request_id' => $requestId,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        return $ar;
    }
}
