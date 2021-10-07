<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        //Request Instance

        //storing Data
         $request->session()->put('name', 'arafat');
         $request->session()->put('city', 'Dhaka');
        //Retrieve Data
        $name = $request->session()->get('name');
        $roll = $request->session()->get('roll');
        $city = $request->session()->get('city', 'Noakhali');
        $price = $request->session()->get('price', function(){
            return 102;
        });

        //Retrieving All session Data
        // $all_session_data = $request->session()->all();
        // dd($all_session_data);

        //Check if item exists in Session
        // if($request->session()->has('roll'))
        // {
        //     dd('yes');
        // }

        // dd('No');

        // //Check if item is  present  in Session
        // if($request->session()->exists('roll'))
        // {
        //     dd('yes');
        // }

        // dd('No');

         //Check if item is not  present  in Session
        //  if($request->session()->missing('name'))
        //  {
        //      dd('yes');
        //  }
 
        //  dd('No');

        //Deleting single item
        // echo($request->session()->get('name'));
        // $request->session()->forget('name');
        // echo($request->session()->get('name'));


        //Delete Multiple Items
       // $request->session()->forget('name', 'city');
        
       //Remove All Items
        //$request->session()->flush();

        //Retrieving and Deleting Item
        // $value = $request->session()->pull('name', 'sumit');


           $data = ['name' => $name, 'roll' => $roll, 'city' => $city, 'price' => $price];
            return view('welcome', $data);

        //Global Session Helper

        //Storing Data
         //session(['name'=> 'yeasin']);
         //session(['city' => 'Dhaka']);

         //Retrieving All session Data
        //  $data = session()->all();
        //  dd($data);

        //Check if item exists in Session
        // if($request->session()->has('name'))
        // {
        //     dd('yes');
        // }

        // dd('No');

        // //Check if item is  present  in Session
        // if(session()->exists('name'))
        // {
        //     dd('yes');
        // }

        // dd('No');



        //Deleting single item
        // echo(session('name'));
        // session()->forget('name');
        // echo(session('name'));

         //Delete Multiple Items
        //session()->forget('name', 'city');

         //Remove All Items
        //session()->flush();

        //Retrieving and Deleting Item
        // $value = session()->pull('name', 'sumit');


         //Retrieving Data
        //  $name = session('name');
        //  $roll = session('roll', '15203045');
        //  $city = session('city', 'Noakhali');
        //  $data = ['name' => $name, 'roll' => $roll, 'city' => $city];
        //  return view('welcome', $data);


        //Flash Data

        // $request->session()->flash('status', 'Login Success');
        // return redirect('profile');
    }
}
