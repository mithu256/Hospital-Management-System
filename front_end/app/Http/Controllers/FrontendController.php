<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     /*public function ajax(Request $request){
    	return response()->json(['success'=>'This was saved',]);
    }
*/

    public function loginpage(){
    	return view('blade-scafolding.login');
    }
    public function Registrationpage(){
    	return view('blade-scafolding.register');
    }
    public function bookingpage(){
    	return view('blade-scafolding.booking');
    }
    public function channelDetails(){
    	return view('blade-scafolding.channelDet');
    }
    public function afterLoginPage(){
    	return view('blade-scafolding.afterLogin');
    }

}
