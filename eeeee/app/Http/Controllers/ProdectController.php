<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Http\Requests;
use App\Exhibits;
use App\User;

class ProdectController extends Controller
{
//    public function __construct(){
//        $this->middleware('auth');
//    }
    public function getIndex(){
//        $prodects=Prodect::all();
        return view('shop.index');//,['prodects'=>$prodects]
    }
    public function getAddToCard(Request $request,$id){
        //$prodect=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        Product::create([
            "exhibit_id" => $id,
            "user_id" => auth()->user()->id,
        ]);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->back();

    }
    public function getCart(){
        //if (!Session::has('cart')){
         //   return view('homee.homeeeee');

        //}
        //$oldCart=Session::get('cart');
        //$cart=new Cart($oldCart);
        $myProducts = Product::where('user_id',auth()->user()->id)->get();
        $data = array();
        for($i=0 ; $i<count($myProducts) ; $i++){
            $exhibitsData = Exhibits::find($myProducts[$i]["exhibit_id"]);
            $userData = User::find($exhibitsData["user_id"]);
            $data[$i]["id"] = $myProducts[$i]["id"];
            $data[$i]["buyPrice"] = $myProducts[$i]["price"];
            $data[$i]["user_id"] = $myProducts[$i]["user_id"];
            $data[$i]["exhibit_id"] = $myProducts[$i]["exhibit_id"];
            $data[$i]["isAccept"] = $myProducts[$i]["isAccept"];
            $data[$i]["isBuyerAccept"] = $myProducts[$i]["isBuyerAccept"];
            $data[$i]["place"] = $exhibitsData["place"];
            $data[$i]["price"] = $exhibitsData["price"];
            $data[$i]["description"] = $exhibitsData["description"];
            $data[$i]["file"] = $exhibitsData["file"];
            $data[$i]["type"] = $exhibitsData["type"];
            $data[$i]["userName"] = $userData["name"];
        }
        return view('shop.shopping-cart',compact('data'));
    }
    public function bay(){
        $userExhabits = Exhibits::where('user_id',auth()->user()->id)->get();
        $counter = 0;
        $data = array();
        for($i=0 ; $i<count($userExhabits) ; $i++) {
            $exhabitsBuys = Product::where('exhibit_id',$userExhabits[$i]["id"])->orderBy('price','desc')->get();
            if(!$exhabitsBuys->isEmpty()) {
                $data[$counter]["exhabits_id"] = $userExhabits[$i]["id"];
                $data[$counter]["price"] = $userExhabits[$i]["price"];
                $data[$counter]["place"] = $userExhabits[$i]["place"];
                $data[$counter]["description"] = $userExhabits[$i]["description"];
                $data[$counter]["file"] = $userExhabits[$i]["file"];
                $data[$counter]["type"] = $userExhabits[$i]["type"];
                $data[$counter]["user_id"] = $userExhabits[$i]["user_id"];
                $data[$counter]["count"] = $userExhabits[$i]["count"];
                for ($j = 0; $j < count($exhabitsBuys); $j++) {
                    $buyerData = User::find($exhabitsBuys[$j]["user_id"]);
                    $exhabitsBuys[$j]["userName"] = $buyerData["name"];
                }
                $data[$counter]["buyData"] = $exhabitsBuys;
                $counter++;
            }
        }
        return view('shop.bay',compact('data'));
    }
    public function getCheckout(){
        if (!Session::has('cart')){
            return view('shop.shopping-cart');

        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.checkout',['total'=>$total]);

    }



}
