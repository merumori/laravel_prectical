<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myblog;

use function PHPUnit\Framework\returnSelf;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myblogs = Myblog::get();
        return view('users/index', compact('myblogs'));
    
    }
    public function about(){
        return view('user/about');
    }
    public function contact(){
        return view('user/contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new myblog();
        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->disease=$request->disease;
        $data->medicines=$request->medicines;
        $data->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=myblog::find($id);
        return view('user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=myblog::find($id);
        return view('user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = myblog::find($id);
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->disease = $request->disease;
        $data->medicines = $request->medicines;
        $data->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Myblog::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}
