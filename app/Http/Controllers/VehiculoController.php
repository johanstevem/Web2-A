<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // Mostrar la lista de vehículos
    public function index()
    {
        $vehiculos = Vehiculo::all(); // Obtener todos los registros de la tabla vehiculos
        return view('vehiculos.index', compact('vehiculos')); // Retorna la vista index
    }

    // Mostrar el formulario para crear un nuevo vehículo
    public function create()
    {
        return view('vehiculos.crear_formulario');
    }

    // Guardar un nuevo vehículo en la base de datos
    public function store(Request $request)
    {
        // Validar los datos enviados
        $request->validate([
            'descripcion_de_vehiculos' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        // Crear un nuevo vehículo en la base de datos
        Vehiculo::create([
            'descripcion_de_vehiculos' => $request->descripcion_de_vehiculos, 
            'categoria' => $request->categoria,  
        ]);

        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo agregado exitosamente.');
    }

    // Mostrar el formulario para editar un vehículo
    // Mostrar el formulario para editar un vehículo
public function edit($id)
{
    $vehiculo = Vehiculo::findOrFail($id); // Buscar el vehículo por ID
    return view('vehiculos.edicion', compact('vehiculo')); 
}


    // Actualizar los datos de un vehículo
    public function update(Request $request, $id)
    {
        // Validar los datos enviados
        $request->validate([
            'descripcion_de_vehiculos' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        // Buscar el vehículo y actualizar sus datos
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update([
            'descripcion_de_vehiculos' => $request->descripcion_de_vehiculos,  
            'categoria' => $request->categoria,  
        ]);

        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado exitosamente.');
    }

    // Eliminar un vehículo
    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id); // Buscar el vehículo por ID
        $vehiculo->delete(); // Eliminar el registro de la base de datos

        // Redirigir a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado exitosamente.');
    }
}
