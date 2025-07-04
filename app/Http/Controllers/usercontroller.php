<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Show all users
    public function showUsers()
    {
        $users = DB::table('users')
        ->Paginate(5,['name','email']);
       
        return view('users.allusers', ['data' => $users]);
    }
 
    // Show single user by ID
    public function singleUsers(string $id)
    {
        $user = DB::table('users')->where('id', $id)->first(); // use first() instead of get()
        return view('users.user', ['data' => $user]);
    }
    

    // Add new user(s)
    public function addUsers(Request $req)
    {
        $user = DB::table('users')->insert([
            [
                'name'  => $req->username,
                'email' => $req->useremail,
                'age'   => $req->userage,
                'city'  => $req->usercity,
                'password'  => $req->userpassword,
                // 'created_at' => now(),
                // 'updated_at' => now()
            ]
           
        ]);

        if ($user) {
              return redirect()->route('home');
            //echo "<h1>Data successfully added</h1>";
        } else {
            echo "<h1>Data not added.</h1>";
        }
    }
public function updatepage(string $id){
 //$user = DB::table('users')->where('id', $id)->get();
 $user = DB::table('users')->find($id); 
 
       return view('updateuser', ['data' => $user]);
}
public function updateUser(Request $req, $id)
{
    $user = DB::table('users')
        ->where('id', $id)
        ->update([
           'name'  => $req->username,
                'email' => $req->useremail,
                'age'   => $req->userage,
                'city'  => $req->usercity,
                'password'  => $req->userpassword,
        ]);

    if ($user) {
        return redirect()->route('home');
    } else {
        // return back()->with('message', 'No changes made.');
    }
}
    
    // Delete user by ID
    public function deleteUser(string $id)
    {
        $deleted = DB::table('users')
            ->where('id', $id)  // ✅ Fixed typo: wheres ➜ where
            ->delete();

        if ($deleted) {
            return redirect()->route('home')->with('message', 'User deleted.');
        } else {
            return redirect()->route('home')->with('message', 'User not found.');
        }
    }
}

