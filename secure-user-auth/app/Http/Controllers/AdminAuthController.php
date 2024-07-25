<?php
namespace App\Http\Controllers;

// use Session
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{   
    
    public function index(){
        return view('index');
    }
    public  function login()
    {
        return view('auth.login');
    }

    public  function registration()
    {
        return view('auth.registration');
    }


    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $user->password = Hash($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have been registered successfully!');
        } else {
            return back()->with('fail', 'Something went wrong, please try again!');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not matches!');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            // $data =  User::find(Session::get('loginId'));
            $data =  User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
