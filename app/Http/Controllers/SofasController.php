<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //GET
        return view('sofas.index',[
             'sofas'=> self::getData(),
             'userInput'=>"<script>alert('haha')</script>"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //GET, it is about showing the ui about creating things

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // POST，this is real creating things
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //GET, showing the detailed info
        $sofas=self::getData();
        $index=array_search($id, array_column($sofas,'id'));
        if($index===false){
           abort('404');
        } 

        return view('sofas.show',[
            'sofa' => $sofas[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //GET, it is about showing the ui about edit things
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //POST, this is real posting things
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
