<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->user = Auth::user();
        $next = $this->user->level;
    if ($next < 2) {
        return redirect('/');
    }
        $index = DB::connection('mysql')->table('index')->get();
    return view('home', compact('index'));
    }

    public function all()
    {
        $this->user = Auth::user();
        $next = $this->user->level;
    if ($next < 2) {
            return redirect('/');
    }
        $posts = App\News::select()->orderBy('id', 'desc')->paginate(4);
        
    return view('admin.news', compact('posts'));
    }

    public function deleteNews($id)
    {
          App\News::destroy($id);
    return back();
    }

    public function editNews(Request $request, $id)
    {
        $edit = App\News::findOrFail($id);
        if ($request->input('title') != "") {
        $edit->title = $request->input('title');
        $edit->content = $request->input('content');
        $edit->image = $request->input('image');
        $edit->save();
        }
        
    return view('admin.edit', compact('edit'));
    }

    public function editNewsIndex(Request $request, $id)
    {
        $edit = App\Index::findOrFail($id);
        if ($request->input('title') != "") {
        $edit->title = $request->input('title');
        $edit->content = $request->input('content');
        $edit->link1 = $request->input('link1');
        $edit->link2 = $request->input('link2');
        $edit->link3 = $request->input('link3');
        $edit->link1name = $request->input('link1name');
        $edit->link2name = $request->input('link2name');
        $edit->link3name = $request->input('link3name');
        $edit->image = $request->input('image');
        $edit->save();
        }
        
    return view('admin.editIndex', compact('edit'));
    }

    public function addNews(Request $request)
    {
        if ($request->input('title') != ""){
        $edit = new App\News;
        $edit->title = $request->input('title');
        $edit->content = $request->input('content');
        $edit->image = $request->input('image');
        $edit->save();
        return redirect('/home/news');
        }else{
        return view('admin.add');
        }
  
    }
    
}
