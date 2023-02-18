<?php

namespace App\Http\Controllers;
use App\Models\RelatorioVenda;
use Illuminate\Http\Request;

class RelatorioVendaController extends Controller{

    public function __construct(RelatorioVenda $relatorio_vendas){
        $this->relatorio_vendas = $relatorio_vendas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $relatorio_vendas = $this->relatorio_vendas->all();
        return $relatorio_vendas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return [$form, $relatorio];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $relatorio = $this->relatorio_vendas->find($id);
        return $relatorio;

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
