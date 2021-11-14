<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Request $request){

        $this->request = $request;
//        $this->middleware('auth');
        //$this->middleware('auth')->only('create');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valor = 123;
        $valor2 = 1234;
        $produtos = ['Geladeira', 'Smartphone', 'TV', 'Eletrônicos'];

        return view('admin.pages.products.index', compact('valor', 'valor2', 'produtos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required',
            'photo' => 'image'
        ]);

        dd('OK');


       // dd($request->all());
       // dd($request->only('email'));
        //dd($request->has('name'));
       // dd($request->except('_token'));
        if ($request->file('photo')->isValid()){
//            dd($request->file('photo')->store('products'));
            dd($request->file('photo')->storeAs('products'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhes do produto: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
        dd("atualizando produto: $id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
