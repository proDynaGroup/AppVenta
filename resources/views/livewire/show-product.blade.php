<div class="container">

    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll" style="background-color:#f4f4f3">
        <!-- Main content header -->
        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">

         
          <div class="space-y-6 md:space-x-2 md:space-y-0">
            
          
          </div>
        </div>

        <!-- Start Content -->
        <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4" style="padding-top: 10%;  ">
         
        </div>

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
       <center> <h3 class="mt-6 text-xl" style="color:#2253db">Productos Registrados</h3></center>
        <div class="flex flex-col mt-6 pull-right" >
            
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                      >
                        Nombre
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                      >
                        Categoria
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                      >
                        Cantidad(ud/q)
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                      >
                        Precio
                      </th>
                      <th
                        scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                      >
                        Proveedor
                      </th>
                      <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                    >
                      Funciones
                    </th>
                     
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <template x-for="i in 10" :key="i">
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                           
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900"></div>
                              <div class="text-sm text-gray-500"></div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900"></div>
                          <div class="text-sm text-gray-500"></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full"
                          >
                          
                          </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap"></td>
                        <td>
                        </td>
                        <td>

                        </td>
                      </tr>
                    </template>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      
</div>
