<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class newsController extends Controller
{
    //
    function createnews()
    {
        return view('employee.news');
    }
    function submitnews(Request $request)
    {
    /*     $this->validate(
            $request,
            [
                'newstitle'=>'required|min:5|string',
                'newsdesc'=>'required|min:10|string',
                'newspicture'=>'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
            ],
            [
                'required'=>'input field required',
                'min'=>'size is not correct',
                'string'=>'input field need to be string',
                'mimes'=>'file type is not correct',
                'max'=>'file is too large'
            ]
        );     */
     /*   $image = $request->file('newsPicture');
        $image_name=$image->getClientOriginalName();
        $image_ext=$image->getClientOriginalExtension();  
        $image_new_name =strtoupper(Str::random(6)); 
        $image_full_name=$image_new_name.'.'.$image_ext;
        $upload_path='storage/employee/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $imageData='storage/employee/'.$image_full_name;   */

        $news=new News();
        $news->newstitle=$request->newstitle;
        $news->newsbody=$request->newsbody;
        $news->newspicture=$request->newspicture;
        $news->save();
        if($news)
        {
        return "news posted";
        }
    }
}
