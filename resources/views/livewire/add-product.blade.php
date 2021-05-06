
<div >
   
      
    @extends('vendor.component.modalCrud')
    @section('header-add')
    <h2>
        <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
        <span class="step-text">Registro Producto</span>
    </h2>
    @endsection
    <x-jet-danger-button data-bs-toggle="modal" data-bs-target="#add" >
        Registar Producto
    </x-jet-danger-button>
    <!--  Botones con Boostrap
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
        Registar Producto
    </button>
-->
    
</div>
