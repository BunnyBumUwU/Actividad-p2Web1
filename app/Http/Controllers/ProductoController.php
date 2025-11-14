<?php

namespace App\Http\Controllers;

use App\Models\Producto;   // Importamos el modelo Producto

class ProductoController extends Controller
{
    /**
     * Muestra la lista de productos.
     */
    public function index()
    {
        // Obtener todos los productos desde la base de datos
        $productos = Producto::all();

        // Enviar los productos a la vista productos.blade.php
        return view('productos', ['productos' => $productos]);
    }
}
