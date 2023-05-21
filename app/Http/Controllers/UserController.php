<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\employee;


class UserController extends Controller
{
    //
    function returnUserPage(Request $request){
        return view("users");
    }

    function returnID($id=null){
        $r = "id is: ".$id;
        return $r;
    }

    function handleRegexRoute($name){
        return $name;
    }

    function multipleRoutes($name, $month, $year){
        $ans = "$name DOB is  $month/$year";
        return $ans;
    }

    function handleNamedParam($id){
        return "your are on a Named parameter Route with id: ".$id;
    }

    function sendDataToBlade(){
        $day = "Monday";
        return view("weekday", ["weekday"=>$day]);
    }


    function validateUserData(Request $request){
        $request->validate([
            'username'=> 'required | max: 10',
            'userpass'=> 'required | min:6',
            'useremail'=>'required',
            'usernumber'=>'required | min:10'

        ]);
        return $request->input();
    }

    function handleupload(Request $request){
        $request->validate([
            'username'=>'required | max:10',
            'userpass'=> 'required | min:6',
            'useremail'=>'required',
            'imagefile'=>'required |image|mimes:jpeg,png,jpg,gif',
        ]);

        $name = $request->input('username');


        $file= $request->file('imagefile');
        $filename = time().$request->imagefile->getClientOriginalName();
        $file->storeAS('public\cover_image',$filename);

        return view('showimage', ['data'=> [$name, $filename]]);
    }



    function handleflash(Request $request){
        $username = $request->input("username");
        $psw = $request->input("userpass");
        $email = $request->input("useremail");

        $request->Session()->flash('user', $username);
        return redirect('flashexample');
    }


    function handlelogin(Request $request){
        $request->validate([
            'username' => 'required',
            "userpass"=> 'required'

        ]);
        $inputData =  $request->input();
        $request->Session()->put('username' , $inputData['username']);
        return redirect('success');
    }

    function handlelogout(Request $request){
        if(Session()->has('username')){
            Session()->pull("username");
        }

        return redirect("/");
    }




    // crud

    
    public function registerEmployee(Request $request){

        $name= $request->input('emp_name');
        $designation= $request->input('designation');
        $salary= $request->input('salary');
        DB::insert("insert into employee ( name, designation, salary) values (?,?,?) ", [$name, $designation, $salary]);
        return redirect('employeeview');
        // return $request->input();

    }

    
    function list(){
        // return person::all();
        $data = employee::all();
        return view('allEmployee' , ['allusers'=>$data]);
    }

    function delete(Request $request)
    {
        DB::delete('Delete from employee where id= ?', [$request->id]);
        return redirect('employeeview');
    }

    function editListdata(Request $request){
        $editableuser =   DB::select('select * from employee where id= ?', [$request->id]);
        return view('updateemployee' , ['editableuser'=>$editableuser]);
    }

    function saveListdata(Request $request, $id){

        $person = employee::find($id);
        $person->name = $request->input('emp_name');
        $person->designation = $request->input('designation');
        $person->salary = $request->input('salary');
        $person->save();

        return redirect("/employeeview");

    }

}
