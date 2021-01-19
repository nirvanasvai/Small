<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $fillable = [
        'filename','request_id'
    ];

    public function createStr($files)
    {
         $this->query()->insert($files);
    }
}
