<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $computer =Category::all();
        return view('category.index', compact('computer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'phone' => 'required|numeric',
            'login'=> 'required',
            'passe' => 'required'

        ]);
        //     $manager = Manager::findOrFail($id);


        $manager = new Category();

        $manager->name = $request->name;

        $manager->save();

        return redirect()->route('category.show', $manager);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $manager = Category::findOrFail($id);

        return view('category.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $manager = Category::findOrFail($id);

        return view('category.edit', compact('manager'));
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
        //
        $this->validate($request, [
            'name' => 'required',

        ]);

        $manager = Category::findOrFail($id);

        $manager->fill($request->all());
        $manager->save();

        return redirect()->route('category.show', $manager->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $manager = Category::findOrFail($id);
        $manager->delete();

        return redirect()->route('category.index');
    }
}
