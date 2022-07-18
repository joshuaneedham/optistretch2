<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Transaction;
use Stripe;
class BookController extends Controller
{
    public function doPurchase(Request $request)
    {
        $user = Auth::user();

        if ($user && (!empty($request->token))) {
        	$data =$request->all();
//dd($data);
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

           $stripe_arr =  Stripe\Charge::create ([

                    "amount" => 100 * $request->amount,

                    "currency" => "usd",

                    "source" => $request->token,

                    "description" => "Book Payment."

            ]);



		$transaction = new Transaction;
        	$transaction->user_id = $request['user_id'];;
        	$transaction->token = $stripe_arr->id;
        	$transaction->type = 'book';
        	$transaction->client_ip = $_SERVER['REMOTE_ADDR'];
        	$transaction->livemode = true;
        	$transaction->verification_allowed = true;
        	$transaction->save();

        	// $user->roles()->attach(2);
		$user->save();
		return redirect()->route('purchase')->with('success', 'Success');




        }

        return View::make('register');
    }
}
