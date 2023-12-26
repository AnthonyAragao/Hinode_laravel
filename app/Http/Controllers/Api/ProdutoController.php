<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('index', 'show');
    }

    public function index(){
        return Produto::all();
    }

    public function store(Request $request){
        return response()
            ->json(Produto::create($request->all()), 201 );
    }

    public function show(int $produto){
        $produto = Produto::find($produto);
        if(empty($produto)){
            return response()->json(['message'=> 'Produto not found'], 404);
        }

        return $produto;
    }

    public function update(int $produto, Request $request){
        $produto = Produto::whereId($produto)->first();
        if(empty($produto)){
            return response()->json(['message'=> 'Produto not found'], 404);
        }

        $produto->fill($request->all());
        $produto->save();
        return $produto;
    }

    public function destroy(int $id){
        Produto::destroy($id);
        return response()->noContent();
    }

}
