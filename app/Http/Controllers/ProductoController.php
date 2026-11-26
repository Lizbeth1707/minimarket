<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::with('categoria')
            ->when($request->buscar, function ($query, $buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('nombre', 'like', "%{$buscar}%")
                        ->orWhere('codigo_barras', 'like', "%{$buscar}%");
                });
            })
            ->when($request->categoria_id, function ($query, $categoriaId) {
                $query->where('categoria_id', $categoriaId);
            })
            ->when($request->estado !== null && $request->estado !== '', function ($query) use ($request) {
                $query->where('activo', $request->estado);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $categorias = Categoria::all();

        return view('productos.index', compact('productos', 'categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('productos.create', compact('categorias'));
    }

    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto registrado correctamente.');
    }

    public function show(Producto $producto)
    {
        $producto->load([
            'categoria',
            'movimientos',
        ]);

        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();

        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->validated());

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        if (
            $producto->entradas()->exists() ||
            $producto->salidas()->exists() ||
            $producto->mermas()->exists() ||
            $producto->movimientos()->exists()
        ) {
            return redirect()
                ->route('productos.index')
                ->with('error', 'No se puede eliminar el producto porque tiene movimientos registrados.');
        }

        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto eliminado correctamente.');
    }

    public function cambiarEstado(Producto $producto)
    {
        $producto->update([
            'activo' => !$producto->activo,
        ]);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Estado del producto actualizado correctamente.');
    }
}