<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class accountVerify extends Controller
{
    //
    function accountlist(Request $request)
    {

        $account=Account::all();
        return $account;
        //return view('employee.AccountInfolist')->with('account',$account);
    }
    function viewinfo(Request $request)
    {
        $id=$request->id;
        $account=Account::where('id',$id)->first();
        return $account;
        //return view('employee.customerprofile')->with('account',$account);
    }
    function verifyaccount(Request $request)
    {
        $id=$request->id;
        $account=Account::where('id',$id)->first();
        $account->accountstate=$request->accountstate;
        $account->save();
        // return redirect()->route('employee.info');
    }
}
