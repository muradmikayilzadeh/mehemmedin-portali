<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Xeber;

use App\User;

use App\Role;

use App\Category;



class NewsController extends Controller
{
    public function home(){
        $cat=Category::all();

        // $xeber = Xeber::find($id);

        // $xeber_count = $xeber->count += 1;

        // $xeber->update([

        //     "count"=>$xeber_count

        // ]);

    	return view("news.home",compact('cat','xeber_order'));

    }

    public function single($id){
        $cat = Category::all();
        $xeber = Xeber::find($id);

        $xeber_count = $xeber->count += 1;

        $xeber->update([

            "count"=>$xeber_count

        ]);

    	return view("news.single",compact('xeber', 'xeber_count','cat'));

    }


    public function category($id){

        $cat = Category::find($id);
        $xeber = Xeber::find($id);

    	return view("news.category", compact('cat','xeber_count','xeber'));


    }

    public function index(){

        $roles = Role::all();

        $users = User::all();

        $news = Xeber::all();

        return view("news.relations",compact('roles','users','news'));
    }
    public function data(){

      $news = Category::all();

      return view('layout.layout',compact('news'));

    }

}
