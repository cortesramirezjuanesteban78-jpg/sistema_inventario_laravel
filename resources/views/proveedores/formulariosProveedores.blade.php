@extends('layouts.sidebaradmin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Registro de Proveedor</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo Proveedor</h3>
                    </div>

                    <form method="POST" action="{{ route('proveedores.store') }}">
                        @csrf

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible mx-3 mt-3">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="card-body">

                            <!-- Nombre -->
                            <div class="form-group">
                                <label for="nombre">Nombre / Razón Social</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                    id="nombre" name="nombre" value="{{ old('nombre') }}"
                                    required placeholder="Ingrese nombre del proveedor">
                                @error('nombre')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- NIT / Documento -->
                            <div class="form-group">
                                <label for="nit_documento">NIT / Documento</label>
                                <input type="text" class="form-control @error('nit_documento') is-invalid @enderror"
                                    id="nit_documento" name="nit_documento" value="{{ old('nit_documento') }}"
                                    placeholder="Ej: 900123456-1">
                                @error('nit_documento')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Teléfono -->
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control @error('telefono') is-invalid @enderror"
                                    id="telefono" name="telefono" value="{{ old('telefono') }}"
                                    placeholder="Ej: 300 123 4567">
                                @error('telefono')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="proveedor@ejemplo.com">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Dirección -->
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                                    id="direccion" name="direccion" value="{{ old('direccion') }}"
                                    placeholder="Ingrese dirección">
                                @error('direccion')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Contacto -->
                            <div class="form-group">
                                <label for="contacto">Persona de Contacto</label>
                                <input type="text" class="form-control"
                                    id="contacto" name="contacto" value="{{ old('contacto') }}"
                                    placeholder="Nombre del contacto">
                            </div>

                            <!-- Estado -->
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="activo" {{ old('estado') == 'activo' ? 'selected' : '' }}>Activo</option>
                                    <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                                </select>
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary mr-2">Cancelar</a>
                            <button type="submit" class="btn btn-success">Registrar Proveedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
