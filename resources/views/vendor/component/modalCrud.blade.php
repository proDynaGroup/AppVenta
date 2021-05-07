
<!-- Button trigger modal -->

  <!-- Modal
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  -->


    {{-- Ventana para agregar --}}



<div class="container">
  <div class="modal fade" tabindex="-1" id="add">

    <div class="modal-dialog modal-lg modal-dialog-centered">


        <div class="modal-content">

            <div class="modal-header">
                    @yield('header-add')
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @yield('body-add')
            </div>

            <div class="modal-footer">
                @yield('footer-add')
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
                    @yield('header-edit')
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    @yield('body-edit')
                </div>

                <div class="modal-footer">
                    @yield('footer-edit')

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
                    @yield('header-show')
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    @yield('body-show')

                </div>

                <div class="modal-footer">
                    @yield('footer-show')

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
                    @yield('header-delete')

                        <div>
                            <h5 class="modal-title"> <i class="fas fa-exclamation-triangle"></i> Advertencia</h5>
                        </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    @yield('body-delete')
                </div>

                <div class="modal-footer">
                    @yield('footer-delete')

                </div>

            </div>

        </div>

    </div>

</div>

