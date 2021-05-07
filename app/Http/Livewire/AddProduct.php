<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddProduct extends Component
{

    public $open = false;

    public function addProduct(){


        Producto::create([

            'pro_codigo'=>'123',
            'emp_id'=>1,
            'prv_id'=>1,
            'cat_id'=>1,
            'pro_nombre'=>'hola',
            'pro_stock'=>4,
            'pro_des'=>'dwed',
            'pro_precio'=>99,
            'pro_obser'=>'ferf',
            'pro_fecha'=>'2021-05-12',
            'pro_ganancia'=>99
        ]);

        $this->reset([]);
        $this->emit('render');



    }

    public function render()
    {
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();

        return view('livewire.add-product',compact('categorias','proveedores'));
    }
}
