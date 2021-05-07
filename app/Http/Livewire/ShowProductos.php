<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowProductos extends Component
{

    public $listeners=['render'];

    public function render()
    {
        $productos = Producto::where('emp_id',Auth::user()->emp_id)
                     ->join('tbl_categoria','tbl_producto.cat_id','=',
                            'tbl_categoria.cat_id')
                     ->join('tbl_proveedor','tbl_producto.prv_id','=',
                            'tbl_proveedor.prv_id')
                     ->get();

        return view('livewire.show-productos',compact('productos'));
    }
}
