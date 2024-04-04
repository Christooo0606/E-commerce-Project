<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->email_verified_at) {
                $product_check = Product::find($product_id);
                if ($product_check) {
                    if (Cart::where('prod_id', $product_id)->where('user_id', $user->id)->exists()) {
                        return response()->json(['status' => $product_check->name . " Already In Cart"]);
                    } else {
                        $cartItem = new Cart();
                        $cartItem->prod_id = $product_id;
                        $cartItem->user_id = $user->id;
                        $cartItem->prod_qty = $product_qty;
                        $cartItem->save();
                        return response()->json(['status' => $product_check->name . " Added to Cart"]);
                    }
                }
            } else {
                return response()->json(['status' => "Please Verify your Email"]);
            }
        } else {
            return response()->json(['status' => "Please Login First..."]);
        }
    }

    public function viewCart()
    {
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view("frontend.cart", compact('cartItem'));
    }

    public function deleteProduct(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->email_verified_at) {
                $prod_id = $request->input('prod_id');
                if (Cart::where('prod_id', $prod_id)->where('user_id', $user->id)->exists()) {
                    $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', $user->id)->first();
                    $cartItem->delete();
                    return response()->json(['status' => "Product Deleted successfully"]);
                }
            } else {
                return response()->json(['status' => "Please Verify Your Email"]);
            }
        } else {
            return response()->json(['status' => "Please Login First..."]);
        }
    }

    public function updateCart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->email_verified_at) {
                if (Cart::where('prod_id', $prod_id)->where('user_id', $user->id)->exists()) {
                    $cart = Cart::where('prod_id', $prod_id)->where('user_id', $user->id)->first();
                    $cart->prod_qty = $product_qty;
                    $cart->save();
                    return response()->json(['status' => "Quantity Updated"]);
                }
            } else {
                return response()->json(['status' => "Please Verify Your Email"]);
            }
        } else {
            return response()->json(['status' => "Please Login First..."]);
        }
    }
}
