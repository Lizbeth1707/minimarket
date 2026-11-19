<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'proveedor_id',
        'user_id',
        'cantidad',
        'fecha_entrada',
        'fecha_vencimiento',
        'observacion',
    ];

    protected function casts(): array
    {
        return [
            'fecha_entrada' => 'date',
            'fecha_vencimiento' => 'date',
        ];
    }

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}