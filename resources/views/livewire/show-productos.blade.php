<div class="container">


    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll" style="background-color:#f4f4f3; ">
        <!-- Main content header -->
        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row" >


          <div class="space-y-6 md:space-x-2 md:space-y-0">


          </div>
        </div>


        <!-- Start Content -->
        <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">

        </div>


        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->


        <!-- Button -->

        <div class="flex flex-col mt-6">


          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                  <thead class="bg-gray-50" >
                    <tr>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                      >
                        Código
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                      >
                        Nombre
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                      >
                        Categoría
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                      >
                        Proveedor
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                      >
                        Precio
                      </th>
                      <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                    >
                      Stock
                    </th>
                    <th
                    scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider  text-gray-500 uppercase"
                  >
                    Acciones
                  </th>

                    </tr>
                  </thead>
                    <tbody class="bg-white  text-center">
                        @foreach ($productos as $producto)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$producto->pro_codigo}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" >
                                {{$producto->pro_nombre}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" >
                                {{$producto->cat_nombre}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" >
                                {{$producto->prv_nombre}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" >
                                {{$producto->pro_precio}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" >
                                {{$producto->pro_stock}}
                            </td>

                            <td>

                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#show">
                                    <i class="fas fa-list-alt"></i>
                                </button>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </td>





                      </tr>
                      @endforeach
                    </tbody>
                  </table>


        </div>


     </div>


    {{-- <div class=" w-full py-2 px-6">


    </div> --}}
</div>
