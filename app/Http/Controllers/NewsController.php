<?php

namespace App\Http\Controllers;

use App;
use DB;
use Illuminate\Http\Request;


class NewsController extends Controller
{
public function index()
    {
        $posts = App\News::all()->reverse()->take(4);
        $DB_char = DB::connection('char')->table('characters');
        $DB_uptime = DB::connection('auth')->table('uptime');
        $DB_realm = DB::connection('auth')->table('realmlist');
        $char = $DB_char->get()->count();
        $online = $DB_char->where('online', '1')->get()->count();
        $max = $DB_uptime->max('maxplayers');
        $realm = $DB_realm->where('id', '1')->first();
        if (@fsockopen('91.201.42.124', env('DB_LOGON_PORT'), $errno, $errstr, 5)) {
            $server = 'checkCircleGreen';
        }else{
            $server = 'closeCircleRed';
        }
        $index1 = DB::connection('mysql')->table('index')->where('position', '1')->first();

        $index2 = DB::connection('mysql')->table('index')->where('position', '2')->first();

        $index3 = DB::connection('mysql')->table('index')->where('position', '3')->first();

        $index4 = DB::connection('mysql')->table('index')->where('position', '4')->first();

        $index5 = DB::connection('mysql')->table('index')->where('position', '5')->first();

        $index6 = DB::connection('mysql')->table('index')->where('position', '6')->first();

        $index7 = DB::connection('mysql')->table('index')->where('position', '7')->first();

        $index8 = DB::connection('mysql')->table('index')->where('position', '8')->first();

        $index9 = DB::connection('mysql')->table('index')->where('position', '9')->first();

        $index10 = DB::connection('mysql')->table('index')->where('position', '10')->first();

        $index11 = DB::connection('mysql')->table('index')->where('position', '11')->first();

    return view('common.content', compact('posts', 'char', 'max', 'online', 'realm', 'server', 'index1', 'index2', 'index3', 'index4', 'index5', 'index6', 'index7', 'index8', 'index9', 'index10', 'index11'));
    }

public function all()
    {
        $firstNews = App\News::select()->orderBy('id', 'desc')->first();
        $nextNews = App\News::where('id', '<', $firstNews->id)->orderBy('id', 'desc')->first();
        $lastNews = App\News::where('id', '<', $nextNews->id)->orderBy('id', 'desc')->first();
        $posts = App\News::select()->where([['id', '!=', $firstNews->id],['id', '!=', $nextNews->id],['id', '!=', $lastNews->id ]])->orderBy('id', 'desc')->paginate(3);
    return view('common.news', compact('posts', 'firstNews', 'nextNews','lastNews'));
    }

public function show($id)
    {
        $post = App\News::findOrFail($id);
        $post->views = $post->views+1;
        $post->save(); 
    return view('common.post', compact('post'));
    }  
}
