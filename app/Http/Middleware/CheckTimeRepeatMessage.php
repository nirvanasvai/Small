<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\Facades\DB;

class CheckTimeRepeatMessage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lastMessage = DB::table('requests')->where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->first();
        if(!empty($lastMessage->created_at))
        {
            $result = time() - strtotime($lastMessage->created_at);
            if($result < 86400) return redirect()->route('request.index')->with('warning', 'Сообщение можно отправлять только 1 раз в день');
        }
        return $next($request);
    }
}
