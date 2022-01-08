<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\BankUser;

class employeeController extends Controller
{
    //
 /*   function viewlogin()
    {
        return view('login');
    }
    function loginCheck(Request $request)
    {
        $user=$request->user;
        $passWord=$request->passWord;
        $employee=Employee::where('empname',$user)
                            ->where('password',$passWord)
                            ->first();
        if($employee)
        {
        $request->session()->put('empid',$employee->id);
        return redirect()->route('employee.dash');
        }
        
    }    */
    function enterDash()
    {
        return view('employee.dashboard');
    }
    function editProfile(Request $request)
    {
        $id=$request->id;
        $employee=Employee::where('id',$id)->first();
        return response()->json($employee);
        $bank_user=$employee->bank_user_id;
        $bankuser=BankUser::where('id',$bank_user)->first();
        return response()->json($bankuser);
        // return view('employee.edit')->with('employee',$employee)
        //                             ->with('bankuser',$bankuser);
    }
    function updateProfile(Request $request)
    {
     /*   $this->validate($request, 
    		[
                'emp_name' => 'required | min:2 ',
	     		'f_name' => 'required | min:2 | string ',
	     		'l_name' => 'required | min:3 | string ',
	     		'gender' => 'required',
	     		'dob' => 'required',
	     		'phone' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/',
	     		'email' => 'required | email',
	     		'nid' => 'required'
	     	],

	     	[
                'emp_name.required' => 'Please fill up your User Name properly!',
                'emp_name.min' => 'Minimum 2 character',
	     		'f_name.required' => 'Please fill up your First Name properly!',
	     		'f_name.min' => 'Minimum 2 character',
	     		'l_name.required' => 'Please fill up your Last Name properly!',
	     		'l_name.min' => 'Minimum 3 character',
	     		'gender.required' => 'Please choose your gender!',
	     		'dob.required' => 'Please fill up Date of Birth!',
	     		'phone.required' => 'Please enter your phone number',
	     		'email.required' => 'Please fill up your Email properly!',
	     		'nid.required' => 'Please fill your Nid properly!'
	     	]
    	);    */
        $id=$request->id;
        $employee=Employee::where('id',$id)->first();
        $bank_user=$employee->bank_user_id;
        $employee->empname=$request->emp_name;
        $employee->password=$request->password;
        $employee->save();
        $bankuser=BankUser::where('id',$bank_user)->first();
        $bankuser->firstname=$request->f_name;
        $bankuser->lastname=$request->l_name;
        $bankuser->gender=$request->gender;
        $bankuser->dateofbirth=$request->dob;
        $bankuser->phone=$request->phone;
        $bankuser->email=$request->email;
        $bankuser->nid=$request->nid;
        $bankuser->save();
        //return redirect('/employee/profile/'.$id);

    }
    function viewProfile(Request $request)
    {
        $id=$request->id;
        $employee=Employee::where('id',$id)->first();
        return response()->json($employee);
        $bank_user=$employee->bank_user_id;
        $bankuser=BankUser::where('id',$bank_user)->first();
        return response()->json($bankuser);
        //return response()->json([$employee, $bankuser]);
        /*return view('employee.viewprofile')->with('employee',$employee)
                                        ->with('bankuser',$bankuser); */
    }
    function logout(Request $request)
    {
        $request->session()->forget('empid');
        return redirect()->route('login');
    }


}
