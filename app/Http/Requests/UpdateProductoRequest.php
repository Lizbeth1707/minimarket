<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $producto = $this->route('producto');

        return [
            'categoria_id' => ['required', 'exists:categorias,id'],
            'codigo_barras' => [
                'required',
                'string',
                'max:50',
                Rule::unique('productos', 'codigo_barras')->ignore($producto->id),
            ],
            'nombre' => ['required', 'string', 'max:120'],
            'descripcion' => ['nullable', 'string'],
            'precio' => ['required', 'numeric', 'gt:0'],
            'stock_actual' => ['required', 'integer', 'min:0'],
            'stock_minimo' => ['required', 'integer', 'gt:0'],
            'activo' => ['required', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'categoria_id.required' => 'Debes seleccionar una categoría.',
            'categoria_id.exists' => 'La categoría seleccionada no existe.',
            'codigo_barras.required' => 'El código de barras es obligatorio.',
            'codigo_barras.unique' => 'Este código de barras ya está registrado.',
            'nombre.required' => 'El nombre del producto es obligatorio.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.gt' => 'El precio debe ser mayor que cero.',
            'stock_actual.required' => 'El stock actual es obligatorio.',
            'stock_minimo.required' => 'El stock mínimo es obligatorio.',
            'stock_minimo.gt' => 'El stock mínimo debe ser mayor que cero.',
        ];
    }
}