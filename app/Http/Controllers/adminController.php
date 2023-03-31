<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use App\Models\about;
use App\Models\contact;
use App\Models\register;
use App\Models\deposit;
use App\Models\telegram;
use App\Models\eletter;
use App\Models\admin;




class adminController extends Controller
{
   public function index()
   {

   $countdeposit =deposit::count();
   $counttelegram =telegram::count();
   $countusers =register::count();
   $counteletter =eletter::count();
       return view('admin.index', compact('countdeposit','counttelegram','countusers','counteletter'));
   
   }
   public function addabout()
   {
      return view('admin.addabout');
   }
   public function aboutaction(Request $req)
   {
      $title = $req->input('title');
      $description = $req->input('description');
      $data = [
         'title' => $title,
         'description' => $description
      ];
      about::insert($data);
      return redirect('/viewabout');
   }
   public function viewabout()
   {
      $data['res'] = about::get();
      return view('admin.viewabout', $data);
   }
   public function userlogin()
   {
       return view('userlogin');
   }
   public function editabout($id){
       $data['res']=about::where('id',$id)->get();
      //  print_r($data);
      //  exit();
       return view('admin.editabout',$data);
   }
   public function updateaction(Request $req,$id)
   {
      $title = $req->input('title');
      $description = $req->input('description');
      $data = [
         'title' => $title,
         'description' => $description
      ];
      about::where('id',$id)->update($data);
      return redirect('/viewabout');
   }
   public function deleteabout($id)
   {
       about::where('id',$id)->delete();
       return redirect('/viewabout');
   }
   public function complaint()
   {
      $data['result'] = contact::get();
      return view('admin.complaint', $data);
   }
   public function viewuser()
   {
      $data['views'] = register::get();
      return view('admin.viewuser', $data);
   }
   public function viewfixeddeposit()
   {
     
      $data['view'] = deposit::get();
      return view('admin.viewfixeddeposit',$data);
   }
   
   public function approve($id)
    {
        $data = ['status' => "approve"];
        deposit::where('id', $id)->update($data);
        return redirect('viewfixeddeposit');
    }
    public function decline($id)
    {
        $data = ['status' => "decline"];
        deposit::where('id', $id)->update($data);
        return redirect('viewfixeddeposit');
    }
   public function logout(Request $req)

    {

       $req->session()->forget('sess');

       return redirect('/');

    }
    public function viewstelegram()
    {
       $data['tel'] = telegram::get();
       return view('admin.viewstelegram', $data);
    }
    public function send($id)
    {
        $data = ['status' => "send"];
        telegram::where('id', $id)->update($data);
        return redirect('viewstelegram');
    }
    
    public function viewletter()
    {
       $data['letter'] = eletter::get();
       return view('admin.viewletter', $data);
    }
    public function printeletter($id)
    {
        $data = ['status' => "printeletter"];
        eletter::where('id', $id)->update($data);
        return redirect('viewletter');
    }
    public function sendeletter($id)
    {
        $data = ['status' => "sendeletter"];
        eletter::where('id', $id)->update($data);
        return redirect('viewletter');
    }
    public function adminprofile()
    {
       $data['profile'] = admin::get();
       return view('admin.adminprofile', $data);
    }
    public function adminprofileaction(Request $req)
    {
      
       $email = $req->input('email'); 
       $password = $req->input('password');
       $data = [
          
          'email' => $email,
          'password' => $password
       ];
       admin::where('id',1)->update($data);
       
       return redirect('/adminprofile');
    }
}
