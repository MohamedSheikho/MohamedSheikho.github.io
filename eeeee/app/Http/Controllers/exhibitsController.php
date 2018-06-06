<?php

namespace App\Http\Controllers;

use App\Exhibits;
use App\Product;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class exhibitsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function electronics(){
        $hw = Exhibits::where('type', 'إلكترونيات')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.electronics',compact('data'));

    }
    public function Real_estates(){


        $hw = Exhibits::where('type', 'عقارات')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.Industrial_electrics',compact('data'));

    }
    public function Electricians(){
        return view('exhibits.Electricians');
    }
    public function home_electrics(){
        $hw = Exhibits::where('type', 'كهربائيات منزلية')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.home_electrics',compact('data'));

    }
    public function Industrial_electrics(){

        $hw = Exhibits::where('type', 'كهربائيات صناعية')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.Industrial_electrics',compact('data'));
    }
    public function Vehicles(){
        return view('exhibits.Vehicles');
    }
    public function cars(){
        $hw = Exhibits::where('type', 'سيارات')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.cars',compact('data'));

    }
    public function tractors(){
        $hw = Exhibits::where('type', 'جرارات')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.tractors',compact('data'));

    }
    public function motors(){
        $hw = Exhibits::where('type', 'دراجات')->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.motors',compact('data'));


    }

    public function addExhibits(){
        return view('exhibits.addExhibits');
    }
    public function saveExhibits(Request $request){
        $newExhibits = Exhibits::create([
            "place" => $request->place,
            "price" => $request->price,
            "date" => $request->date,
            "count" => $request->count,
            "description" => $request->description,
//            "file" => $request->file,
            "type" => $request->type,
            "user_id"=> auth()->user()->id
        ]);

        $image = Request()->file("file");
        $ext = $image->extension();
        if($image){
            $image->move('images',$newExhibits->id.".".$ext);
        }
        $newExhibitsData = Exhibits::find($newExhibits->id);
        $newExhibitsData->file = $ext;
        $newExhibitsData->save();
        return redirect('addExhibits');
    }
    public function updateExhibits($id ,Request $request){
        $ss = Exhibits::find($id);
        $ss->price = $request->price;
        $ss->date = $request->date;
        $ss->count = $request->count;
        $ss->save();
    }

    public function houseWare()
    {
        $currentDate = date('Y-m-d');
        $hw = Exhibits::where('type', 'أدوات منزلية')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
        $data = array();
        for ($i = 0; $i < count($hw); $i++) {
            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
            $user = User::find($hw[$i]["user_id"]);
            $data[$i]["user"] = $user["name"];
            if(!$productData->isEmpty())
                $data[$i]["exist"] = 'Y';
            else
                $data[$i]["exist"] = 'N';
            $data[$i]["price"] = $hw[$i]["price"];
            $data[$i]["description"] = $hw[$i]["description"];
            $data[$i]["id"] = $hw[$i]["id"];
            $data[$i]["place"] = $hw[$i]["place"];
            $data[$i]["count"] = $hw[$i]["count"];
            $data[$i]["date"] = $hw[$i]["date"];
            $data[$i]["file"] = $hw[$i]["file"];
            $data[$i]["user_id"] = $hw[$i]["user_id"];
        }
        return view('exhibits.houseWare',compact('data'));
    }
    public function contactUs(){
        return view('contactUs');
    }
//    public function saveHouseWare(Request $request , Exhibits $exhibits)
//    {
//        $exhibits->create([
//            "name" => $request["name"],
//            "price" => $request["price"],
//            "description" => $request["description"],
//        ]);
//        return redirect('/');
//    }
    public function editExhabit($id){
        $exhibit = Exhibits::find($id);//dd($exhibit);
        return view('exhibits.edit',compact('exhibit'));
    }
    public function saveEditExhabit($id,Request $request){
        $exhibit = Exhibits::find($id);

        $image = Request()->file("file");

        if($image){
            $ext = $image->extension();
            if(file_exists($id.".".$exhibit["file"])) {
                unlink(URL::asset('images/' . $id . "." . $exhibit["file"]));
            }
            $image->move('images', $id . "." . $ext);
            $newExhibitsData = Exhibits::find($id);
            $newExhibitsData->file = $ext;
            $newExhibitsData->save();

        }

        $exhibit->place = $request["place"];
        $exhibit->price = $request["price"];
        $exhibit->description = $request["description"];
        $exhibit->date = $request["date"];
        $exhibit->count = $request["count"];
        $exhibit->type = $request["type"];
        $exhibit->save();

        return redirect('/');
    }
}


