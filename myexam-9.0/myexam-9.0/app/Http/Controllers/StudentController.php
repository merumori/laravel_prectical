<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\myblog;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $students = Myblog::get();
        return view('users.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new myblog();
        $data->name=$request->name;
        $data->city=$request->city;
        $data->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= myblog::find($id);
        return view('users.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=myblog::find($id);
        return view('users.edit',compact('data'));
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
        // Validate the request data
    $request->validate([
        'name' => 'required|string',
        'city' => 'required|string',
    ]);

    // Retrieve the model instance
    $data = Myblog::findOrFail($id);

    // Update model attributes
    $data->name = $request->name;
    $data->city = $request->city;

    // Save changes to the database
    $data->save();

    // Redirect back or to a specific route
    return redirect()->route('index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=myblog::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}
