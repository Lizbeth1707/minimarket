<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Merma extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'user_id',
        'cantidad',
        'fecha_merma',
        'tipo',
        'observacion',
    ];

    protected function casts(): array
    {
        return [
            'fecha_merma' => 'date',
        ];
    }

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}