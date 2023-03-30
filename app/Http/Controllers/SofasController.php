<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Sofa;

class SofasController extends Controller
{
    public static function getData(){
        return [
          ['id'=>1, 'name'=>'nice sofa', 'brand'=>'Nice'],
          ['id'=>2, 'name'=>'sofa haha', 'brand'=>'HAHA'],
          ['id'=>3, 'name'=>'foldable sofa', 'brand'=>'GOOD'],
          ['id'=>4, 'name'=>'comfortable sofa', 'brand'=>'Comfort'],
        ];
    }
    public function index()
    {
        //GET
        return view('sofas.index',[
             'sofas'=> Sofa::all(),
             'userInput'=>"<script>alert('haha')</script>"
            ]
        );
    }

    //GET, it is about showing the ui about creating things
    public function create(){
        return view('sofas.create');

    }

    // POS T ，this is real creating things
    public function store(Request $request){
        $request->validate([
            'sofa-name'=> 'required',
            'brand'=> 'required',
            //'year'=> 'required | integer'
            'year'=> ['required', 'integer']
        ]);

        $sofa=new Sofa();
        $sofa->name = strip_tags($request->input('sofa-name'));
        $sofa->brand =  strip_tags($request->input('brand'));
        $sofa->year_made =  strip_tags($request->input('year'));

        $sofa->save();
        return redirect()->route('sofas.index');
    }

    //GET, showing the detailed info
    public function show(string $id){
        $sofas=self::getData();
        $index=array_search($id, array_column($sofas,'id'));
        if($index===false){
           abort('404');
        } 
        return view('sofas.show',[
            'sofa' => $sofas[$index]
        ]);
    }

    public function edit(string $id)
    {
        //GET, it is about showing the ui about edit things
    }

    public function update(Request $request, string $id)
    {
        //POST, this is real posting things
    }

    public function destroy(string $id)
    {
        //
    }
}
