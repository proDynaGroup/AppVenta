<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddProduct extends Component
{

    public $op = false;
    public $nombre,$precio,
            $cat,$prv,$stock,
            $descrip,$observ;
    public $empresa ;

    public function addProduct(){


        Producto::create([

            'pro_codigo'=>'123',
            'emp_id'=>$this->empresa,
            'prv_id'=>$this->prv,
            'cat_id'=>$this->cat,
            'pro_nombre'=>$this->nombre,
            'pro_stock'=>$this->stock,
            'pro_des'=>$this->descrip,
            'pro_precio'=>$this->precio,
            'pro_obser'=>$this->observ,
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
