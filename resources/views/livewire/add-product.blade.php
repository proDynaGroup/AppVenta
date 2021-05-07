
<div >



    <input type="hidden" value="{{Auth::user()->emp_id}}" wire:mmodel.defer="empresa">

    {{-- <x-jet-button data-bs-toggle="modal" data-bs-target="#add" >
        Registar Producto
    </x-jet-button> --}}

     <x-jet-button wire:click="$set('op',true)" >
        Registar Producto
    </x-jet-button>



    <x-jet-dialog-modal wire:model="op">

        <x-slot name="title">
            <center>
                <h2>
                    Registrar producto
                </h2>
            </center>
        </x-slot>

        <x-slot name="content">

            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Nombre
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nombre" type="text" placeholder="" wire:model.defer="nombre">

                </div>
                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Precio
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="precio" type="number" placeholder="Doe" wire:model.defer="precio">
                </div>
              </div>


              <div class="-mx-3 md:flex mb-6">


                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                      Categoría
                    </label>
                    <div class="relative">
                        <select class="form-select" name="tipo" wire:model.defer="cat">
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->cat_id}}">{{$categoria->cat_nombre}}</option>
                            @endforeach
                        </select>

                    </div>
                  </div>

                  <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                      Proveedor
                    </label>
                    <div class="relative">
                        <select class="form-select" name="tipo" wire:model.defer="prv">
                            @foreach ($proveedores as $proveedor)
                                <option value="{{$proveedor->prv_id}}">{{$proveedor->prv_nombre}}</option>
                            @endforeach
                        </select>

                    </div>
                  </div>

              </div>

              <div class="-mx-3 md:flex mb-6">

                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Stock
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="number" placeholder="Doe" wire:model.defer="stock">
                </div>
              </div>

              <div class="mb-4 ">

                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Descripción
                </label>
                <textarea class="w-full" name="" id="" cols="6" rows="4" wire:model.defer="descrip">

                </textarea>

              </div>

              <div class="mb-4 ">

                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Observaciones
                </label>
                <textarea class="w-full" name="" id="" cols="6" rows="4" wire:model.defer="observ">

                </textarea>

              </div>

        </x-slot>

        <x-slot name="footer">

            <x-jet-secondary-button wire:click="$set('op',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-button wire:click="addProduct" >
                Registar
            </x-jet-button>

        </x-slot>

    </x-jet-dialog-modal>



<!--
     <div class="container">
        <div class="modal fade" tabindex="-1" id="add">

          <div class="modal-dialog modal-lg modal-dialog-centered">


              <div class="modal-content">

                  <div class="modal-header">

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">


                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="precio" placeholder="" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Precio</label>
                            <input type="text" class="form-control" name="precio" placeholder=""  >
                        </div>



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
                            <button type="button" class="btn btn-success " id="btnHide" wire:click="addProduct">

                                <i class="fas fa-plus-square"></i> Agregar
                            </button>
                        </center>

                    </div>
                  </div>

                  <div class="modal-footer">

                  </div>

              </div>

          </div>

      </div>
      </div>
      {{-- Ventana para editar --}}

      <div class="container">

          <div class="modal fade" tabindex="-1" id="edit">

              <div class="modal-dialog modal-lg">

                  <div class="modal-content">

                      <div class="modal-header">

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">

                      </div>

                      <div class="modal-footer">


                      </div>

                  </div>

              </div>

          </div>

      </div>

      {{-- Ventana para listar --}}

      <div class="container">

          <div class="modal fade" tabindex="-1" id="show">

              <div class="modal-dialog modal-lg">

                  <div class="modal-content">

                      <div class="modal-header">

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">


                      </div>

                      <div class="modal-footer">


                      </div>

                  </div>

              </div>

          </div>

      </div>

      {{-- Ventana para eliminar --}}

      <div class="container">

          <div class="modal fade" tabindex="-1" id="delete">

              <div class="modal-dialog modal-sm modal-dialog-centered">

                  <div class="modal-content">

                      <div class="modal-header">


                              <div>
                                  <h5 class="modal-title"> <i class="fas fa-exclamation-triangle"></i> Advertencia</h5>
                              </div>

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">

                      </div>

                      <div class="modal-footer">


                      </div>

                  </div>

              </div>

          </div>

      </div>

      <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous">
      </script>

      <script >
             $(document).ready(function(){

                $('#btnHide').click(function(){

                     $('#add').modal('hide');
                 });
             });
      </script>




    -->

    <!--  Botones con Boostrap
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
        Registar Producto
    </button>
        -->
        {{-- @section('header-add')

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
    <input type="text" wire:model="ejem">

    {{$ejem}}
</div> --}}
</div>
