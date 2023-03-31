<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Sofa;
use App\Http\Requests\SofaFormRequest;

class SofasController extends Controller{
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
        Sofa::create($data);
        return redirect()->route('sofas.index');
    }


    public function show(Sofa $sofa){
        return view('sofas.show',[
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
    public function update(SofaFormRequest $request, Sofa $sofa){
        $data = $request->validated();
        $sofa->update($data);
        return redirect()->route('sofas.show', $sofa->id );
    }

    public function destroy(string $id)
    {
        //
    }
}
