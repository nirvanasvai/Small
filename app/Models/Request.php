<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public $fillable = [
        'subject','name','email','message','user_id'
    ];

    public function createStr($request)
    {
        return $this->query()->create([
           'subject' => $request->input('subject'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'user_id' => auth()->user()->id,
        ]);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
