<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Exhibits;
use App\User;
use DB;

class AjaxController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function buyItem(Request $request){
        if($request->ajax())
        {
            $newProduct = Product::create([
                "exhibit_id" => $request->itemId,
                "user_id"=> auth()->user()->id,
                "price"=> $request->itemPrice
            ]);
        }
    }
    //***************************************************//
    public function cancelBuyRequest(Request $request){
        if($request->ajax())
        {
            $product = Product::find($request->productId);
            $product->delete();
        }
    }
    //***************************************************//
    public function acceptBuyRequest(Request $request){
        if($request->ajax())
        {
            $product = Product::find($request->productId);
            $product->isAccept = 'Y';
            $product->save();
        }
    }
    //***************************************************//
    public function rejecttBuyRequest(Request $request){
        if($request->ajax())
        {
            $product = Product::find($request->productId);
            $product->isAccept = 'N';
            $product->save();
        }
    }
    //***************************************************//
    public function deleteExhabit(Request $request){
        if($request->ajax())
        {
            $product = product::where('exhibit_id',$request->itemId);
            $product->delete();
            $exhabit = Exhibits::find($request->itemId);
            $exhabit->delete();
        }
    }
    //******************************************************//
    public function acceptBuy(Request $request){
        if($request->ajax())
        {
            $product = Product::find($request->productId);
            $product->isBuyerAccept = 'Y';
            $product->save();

            $exhibit = Exhibits::find($product["exhibit_id"]);
            $newCount = $exhibit["count"]-1;
            $exhibit->count = $newCount;
            $exhibit->save();
        }
    }
    //******************************************************//
    public function deleteProduct(Request $request){
        if($request->ajax())
        {
            $product = Product::find($request->productId);
            $product->delete();
        }
    }

    public function showUserInfoModal(Request $request){
        if($request->ajax())
        {
            $userId = $request->userId;
            $userData = User::find($userId);
            $view = view('shop.userInfoModal',compact('userData'))->render();
            return response()->json(['html'=>$view]);
        }
    }
    //******************************************************//
    public function getSearchResults(Request $request)
    {
        if ($request->ajax()) {
            $data = array();
            $place = $request->place;
            $type = $request->type;
            $date = $request->date;
            $startDate = $request->startDate;
            $endDate = $request->endDate;
            $query = DB::table("Exhibits");
            if ($place)
                $query->where('place', $place);
            if ($type)
                $query->where('type', $type);
            if ($date != '' && $date!='undefined') {
                $query->where('date',$date);
            }
            if ($date != '' && $date!='undefined') {
                $query->where('date',$date);
            }
            if ($startDate != '' && $endDate!='') {//print_r($startDate);exit;
                $query->whereDate('created_at',">=",$startDate);
                $query->whereDate('created_at',"<=",$endDate);
            }
            //$ss = $query->toSql();dd($ss);
            $hw = $query->get();
            for ($i = 0; $i < count($hw); $i++) {
                $productData = Product::where('exhibit_id', $hw[$i]->id)->where('user_id', auth()->user()->id)->get();
                $user = User::find($hw[$i]->user_id);
                $data[$i]["user"] = $user["name"];
                if (!$productData->isEmpty())
                    $data[$i]["exist"] = 'Y';
                else
                    $data[$i]["exist"] = 'N';
                $data[$i]["price"] = $hw[$i]->price;
                $data[$i]["description"] = $hw[$i]->description;
                $data[$i]["id"] = $hw[$i]->id;
                $data[$i]["place"] = $hw[$i]->place;
                $data[$i]["count"] = $hw[$i]->count;
                $data[$i]["date"] = $hw[$i]->date;
                $data[$i]["file"] = $hw[$i]->file;
                $data[$i]["user_id"] = $hw[$i]->user_id;
                //** get item buyer  */***************//
                $productBuyers = Product::where('exhibit_id',$hw[$i]->id)->get();
                $data[$i]["buyers"] = array();
                for($j=0 ; $j<count($productBuyers) ; $j++){
                    $buyerData = User::find($productBuyers[$j]["user_id"]);
                    $data[$i]["buyers"][$j]["userName"] = $buyerData["name"];
                    $data[$i]["buyers"][$j]["userPrice"] = $productBuyers[$j]["price"];
                    $data[$i]["buyers"][$j]["isAccept"] = $productBuyers[$j]["isAccept"];
                    $data[$i]["buyers"][$j]["isBuyerAccept"] = $productBuyers[$j]["isBuyerAccept"];
                }
//                $data[$i]["buyers"] = $productBuyers;
            }//dd($data);
            $view = view('homee.searchResults', compact('data'))->render();
            return response()->json(['html' => $view]);
        }
    }
}
