<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class TipoMoneda extends Model
{
    use HasFactory;    public $table = 'tipo_moneda';

    public $fillable = [
        'nombre',
        'estado',
        'simbolo'
    ];

    protected $casts = [
        'nombre' => 'string',
        'estado' => 'string',
        'simbolo' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:100',
        'estado' => 'required|string|max:10',
        'simbolo' => 'required|string|max:10',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function cuenta(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Cuenta::class, 'moneda_id');
    }
}
