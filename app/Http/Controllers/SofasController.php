<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Sofa;
use App\Http\Requests\SofaFormRequest;

class SofasController extends Controller{
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

    // POST ，this is real creating things
    public function store(SofaFormRequest $request){

        $data = $request->validated();

        $sofa=new Sofa();
        $sofa->name = $data['sofa-name'];
        $sofa->brand = $data['brand'];
        $sofa->year_made = $data['year'];

        $sofa->save();
        return redirect()->route('sofas.index');
    }

    //GET, showing the detailed info

    //public function show(string $id){

    public function show(Sofa $sofa){
        return view('sofas.show',[
            //'sofa' => Sofa::findOrFail($id)
            'sofa' => $sofa
        ]);
    }

    //GET, it is about showing the ui about edit things
    public function edit(Sofa $sofa)
    {
        return view('sofas.edit',[
            'sofa' => $sofa
        ]);
    }

    //POST-PUT, this is real posting things
    public function update(SofaFormRequest $request, Sofa $sofa)
    {
        $request->validate([
            'sofa-name'=> 'required',
            'brand'=> 'required',
            'year'=> ['required', 'integer']
        ]);

        //$record=Sofa::findOrFail($id);

        $sofa->name = strip_tags($request->input('sofa-name'));
        $sofa->brand =  strip_tags($request->input('brand'));
        $sofa->year_made =  strip_tags($request->input('year'));

        $sofa->save();
        return redirect()->route('sofas.show', $sofa->id );
    }

    public function destroy(string $id)
    {
        //
    }
}
