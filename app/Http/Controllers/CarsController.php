<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Usercars;

class CarsController extends Controller
{


    public function storeCars(Request $request){
        try {
         $data =   Cars::create([
                'name' => $request->name,
                'model'=> $request->model,
                'price'=> $request->price,
                'url'=>$request->image,
            ]);

         return response()->json(['data' => $data]);

        } catch (\Throwable $th) {
         return response()->json(['data' => $th]);
        }
    }



    public function getCars(){

       $data = Cars::select('*')->get();

       return response()->json(['data' => $data]);

    }

    public function searchCars($key){
      $data =  Cars::where('name', 'LIKE', '%'.$key.'%')->get();
      return response()->json(['data' => $data]);
    }

    public function getUserDashboard($id){


        $data = Cars::select('*')->whereNotIn()->get();
 
        return response()->json(['data' => $data]);
 
     }

     public function getCar($id){

        $data = Cars::select('*')->where('id',$id)->first();
 
        return response()->json(['data' => $data]);
 
     }

     public function updateCar($id,$userId,$carId){

      $data = Usercars::create([
        'transaction_id'=> $id,
        'users_id' => $userId,
        'car_id'=>$carId,
      ]);
      return response()->json(['data' => $data]);
     }
}
