<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'codigo_barras',
        'nombre',
        'descripcion',
        'precio',
        'stock_actual',
        'stock_minimo',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'precio' => 'decimal:2',
            'activo' => 'boolean',
        ];
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function entradas(): HasMany
    {
        return $this->hasMany(Entrada::class);
    }

    public function salidas(): HasMany
    {
        return $this->hasMany(Salida::class);
    }

    public function mermas(): HasMany
    {
        return $this->hasMany(Merma::class);
    }

    public function movimientos(): HasMany
    {
        return $this->hasMany(MovimientoInventario::class);
    }
}