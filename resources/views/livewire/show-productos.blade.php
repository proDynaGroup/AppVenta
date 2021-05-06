<div>


     <div class="w-full mt-6 px-6 py-3 bg-white shadow-sm overflow-hidden sm:rounded-lg" >

        <div class="table-responsive">

            <div class="table table-striped table-bordered table-hover">

                <table >
                    <thead class="bg-gray-800 text-white text-center">
                      <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Fecha de creación</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white  text-center">
                        @foreach ($productos as $producto)
                      <tr>

                            <td >
                                {{$producto->pro_codigo}}
                            </td>
                            <td >
                                {{$producto->pro_nombre}}
                            </td>
                            <td >
                                {{$producto->cat_nombre}}
                            </td>
                            <td >
                                {{$producto->pro_des}}
                            </td>
                            <td >
                                {{$producto->pro_precio}}
                            </td>
                            <td >
                                {{$producto->pro_stock}}
                            </td>
                            <td >
                                {{$producto->pro_fecha}}
                            </td>


                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>

        </div>


     </div>


    {{-- <div class=" w-full py-2 px-6">


    </div> --}}
</div>
