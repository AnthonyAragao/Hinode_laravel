<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Produto extends Model{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'preco'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $appends = ['links'];


    public function links(): Attribute{
        return new Attribute(
            get: fn() => [
                [
                    'produto' => "{$this->nome}",
                    'url' => "/api/produtos/{$this->id}"
                ],
            ],
        );
    }


}
