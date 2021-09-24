<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view("livres", ["livres" => Livre::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view("form_add_livre");
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        Livre::create([
            'title'  => $request->title,
            'body'   => $request->body,
        ]);

        return redirect('livre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(int $id)
    {
        return view('livre', ['livres'=>Livre::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $livre = Livre::find($id);
        return view('form_edit_livre', ['livres'=>$livre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $livre = Livre::find($id);

        $livre->title = $request->title;
        $livre->body = $request->body;

        $livre->save();
        return view('livre', ['livres'=>Livre::find($id)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Livre $livre)
    {
        $livre -> delete();

        return redirect('livres');

    }
}
