<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'request_id'];

    public function createAnswer($request)
    {
        self::query()->create([
            'message' => $request->input('message'),
            'request_id' => $request->input('request_id')
        ]);
    }
}
