<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test_Controller_Dav1 extends Controller
{
    public function index(){

        return view('test');
    }

    public function calculate(Request $request){

        (int)$one = $request -> numberOne;
        (int)$two = $request -> numberTwo;
        $Action = $request->action;


          if ($Action =='division') {
              return ($one / $two);
          }
          if ($Action =='plus') {
              return ($one + $two);
          }
          if ($Action =='minus') {
              return ($one - $two);
          }
          if ($Action =='multiply') {
              return ($one * $two);
          }

    }

}
