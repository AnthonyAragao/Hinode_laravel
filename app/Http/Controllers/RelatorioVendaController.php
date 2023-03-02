<?php
namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\RelatorioVenda;
use Illuminate\Http\Request;

class RelatorioVendaController extends Controller{
    public function __construct(RelatorioVenda $relatorio_vendas){
        $this->relatorio_vendas = $relatorio_vendas;
        $this->produtos = Produto::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $relatorio_vendas = $this->relatorio_vendas->all();
        $produtos = $this->produtos;
        return view('relatorioVendas', compact('relatorio_vendas', 'produtos'));
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
        $relatorio_vendas = $this->relatorio_vendas->all();
        $relatorio = $this->relatorio_vendas->create([
            'nome' => $request->nome,
            'valor_pago' => $request->valor_pago,
            'data_compra' => $request->data_compra,
            'descricao' => $request->descricao,
            'produto_id' => $request->produto_id
        ]);
        return redirect('relatorio_vendas_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $form = 'disabled';
        $produtos = $this->produtos;
        $relatorio = $this->relatorio_vendas->find($id);
        return view('showRelatorio', compact('form', 'relatorio', 'produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $relatorio = $this->relatorio_vendas->find($id);
        $produtos = $this->produtos;
        return view('formRelatorio', compact('relatorio', 'produtos'));
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
            'produto_id' => $request->produto_id
        ]);
        return redirect('relatorio_vendas_index')->with('msg', 'Relatorio atualizado com Sucesso!');
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
        return redirect('relatorio_vendas_index')->with('msg','Relatorio deletado com Sucesso!');
    }
}
