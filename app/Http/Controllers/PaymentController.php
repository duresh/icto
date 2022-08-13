<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct()
    {
        $this->payment = new Pay();
    }
    public function index()
    {
        return view('dashboard.contents.pay');
    }

    public function save_payment(Request $request)
    {
        $validateData = $request->validate([
            'amount' => 'required',
            'nameOn' => 'required|string',
            'cardNo' => 'required|integer',
            'expireOn' => 'required|string',
            'securityCode' => 'required|integer',
        ]);



        $save = new Pay();
        $save->user = Auth::user()->name;
        $save->cardNo = $request->input('cardNo');
        $save->expireOn = $request->input('expireOn');
        $save->securityCode = $request->input('securityCode');
        $save->amount = $request->input('amount');
        $save->nameOn = $request->input('nameOn');
        $save->status = '0';
        $save->save();

        return back()->with('status', 'Payment has been updated successfully');
    }

    public function payRecords()
    {
        $request['payments'] = $this->payment->all();
        return view('dashboard.contents.record')->with($request);
    }

    public function confirm($confirm_id)
    {

        $data = $this->payment->find($confirm_id);
        $data -> update([
            'status' => 1,
            
        ]);

        return redirect()->back()->with('status', 'Payment has been confirmed successfully');
    }
}
