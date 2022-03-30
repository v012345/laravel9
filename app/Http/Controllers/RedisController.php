<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //
    public function set(Request $request)
    {
        Redis::set("abc", 123);
    }
    public function get(Request $request)
    {
        return typeOf(Redis::get("abc"));
    }
}
