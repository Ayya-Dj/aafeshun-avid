<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $cart   =   Helper::toArray(
                        DB::table('cart')
                        ->join('products', 'cart.product', '=', 'products.id')
                        ->select('cart.*', 'products.name as name', 'products.price as price', 'products.image as image')
                        ->get()
                    );
        $total  =   0;
        foreach($cart as $item) {
            $total += $item['quantity'] * $item['price'];
        }

        return view('layouts.app', [
            'cart'  => $cart,
            'total' => $total,
        ]);
    }
}
