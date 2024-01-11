<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Services\Cart\CartService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{


    protected $cartService;

    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $result = $this->cartService->addCart($request);
        // dd(Session::get('carts'));
        if($request === false){

            return redirect()->back()->with('error','Thêm giỏ hàng thất bại');
        }
        else{
            return redirect('/cart');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $products = $this->cartService->getProduct();
        return view('pages/cart',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
