<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nat;

class mmCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $nationality=Nat::all();
        return view('index',compact('nationality'));   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mmView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nationalityDesc'=>'required']);

        $nationality=new Nat([
        'nationalityDesc'=>$request->get('nationalityDesc'),
        
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')
        ]);

        $nationality->save();
        return redirect('/mmCn')->with('success','Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('mmView');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $national=Nat::find($id);
        return view('mmEdit',compact('national'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['nationalityDesc'=>'required']);

        $national=Nat::find($id);
        $national->nationalityDesc = $request->get('nationalityDesc');
        $national->active = $request->get('active');
        $national->remark = $request->get('remark');

        $national->save();
        return redirect('mmCn')->with('success','Successfully Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $national = Nat::find($id);
        $national->delete();
        return redirect('mmCn')->with('success','Successfully Deleted!');
    }


}
