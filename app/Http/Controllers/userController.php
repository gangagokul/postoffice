<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
use Carbon\carbon;
use App\Models\register;
use App\Models\deposit;
use App\Models\eletter;
use App\Models\telegram;

class userController extends Controller
{
    public function indexs()
   {
      return view('user.indexs');
   }
   public function userabout()
   {
      $data['res'] = about::get();
      return view('user.userabout', $data);
   }
   public function myprofile()
   {
    $id=session('sessid');
      $data['profile'] = register::where('id',$id)->get();
      return view('user.myprofile', $data);
   }
   public function profileaction(Request $req,$id)
   {
      $firstname = $req->input('firstname');
      $lastname = $req->input('lastname');
      $email = $req->input('email'); 
      $date = $req->input('date');
      $address = $req->input('address');
      $pincode = $req->input('pincode');
      $contactnumber = $req->input('contactno');
      $state = $req->input('state');
      $city = $req->input('city');
      $district = $req->input('district');
      $username = $req->input('username');
      $password = $req->input('password');
      $data = [
         'firstname' => $firstname,
         'lastname' => $lastname,
         'email' => $email,
         'date' => $date,
         'address' => $address,
         'pincode' => $pincode,
         'contactno' => $contactnumber,
         'state' => $state,
         'city' => $city,
         'district' => $district,
         'username' => $username,
         'password' => $password
      ];
      register::where ('id',$id)->update($data);
      return redirect('/myprofile');
   }
   public function fixeddeposit()
   {
      $id=session('sessid');
      $data['fixed'] = register::where('id',$id)->get();
       return view('user.fixeddeposit',$data);
   }
   public function depositaction(Request $req)
   {
   $name = $req->input('name');
   $age = $req->input('age');
   $gender = $req->input('gender'); 
   $address = $req->input('address');
   $contactnumber = $req->input('contact');
   $place = $req->input('place');
   $depositamount = $req->input('amount');
   $noofyears = $req->input('years');
   $date = carbon::now()->format('d/m/y');
   $amount = $depositamount+(($depositamount*7*$noofyears)/100);
   $enddate = carbon::now()->addYear($noofyears)->format('d/m/y');
   $userid=session('sessid');

   $data = [
      'name' => $name,
      'age' => $age,
      'gender' => $gender,
      'address' => $address,
      'contact' => $contactnumber,
      'place' => $place,
      'amount' => $depositamount,
      'years' => $noofyears,
      'receivedamount' => $amount,
      'currentdate' => $date,
      'receiveddate' => $enddate,
      'userid'=>$userid


   ];
   deposit::insert($data);
      return redirect('/viewdeposit');

}
public function viewdeposit()
   {
      $id=session('sessid');
      $data['view'] = deposit:: where('userid',$id)->get();
      
       return view('user.viewdeposit',$data);
   
   }
   public function uploadreceipt($id)
   {
      $data['rec'] = deposit:: where('id',$id)->get();
      return view('user.uploadreceipt',$data);
   }
   public function uploadaction(Request $req,$id)
   {
      $receipt=$req->file('receipt');
      $filename=$receipt->getClientOriginalName();
      $receipt->move(public_path().'receipt/',$filename);
      $data=[
         'receipt'=>$filename,
      ];
      deposit::where('id',$id)->update($data);
      return redirect('/viewdeposit');
   }
   public function applyeletter()
   {
      return view('user.applyeletter');
   }
   public function applyaction(Request $req)
   {
      
      $address = $req->input('address'); 
      $message = $req->input('message');
      $id=session('sessid');
      $data = [
       
        'address' => $address,
        'message' => $message,
        'userid'=>$id,
        
       
      ];
      eletter::insert($data);
      return redirect('/applyeletter');
   }
   public function vieweletter()
   {
      $id=session('sessid');
      $data['letter'] = eletter:: where('userid',$id)->get();
      
       return view('user.vieweletter',$data);

   }
   public function telegram()
   { 
       return view('user.telegram');
   }
   public function telegramaction(Request $req)
   {
      
      $address = $req->input('address'); 
      $message = $req->input('message');
      $pincode = $req->input('pincode');
      $id=session('sessid');
      $data = [
       
        'address' => $address,
        'message' => $message,
        'pincode' => $pincode,
        'userid'=>$id,
        
      ];
      telegram::insert($data);
      return redirect('/telegram');
   }
   public function viewtelegram()
   {
      $id=session('sessid');
      $data['tel'] = telegram:: where('userid',$id)->get();
      
       return view('user.viewtelegram',$data);

   }
}