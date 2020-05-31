<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class PersonnelController extends Controller
{

//     public function find($id)
// {
//         $found = Personnel::findOrFail($id);

//         return view('/management', compact('found'));
//         //return redirect('/management' )->with(compact('found'));
// }

    public function indexhome(){

        return view('/index');
    }


    public function index() {
        $personnel = Personnel::paginate(5);

        // $found = new Personnel();

        // $found->first_name ="" ;
        // $found->last_name ="" ;
        // $found->date_of_birth ="";
        // $found->email = "";
        // $found->password = "";

        return view('/management', compact('personnel'));
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function show(){
        //$personnel = Personnel::all();

        //Orders by whatever data you want... Adding "desc" reverses the order...
        //$personnel = Personnel::orderBy('last_name', 'desc')->get();

        //Gets only the rows that are equal to the given value or text
        //$personnel = Personnel::where('last_name','Bieber')->get();

        $personnel = Personnel::latest()->get();

        return view('/management', ['pers' => $personnel]);
    }


    public function store(){

        


        $personnel = new Personnel();

        $personnel->first_name = request('first_name');
        $personnel->last_name = request('last_name');
        $personnel->date_of_birth = request('date_of_birth');
        $personnel->email = request('email');
        $personnel->password = Hash::make( request('password'));
        
        $personnel->save();
        


        return redirect('/management')->with('msg' , 'New Personnel Account Successfully Created!');
    }

    public function profile(){
        
        //Finds the id of the current Personnel/User and then grabs that row and places it in the array of data below to display in the Profile.
        $personnel =Personnel::findOrFail(auth()->user()->id);

         return view('/profile',['personnel' => $personnel] );
    }

    public function profileStore(){
        
        $personnel =Personnel::findOrFail(auth()->user()->id);
        if(request('first_name')== ""){
            return redirect('/profile');
        }else{
            $personnel->first_name = request('first_name');
            $personnel->last_name = request('last_name');
            $personnel->date_of_birth = request('date_of_birth');
            //$personnel->email = request('email');
            $personnel->password =Hash::make( request('password'));
    
            $personnel->save();
        return redirect('/profile')->with('msg' , 'Personnel Account Successfully Edited!');
        }
            
    }

    public function destroy($id){
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        return redirect('/management');

    }

}
