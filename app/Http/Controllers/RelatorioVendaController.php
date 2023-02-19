<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\RelatorioVenda;
use Illuminate\Http\Request;

class RelatorioVendaController extends Controller{

    public function __construct(RelatorioVenda $relatorio_vendas){
        $this->relatorio_vendas = $relatorio_vendas;
        $this->produtos = Produto::all()->pluck('nome', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $relatorio_vendas = $this->relatorio_vendas->all();
        return view('relatorioVendas', compact('relatorio_vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $produtos = $this->produtos;
        return view('formRelatorio', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $form = 'disabled';

        $relatorio = $this->relatorio_vendas->find($id);
        return view('formRelatorio', compact('form', 'relatorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $relatorio = $this->relatorio_vendas->find($id);
        return view('formRelatorio', compact('relatorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Testar depois
    public function update(Request $request, $id){
        $relatorio = $this->relatorio_vendas->find($id);
        $relatorio->update([
            'nome' => $request->nome,
            'valor_pago' => $request->valor_pago,
            'data_compra' => $request->data_compra,
            'descricao' => $request->descricao,
            'produto_id' => tap($this->produtos->find($relatorio->produto_id))->update([
                'nome' => $request->nome,
                'preco' => $request->preco
            ])->id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $relatorio = $this->relatorio_vendas->find($id);
        $relatorio->delete();
    }
}
