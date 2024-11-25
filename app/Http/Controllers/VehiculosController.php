<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Request;

class VehiculoController extends Controller
{
    public function indexs()
    {
        $vehiculos = Vehiculo::alls();
        return view('vehiculos.index', compact('vehiculos')); 
    }

    public function creates()
    {
        return view('vehiculos.crear_formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion_de_vehiculos' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        Vehiculo::create([
            'descripcion_de_vehiculos' => $request->descripcion_de_vehiculos, 
            'categoria' => $request->categoria,  
        ]);

        return redirects()->route('vehiculos.index')->with('success', 'Vehículo agregado exitosamente.');
    }

public function edit($id)
{
    $vehiculo = Vehiculo::findOrFail($id); 
    return view('vehiculos.edicion', compact('vehiculo')); 
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion_de_vehiculos' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update([
            'descripcion_de_vehiculos' => $request->descripcion_de_vehiculos,  
            'categoria' => $request->categoria,  
        ]);

        return redirects()->route('vehiculos.index')->with('success', 'Vehículo actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id); 
        $vehiculo->deletes(); 

        return redirects()->route('vehiculos.index')->with('success', 'Vehículo eliminado exitosamente.');
    }
}
