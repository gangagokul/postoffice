<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\register;
use App\Models\admin;

class epostController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function registeraction(Request $req)
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
         'password' => $password,
      ];
      register::insert($data);
      return redirect('/register');
   }
   public function userlogin()
    {
        return view('userlogin');
    }
   
       public function loginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        // echo $username;
        // exit();
        $data = register::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req = session()->put(array('sessid' => $data->id));
            return redirect('/indexs');
        } else {
            return redirect('/login');
        }
    }
   
    public function about()
   {
      $data['res'] = about::get();
      return view('about', $data);
   }
   public function contact()
   {
       return view('contact');
   }
   public function contactaction(Request $req)
   {
      $name = $req->input('name');
      $email = $req->input('email');
      $subject = $req->input('subject'); 
      $message = $req->input('message');
      $data = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message
      ];
      contact::insert($data);
      return redirect('/contact');
   }
   public function adminlogin()
   {
       return view('adminlogin');
   }
   public function adminloginaction(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        // echo $username;
        // exit();
        $data = admin::where('email', $email)->where('password', $password)->get();
        if (isset($data)) {
           
            return redirect('/index');
        } else {
            return redirect('/adminlogin');
        }
    }
}
