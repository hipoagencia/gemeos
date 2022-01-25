<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    use HasFactory;

    protected $table = "cars";

    protected $fillable = [
        'id',
        'idStock',
        'tipoveiculo',
        'zerokm',
        'placa',
        'marca',
        'modelo',
        'versao',
        'tipomotor',
        'anofabricacao',
        'anomodelo',
        'cambio',
        'km',
        'portas',
        'cor',
        'combustivel',
        'carroceria',
        'preco',
        'observacao',
        'complementos',
        'opcionais',
        'acessorios',
        'urlVideo',
        'slug',
        'categoryslug',
    ];

    public function img()
    {
        return $this->hasMany(CarImages::class, 'car');
    }

    public function cover()
    {
        return $this->hasOne(CarImages::class, 'car');
    }

    public function getPrecoVendaAttribute($value)
    {
        return number_format($value, 2, ',', '.');

    }

    public function setSlugAttribute($value)
    {
        $slug = $this->attributes['idStock'] . ' ' .$this->attributes['marca'] . ' ' . $this->attributes['modelo'] . ' ' . $this->attributes['versao'];
        $this->attributes['slug'] = Str::slug($slug, '-');
    }

    public function setCategorySlugAttribute($value)
    {
        $this->attributes['categoryslug'] = Str::slug($this->attributes['marca'], '-');
    }
}