//namespace App\Http\Controllers;
//
//use App\Exhibits;
//use App\Product;
//use App\User;
//use Illuminate\Http\Request;
//
//use App\Http\Requests;
//
//class exhibitsController extends Controller
//{
//    public function __construct(){
//        $this->middleware('auth');
//    }
//    public function electronics(){
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'إلكترونيات')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//        $hw = Exhibits::where('type', 'إلكترونيات')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.electronics',compact('data'));
//
//    }
//    public function Real_estates(){
//
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'عقارات')->where('count','>', '0');
//        $hw = Exhibits::where('type', 'عقارات')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.Industrial_electrics',compact('data'));
//
//    }
//    public function Electricians(){
//        return view('exhibits.Electricians');
//    }
//    public function home_electrics(){
////        $currentDate = date('Y-m-d');
//        $hw = Exhibits::where('type', 'كهربائيات منزلية')->where('count','>', '0');
////        $hw = Exhibits::where('type', 'كهربائيات منزلية')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.home_electrics',compact('data'));
//
//    }
//    public function Industrial_electrics(){
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'كهربائيات صناعية')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//
//        $hw = Exhibits::where('type', 'كهربائيات صناعية')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.Industrial_electrics',compact('data'));
//    }
//    public function Vehicles(){
//        return view('exhibits.Vehicles');
//    }
//    public function cars(){
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'سيارات')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//        $hw = Exhibits::where('type', 'سيارات')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.cars',compact('data'));
//
//    }
//    public function tractors(){
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'جرارات')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//        $hw = Exhibits::where('type', 'جرارات')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.tractors',compact('data'));
//
//    }
//    public function motors(){
////        $currentDate = date('Y-m-d');
////        $hw = Exhibits::where('type', 'دراجات')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//        $hw = Exhibits::where('type', 'دراجات')->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.motors',compact('data'));
//
//
//    }
//
//    public function addExhibits(){
//        return view('exhibits.addExhibits');
//    }
//    public function saveExhibits(Request $request){
//        $newExhibits = Exhibits::create([
//            "place" => $request->place,
//            "price" => $request->price,
//            "date" => $request->date,
//            "count" => $request->count,
//            "description" => $request->description,
////            "file" => $request->file,
//            "type" => $request->type,
//            "user_id"=> auth()->user()->id
//        ]);
//
//        $image = Request()->file("file");
//        if($image) {
//            $ext = $image->extension();
//            if ($image) {
//                $image->move('images', $newExhibits->id . "." . $ext);
//            }
//            $newExhibitsData = Exhibits::find($newExhibits->id);
//            $newExhibitsData->file = $ext;
//            $newExhibitsData->save();
//        }
//        return redirect('addExhibits');
//    }
//    public function updateExhibits($id ,Request $request){
//        $ss = Exhibits::find($id);
//        $ss->price = $request->price;
//        $ss->date = $request->date;
//        $ss->count = $request->count;
//        $ss->save();
//    }
//
//    public function houseWare()
//    {
//        $currentDate = date('Y-m-d');
//        $hw = Exhibits::where('type', 'أدوات منزلية')->where('count','>', '0')->whereDate('date','>=', $currentDate)->get();
//        $data = array();
//        for ($i = 0; $i < count($hw); $i++) {
//            $productData = Product::where('exhibit_id',$hw[$i]["id"])->where('user_id',auth()->user()->id)->get();
//            $user = User::find($hw[$i]["user_id"]);
//            $data[$i]["user"] = $user["name"];
//            if(!$productData->isEmpty())
//                $data[$i]["exist"] = 'Y';
//            else
//                $data[$i]["exist"] = 'N';
//            $data[$i]["price"] = $hw[$i]["price"];
//            $data[$i]["description"] = $hw[$i]["description"];
//            $data[$i]["id"] = $hw[$i]["id"];
//            $data[$i]["place"] = $hw[$i]["place"];
//            $data[$i]["count"] = $hw[$i]["count"];
//            $data[$i]["date"] = $hw[$i]["date"];
//            $data[$i]["file"] = $hw[$i]["file"];
//            $data[$i]["user_id"] = $hw[$i]["user_id"];
//        }
//        return view('exhibits.houseWare',compact('data'));
//    }
//    public function contactUs(){
//        return view('contactUs');
//    }
////    public function saveHouseWare(Request $request , Exhibits $exhibits)
////    {
////        $exhibits->create([
////            "name" => $request["name"],
////            "price" => $request["price"],
////            "description" => $request["description"],
////        ]);
////        return redirect('/');
////    }
//    public function editExhabit($id){
//        $exhibit = Exhibits::find($id);//dd($exhibit);
//        return view('exhibits.edit',compact('exhibit'));
//    }
//    public function saveEditExhabit($id,Request $request){
//        $exhibit = Exhibits::find($id);
//
//        $image = Request()->file("file");
//
//        if($image){
//            $ext = $image->extension();
//            if(file_exists($id.".".$exhibit["file"])) {
//                unlink(URL::asset('images/' . $id . "." . $exhibit["file"]));
//            }
//            $image->move('images', $id . "." . $ext);
//            $newExhibitsData = Exhibits::find($id);
//            $newExhibitsData->file = $ext;
//            $newExhibitsData->save();
//
//        }
//
//        $exhibit->place = $request["place"];
//        $exhibit->price = $request["price"];
//        $exhibit->description = $request["description"];
//        $exhibit->date = $request["date"];
//        $exhibit->count = $request["count"];
//        $exhibit->type = $request["type"];
//        $exhibit->save();
//
//        return redirect('/');
//    }
//    public function expense(Request $request){
//        $files=$request->file('image');
//        print_r($files);
//        if(isset($files)){
//            echo "true";
//            foreach ($files as $file){
//                echo "testing";
//                $destinationPath='uploads/expense';
//                $filename=$file->getClientoriginalName();
//                $savedFileName=date('Ymdhis')."_".$filename;
//                $file->move($destinationPath,$savedFileName);
//
//
//            }
//
//        }else{
//            echo "false";
//        }
//    }
//}
