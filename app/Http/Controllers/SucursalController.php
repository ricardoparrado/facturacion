<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); // Obtiene el término de búsqueda del formulario
    
        if ($search) {
            // Realiza la búsqueda y obtiene las sucursales que coinciden con los criterios
            $sucursales = Sucursal::where('nombre', 'like', "%$search%")
                                  ->orWhere('direccion', 'like', "%$search%")
                                  ->orWhere('telefono', 'like', "%$search%")
                                  ->get();
        } else {
            // Obtén todas las sucursales si no hay término de búsqueda
            $sucursales = Sucursal::all();
        }
    
        return view('sucursales.index', compact('sucursales'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sucursales.create'); // Muestra formulario para crear nueva sucursal
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Procesa creación nueva sucursal, valida datos formulario, guarda nueva sucursal en BD
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string'
        ]);
    
        Sucursal::create([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
        ]);
    
        return redirect()->route('sucursales.index')->with('success', 'Sucursal creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sucursal $sucursal)
    {
        return view('sucursales.show', compact('sucursal')); // Muestra detalles sucursal especifica
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sucursal $sucursal)
    {
        return view('sucursales.edit', compact('sucursal')); // Muestra formulario para editar sucursal existente
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        // Actualiza informacion sucursal existente
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string'
        ]);
    
        $sucursal->update([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
        ]);
    
        return redirect()->route('sucursales.index')->with('success', 'Sucursal actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sucursal $sucursal)
    {
        // Elimina sucursal existente
        $sucursal->delete();
        return redirect()->route('sucursales.index')->with('success', 'Sucursal eliminada exitosamente.');
    }

    
}
