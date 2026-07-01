<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function create()
    {
        return view('proveedores.formulariosProveedores');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => ['required', 'string', 'max:255'],
            'nit_documento' => ['nullable', 'string', 'max:255', 'unique:proveedores,nit_documento'],
            'telefono'      => ['nullable', 'string', 'max:50'],
            'email'         => ['nullable', 'email', 'max:255'],
            'direccion'     => ['nullable', 'string', 'max:255'],
            'contacto'      => ['nullable', 'string', 'max:255'],
            'estado'        => ['required', 'in:activo,inactivo'],
        ]);

        Proveedor::create([
            'nombre'        => $request->nombre,
            'nit_documento' => $request->nit_documento,
            'telefono'      => $request->telefono,
            'email'         => $request->email,
            'direccion'     => $request->direccion,
            'contacto'      => $request->contacto,
            'estado'        => $request->estado,
        ]);

        return redirect()->route('proveedores.create')
            ->with('success', 'Proveedor registrado correctamente.');
    }
}
