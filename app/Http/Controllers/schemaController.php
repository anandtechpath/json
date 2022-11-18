<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmployeesModel;
use App\Models\EmployeesDptModel;
use App\Models\EmploeesLeaves;
use App\Models\EmpPerformance;
use App\Models\EmpprojectModel;
use App\Models\EmpRole;
use App\Models\EmpsallaryModel;
use App\Models\userRegisterModel;
use Illuminate\Support\Facades\Validator;

class schemaController extends Controller
{
    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:1|max:150',
            'email' => 'required|min:1|max:150|email',
            'password' => 'required|min:5'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            try
            {
                $user_register = new userRegisterModel();
                $user_register->name = $request->name; // in left side is column name and right side property name which i have defined in postman.
                $user_register->email = $request->email;
                $user_register->password = bcrypt($request->password);
                $user_register->save();
                return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
            }

            catch(\Exception $error)
            {
                return response(array("message"=>"Duplicate Entry"),409)->header("Content-Type","application/json");
            }
        }
    }

    public function employees_register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesName' => 'required|min:1|max:255', // in left side column name defined in inside database
            'EmployeesEmail' => 'required|min:1|max:255|email',
            'EmployeesPhone' => 'required|min:1|max:15',
            'EmployeesAddress' => 'required',
            'EmployeesMartialStatus' => 'required',
            'EmployeesDob' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
           try
            {
                $employees_register = new EmployeesModel(); // this is model class name
                $employees_register->EmployeesName = $request->EmployeesName; // in left side is column name in database and right side property name which i have defined in postman.
                $employees_register->EmployeesEmail = $request->EmployeesEmail;
                $employees_register->EmployeesPhone = $request->EmployeesPhone;
                $employees_register->EmployeesAddress = $request->EmployeesAddress;
                $employees_register->EmployeesMartialStatus = $request->EmployeesMartialStatus;
                $employees_register->EmployeesDob = $request->EmployeesDob;
                $employees_register->save();
                return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
            }

            catch(\Exception $e)
            {
                return response(array("message"=>"Duplicate Entry"),409)->header("Content-Type","application/json");
            }
        }
    }

    public function employees_dpt_insert(Request $request)
    {
        //print_r($request->all()['EmployeesDepartmentName']);
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesDepartmentName' => 'required|min:1|max:255', // in left side column name defined in inside database
            'EmployeesDepartmentDescription' => 'required|min:1',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);

            /*if(empty($request->all()['EmployeesDepartmentName']))
            {
                return response()->json([
                    'messages' => 'EmployeesDepartmentName is empty'
                ],500);
            }*/
        }

        else
        {

            $employees_dpt_insert = new EmployeesDptModel(); // this is model class name
            $employees_dpt_insert->EmployeesDepartmentName = $request->EmployeesDepartmentName; // in left side is column name in database and right side property name which i have defined in postman.
            $employees_dpt_insert->EmployeesId = $request->EmployeesId;
            $employees_dpt_insert->EmployeesDepartmentDescription = $request->EmployeesDepartmentDescription;
            $employees_dpt_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    public function employees_leaves_insert(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesLeavesDate' => 'required|date', // in left side column name defined in inside database
            'EmployeesLeavesReason' => 'required|min:1',
            'EmployeesLeavesAccept' => 'required|min:1'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            $employees_leaves_insert = new EmploeesLeaves(); // this is model class name
            $employees_leaves_insert->EmployeesId = $request->EmployeesId;
            $employees_leaves_insert->EmployeesLeavesDate = $request->EmployeesLeavesDate; // in left side is column name in database and right side property name which i have defined in postman.
            $employees_leaves_insert->EmployeesLeavesReason = $request->EmployeesLeavesReason;
            $employees_leaves_insert->EmployeesLeavesAccept = $request->EmployeesLeavesAccept;
            $employees_leaves_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    public function employees_performance_insert(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesPerformanceScore' => 'required', // in left side column name defined in inside database
            'EmployeesPerformanceAccuracyScore' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            $employees_perf_insert = new EmpPerformance(); // this is model class name
            $employees_perf_insert->EmployeesId = $request->EmployeesId;
            $employees_perf_insert->EmployeesPerformanceScore = $request->EmployeesPerformanceScore; // in left side is column name in database and right side property name which i have defined in postman.
            $employees_perf_insert->EmployeesPerformanceAccuracyScore = $request->EmployeesPerformanceAccuracyScore;
            $employees_perf_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    public function employees_project_insert(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesProjectsName' => 'required', // in left side column name defined in inside database
            'EmployeesProjectsDescription' => 'required',
            'EmployeesProjectsLocation' => 'required',
            'EmployeesProjectsDuration' => 'required',
            'EmployeesProjectsBudget' => 'required',
            'EmployeesProjectsIsCompleted' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            $employees_project_insert = new EmpprojectModel(); // this is model class name
            $employees_project_insert->EmployeesId = $request->EmployeesId;
            $employees_project_insert->EmployeesProjectsName = $request->EmployeesProjectsDescription;
            $employees_project_insert->EmployeesProjectsDescription = $request->EmployeesProjectsDescription;
            $employees_project_insert->EmployeesProjectsLocation = $request->EmployeesProjectsLocation;
            $employees_project_insert->EmployeesProjectsDuration = $request->EmployeesProjectsDuration;
            $employees_project_insert->EmployeesProjectsBudget = $request->EmployeesProjectsBudget;
            $employees_project_insert->EmployeesProjectsIsCompleted	 = $request->EmployeesProjectsIsCompleted;
            $employees_project_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    public function employees_role_insert(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesRoleName' => 'required', // in left side column name defined in inside database
            'EmployeesRoleDescription' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            $employees_role_insert = new EmpRole(); // this is model class name
            $employees_role_insert->EmployeesId = $request->EmployeesId;
            $employees_role_insert->EmployeesRoleName = $request->EmployeesRoleName;
            $employees_role_insert->EmployeesRoleDescription = $request->EmployeesRoleDescription;
            $employees_role_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    public function employees_sallary_insert(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'EmployeesId' => 'required|min:1|max:10',
            'EmployeesSallaryMonthName' => 'required', // in left side column name defined in inside database
            'EmployeesSallaryStipend' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'messages' => 'All input field are required'
            ],500);
        }

        else
        {
            $employees_sallary_insert = new EmpsallaryModel(); // this is model class name
            $employees_sallary_insert->EmployeesId = $request->EmployeesId;
            $employees_sallary_insert->EmployeesSallaryMonthName = $request->EmployeesSallaryStipend;
            $employees_sallary_insert->EmployeesSallaryStipend = $request->EmployeesSallaryStipend;
            $employees_sallary_insert->save();
            return response(array("message"=>"Success !"),200)->header("Content-Type","application/json");
        }
    }

    // get data by api

    function get_employee()
    {
        $employees_register = new EmployeesModel();
        $fetch_data = $employees_register::all();
        $all_data = array();
        foreach($fetch_data as $data)
        {
            $id = $data->id;
            $name = $data->EmployeesName;
            $email = $data->EmployeesEmail;
            $phone = $data->EmployeesEmail;
            $address = $data->EmployeesEmail;
            $marital_status = $data->EmployeesMartialStatus;
            $dob = $data->EmployeesDob;
            $plot = array("id" => $id, "name" =>$name,"email" => $email, "phone" => $phone, "address" => $address, "marital_status" => $marital_status);
            array_push($all_data,[$plot]);
        }

        //print_r($all_data);
        return response()->json($all_data, 200);
    }
    function get_employee_dpt()
    {
        $employees_register = new EmployeesDptModel();
        $fetch_data = $employees_register::all();
        $all_data = array();
        foreach($fetch_data as $data)
        {
            $id = $data->EmployeesDepartmentId;
            $employee_id = $data->EmployeesId;
            $department_name = $data->EmployeesDepartmentName;
            $description = $data->EmployeesDepartmentDescription;
            $plot = array("id" => $id, "employee_id" =>$employee_id,"department_name" => $department_name, "description" => $description);
            array_push($all_data,[$plot]);
        }
        return response($all_data,200)->header("Content-Type","application/json");
    }

    function get_employee_leaves()
    {
        $employees_register = new EmploeesLeaves();
        $fetch_data = $employees_register::all();
        return response($fetch_data,200)->header("Content-Type","application/json");
    }

    function get_employee_perf()
    {
        $employees_register = new EmpPerformance();
        $fetch_data = $employees_register::all();
        return response($fetch_data,200)->header("Content-Type","application/json");
    }

    function get_employee_project()
    {
        $employees_register = new EmpprojectModel();
        $fetch_data = $employees_register::all();
        return response($fetch_data,200)->header("Content-Type","application/json");
    }
    function get_employee_role()
    {
        $employees_register = new EmpRole();
        $fetch_data = $employees_register::all();
        return response($fetch_data,200)->header("Content-Type","application/json");
    }
    function get_employee_sallary()
    {
        $employees_register = new EmpsallaryModel();
        $fetch_data = $employees_register::all();
        return response($fetch_data,200)->header("Content-Type","application/json");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(!$token = auth()->attempt(["email" => $request->email, "password" => $request->password]))
        {
            return response(array("message"=>"Invalid credential"),401)->header("Content-Type","application/json");
        }

        return response(array("message"=>"Logged in successfully","access_token" => $token),200)->header("Content-Type","application/json");
    }

    public function logout()
    {
        auth()->logout();
        return response()->json([
            "status" => 1,
            "message" => "User logged out"
        ]);
    }
}
