<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RelatorioVenda extends Model{
    protected $table = 'relatorio_vendas';
    protected $fillable = ['nome', 'valor_pago', 'data_compra', 'descricao', 'produto_id'];

    protected $hidden = [
        'produtoRelationship',
        'created_at',
        'updated_at'
    ];


    protected $appends = [
        'produto'
    ];


    public function getProdutoAttribute(){
        return $this->produtoRelationship();
    }

    public function setProdutoAttribute($value){
        if(isset($value)){
            $this->attributes['produto_id'] = Produto::where('id', $value)->first()->id;
        }
    }

    public function produtoRelationship(){
        return $this->belongsTo(Produto::class,'produto_id');
    }
}
