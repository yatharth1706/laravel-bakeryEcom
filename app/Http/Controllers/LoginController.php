<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginpage');
    }
    function checkLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ],
        );

        $users = DB::select('select * from users where email = ?', [$request->input('email')]);
       
        if(count($users)>0)
        {  // print($users[0]->username);
            if($users[0]->password==$request->input('password'))
            {
                Session::put('username',$users[0]->username);
                $tableName = $users[0]->username;

                $sql = "create table IF NOT EXISTS " . $tableName . "_cart(id INT AUTO_INCREMENT,name VARCHAR(255) NOT NULL, cost INT,quantity INT, primary key (id))";
                
                DB::statement($sql);
                if($users[0]->username=='admin')
                {
                    return redirect('admin');
                }
                else
                {
                    return redirect('/successLogin');
                }
                
            }
            else
            {
                return redirect('/login')->with('error', 'incorrect details ' );   
            }
        }
        else
        {
            return redirect('/login')->with('error', 'incorrect details ' );
        }


        
        // $user_data=array(
        //     'email'=> $request->get('email'),
        //     'password'=> $request->get('password')
        // );

        // if(Auth::attempt($user_data))
        // {     Session::put('username',Auth::user()->username);  
        //       return redirect('/successLogin');
        // }
        // else
        // {
        //     return back()->with('error','wrong login details');
        // }
    }

    function successLogin()
    {
       return redirect('/')->with('successLogin', session('username') );
    }

    function logout()
    {  
        Session::forget('username');
        return redirect('/');
    }
}
