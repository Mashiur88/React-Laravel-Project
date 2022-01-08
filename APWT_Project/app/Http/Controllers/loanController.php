<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanRequest;

class loanController extends Controller
{
    //
    function requestlist()
    {
//$loanrequests=LoanRequest::all();
        return LoanRequest::all();
    /*    if($loanrequests)
        {
        return view('employee.loanrequest')->with('lrqst',$loanrequests);
        }  */
        //DD($loanrequests);
    }
    function viewdocument(Request $request)
    {
        
        $id=$request->id;
        $loan=LoanRequest::where('id',$id)->first();
        return $loan;
        //return view('employee.document')->with('loan',$loan);
    }
    function verifyloan(Request $request)
    {
        $id=$request->id;
        $loan=LoanRequest::where('id',$id)->first();
        $loan->loanrequeststatus=$request->loanstatus;
        $loan->save();
       // return redirect()->route('employee.loanrqsts');

    }
}
