<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordEmail;
use App\Models\Category;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobType;
use App\Models\SavedJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    //Este metodo muestra la pg de registro de usuarios
    public function registration() {
        return view('front.account.registration');
    } 

    //este metodo registra un usuario
    public function processRegistration(Request $request) {
        $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:5|same:confirm_password',
        'confirm_password' => 'required',
    ]);

    if ($validator->passes()){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->save();

         session()->flash('success','Tu registro ha sido exitoso.');
        
         return response()->json([
           'status' => true,
           'errors' => []
        ]);

    } else {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]);
        }
    } 

    //este metodo muestra la pg de inicio de sesion
    public function login() {
        return view('front.account.login');
    } 

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('account.profile');
            } else {
                return redirect()->route('account.login')->with('error','El correo o la contraseña son incorrectos.');
            }
        } else {
            return redirect()->route('account.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }
    //Funcion creada para el error de la carga del login
    public function showForgotPasswordForm() {
        return view('auth.forgot-password');
    }    
    
    public function profile() {
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        return view('front.account.profile',[
            'user' => $user
        ]);
    }
    
    public function updateProfile(Request $request) {

        $id = Auth::user()->id;

        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5|max:35',
            'email' => 'required|email|unique:users,email,'.$id.',id'
        ]);


        if ($validator->passes()) {

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->designation = $request->designation;
            $user->save();

            session()->flash('success','Perfil actualizado exitosamente.');

            return response()->json([
                'status' => true,
                'errors' => []
            ]);

        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

    }


    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }

    
}
