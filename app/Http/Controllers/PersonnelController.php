<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PersonnelStoreRequest;
use App\Http\Requests\ProfileStoreRequest;
use Illuminate\Validation\Rule;
class PersonnelController extends Controller
{

    public function indexhome(){

        return view('/index');
    }


    public function index() {
        $personnel = Personnel::paginate(5);
        return view('/management', compact('personnel'));
    }


    public function show(){

        $personnel = Personnel::latest()->get();

        return view('/management', ['pers' => $personnel]);
    }


    public function store(PersonnelStoreRequest $request){

        
        $personnel = new Personnel();

        $personnel->first_name =request('first_name');
        $personnel->last_name = request('last_name');
        $personnel->date_of_birth =request('date_of_birth');
        $personnel->email = request('email');
        $personnel->password = Hash::make( request('password'));
        
        $personnel->save();
        


        return redirect('/management')->with('msg' , 'New Personnel Account Successfully Created!');
    }

    public function profile(){
        
        //Finds the id of the current Personnel/User and then grabs that row 
        //and places it in the array of data below to display in the Profile.
        $personnel =Personnel::findOrFail(auth()->user()->id);

         return view('/profile',['personnel' => $personnel] );
    }

    public function profileStore(ProfileStoreRequest $request ){

        $personnel =Personnel::findOrFail(auth()->user()->id);
        
       
        
        
        if(request('first_name')== ""){
            return redirect('/profile');
        }else{
            $personnel->first_name = request('first_name');
            $personnel->last_name = request('last_name');
            $personnel->date_of_birth = request('date_of_birth');
            $personnel->email = request('email');

            if( request('password')==""){

            }else{
                $personnel->password =Hash::make(request('password'));
            }

            $personnel->save();
        return redirect('/profile')->with('msg' , 'Personnel Account Successfully Edited!');
        }


        


            
    }

    public function destroy($id){
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        return redirect('/management')->with('msg' , 'Personnel Account Successfully Deleted!');

    }

}
