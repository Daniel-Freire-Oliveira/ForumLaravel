<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class Page extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function forum(){
        $events = Event::all();
        return view('forum',['event' => $events]);
    }
    public function createView(){
        return view('createView');
    }
    public function create(Request $req){
        $event = new Event;
        $event->titulo = $req->titulo;
        $event->descricao = $req->descricao;
        $event->link = $req->link;
        $event->subdescricao = $req->subdescricao;

        if($req->hasFile('foto') && $req->file('foto')->isValid()){
            $foto = $req->file('foto');
            $extension = $foto->extension();
            $nomeImg = md5($foto->getClientOriginalName() . strtotime('now')) . $extension;
            $foto->move(public_path('/foto/img/'), $nomeImg);
            $event->foto = $nomeImg;
        }
        $event->save();
        return redirect('/');
    }
    public function info($id){
        $event = Event::findOrFail($id);
        return view('info', ['event' => $event]);
    }
}
