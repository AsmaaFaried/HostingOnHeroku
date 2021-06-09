<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;
use App\Traits\GeneralTraits;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    use GeneralTraits;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  ////////  START  API'S////////////
    public function index(){
        $user=User::get();
        return response()->json($user);
    }

    public function getUserById(Request $request){
        $user = User::find($request->id);
        if(!$user){
            return $this->returnError('001','This User not found in database');
        }
        return $this->returnData('User',$user,'Data is Found');
    }

    /////// END  API's////////
   
    public function username()
    {
     
        
     return 'identify';
   
    }



    public function login(Request $request){
        $input = $request->all();
       

        $value= request()->input(key:'identify');
        $field= filter_var($value,filter: FILTER_VALIDATE_EMAIL)? 'email' : 'mobile';
        request()->merge([$field=>$value]);
       
       
        $user=User::where('email','mobile');
     
        if(auth()->attempt(array($field=>$input['identify'],'password'=>$input['password']))){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('Not exist',"Username or Password are Wrong!!");
        }

      
        
       
      
    }


    

// $password=request()->input(key:'password');
// $user2=User::where('password');


// if($user2 != $password){

// return redirect()->back()->with('Not exist',"Password is wrong!!");
// }
}