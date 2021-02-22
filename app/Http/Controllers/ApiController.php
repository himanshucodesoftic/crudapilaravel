<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class ApiController extends Controller
{
    public function create(Request $request)
    {
       try {
            // Validate the value...

            $students=new student();
            $students->fname=$request->input('fname');
          
            $students->lname=$request->input('lname');
            
            $students->email=$request->input('email');
            
            $students->password=$request->input('password');
    
            $students->save();
            // return response()->json($students);
       
        } catch (Throwable $e) {
            report($e);
            error_log($e);
    
            // return false;
        }
    }


    public function getEmployee()
    {

        return response()->json(student::all(),200);
    }

public function getbyid($id)
{
echo "hello";
$students=student::find($id);
if(is_null($students))
{

}
return response()->json($students::find($id));
}
public function addEmployee(Request $request)
{
// dd($request);
    $students=student::Create($request->all());
    return response($students,200);
}

public function updateEmployee(Request $request,$id)
{

    $employee=student::find($id);

    if(is_null($employee))
    {

        return response()->json(['message'=>"employee not found"]);
    }
    $employee->update($request->all());
    // dd($employee);    
    return response($employee,$id);
    
}

public function deleteEmployee(Request $request,$id)
{

    $employee=student::find($id);
    if(is_null($employee))
    {

        return response()->json(['message'=>"employee not found"]);
        
    }
    $employee->delete();
    return response()->json(null,204);
}
         }

