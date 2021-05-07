@extends('vendor.component.modalCrud')

    <!-- Agregar un producto-->

        @section('header-add')

            <!--Cabecera de agregar producto -->

        @endsection

        @section('body-add')

            <!--Cuerpo de agregar un producto -->

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="precio" placeholder="" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio" placeholder=""  wire:model="ejem">
                </div>

                {{$ejem}}

                <div class="col-md-6">
                    <label class="form-label">Stock</label>
                    <input type="text" class="form-control" name="precio" placeholder="" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Proveedor</label>
                    <select class="form-select" name="tipo">
                        @foreach ($proveedores as $proveedor)
                            <option value="{{$proveedor->prv_id}}">{{$proveedor->prv_nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Categoría</label>
                    <select class="form-select" name="tipo">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->cat_id}}">{{$categoria->cat_nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" name="observaciones" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Observaciones</label>
                    <textarea class="form-control" name="observaciones" rows="3" required></textarea>
                </div>

                 <center>
                    <button type="button" class="btn btn-success " wire:click="addProduct">

                        <i class="fas fa-plus-square"></i> Agregar
                    </button>
                </center>

            </div>

        @endsection

    <!-- Editar un producto-->

        @section('header-edit')

            <!--Cabecera de editar producto -->

        @endsection

        @section('body-edit')

            <!--Cuerpo de editar un producto -->

        @endsection


    <!-- Mostrar lista de items u otro tipo de infromación-->

        @section('header-show')

            <!--Cabecera de mostrar items o info -->

        @endsection

        @section('body-show')

            <!--Cuerpo de mostrar items o info -->

        @endsection


    <!-- Eliminar un producto-->

        @section('header-delete')

            <!--Cabecera de eliminar producto -->

        @endsection

        @section('body-delete')

            <!--Cuerpo de eliminar producto -->

        @endsection


