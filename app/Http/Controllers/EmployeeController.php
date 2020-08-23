<?php

namespace App\Http\Controllers;

use App\Category;
use App\Employee;
use App\Http\Requests\EmployeeRequest;
use App\Photo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Employees';
        $page_description = ' Employees';
        $categories = Category::all();
        $employees = Employee::where('status','!=',2)->get();

        return view('admin.employees.index', compact('page_description','page_title', 'categories', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'New Employee';
        $page_description = 'Enter employee details and submit';
        $categories = Category::all();
        $states = DB::table('states')->get();
        $lgas = DB::table('lgas')->get();

        return view('admin.employees.add', compact('page_title', 'page_description','categories', 'lgas', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
                'phone' => 'nullable|unique:employees'
            ]
        );
//
        if ($validator->fails())
        {
            $messages = $validator->errors();
            if ($messages->has('phone')) {
                $messages = $messages->first('phone');
                $notification = array(
                    'message' => $messages,
                    'alert-type' => 'error'
                );

                return redirect()->back()->with($notification);
            }

        }

        if ($file = $request->file('profile_avatar'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/employees', $name);

            $photo = Photo::create(['file'=>$name]);
            $photo_id = $photo->id;
        }

        $photo_id = !empty($photo_id) ? $photo_id : null;

         $firstname = $data['firstname'];
         $lastname = $data['lastname'];
         $category_id = $data['category_id'];
         $phone = $data['phone'];
         $email = $data['email'];
         $joined = $data['joined'];
         $payment_type = $data['payment_type'];
         $factor =!empty($data['factor']) ? $data['factor'] : 0;
         $salary =!empty($data['salary']) ? $data['salary'] : 0;
         $address = $data['address'];
        $state_id = $data['state_id'];
        $lga_id = $data['lga_id'];
        $name_kin = $data['name_kin'];
        $relation_kin = $data['relationship_kin'];
        $phone_kin = $data['phone_kin'];
        $address_kin = $data['address_kin'];

        Employee::create([
            'first_name'=>$firstname,
            'surname'=>$lastname,
            'category_id'=>$category_id,
            'phone'=>$phone,
            'email'=>$email,
            'joined'=>Carbon::parse($joined)->toFormattedDateString(),
            'payment_type'=>$payment_type,
            'factor'=>$factor,
            'salary'=>$salary,
            'address'=>$address,
            'state_id'=>$state_id,
            'lga_id'=>$lga_id,
            'next_of_king_name'=>$name_kin,
            'next_of_king_relationship'=>$relation_kin,
            'next_of_king_phone'=>$phone_kin,
            'next_of_king_address'=>$address_kin,
            'photo_id'=>$photo_id,
        ]);

        $notification = array(
            'message' => 'Employee Details Created!!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $page_title = 'New Employee';
        $page_description = $employee->first_name .' '. $employee->surname . "'s Page";
        $categories = Category::all();
        $states = DB::table('states')->get();
        $lgas = DB::table('lgas')->get();

        return view('admin.employees.edit', compact('page_title', 'page_description','categories', 'lgas', 'states', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $employee = Employee::findOrFail($id);
        $status =($data['status'] != null) ? $data['status'] : $employee->status ;

        //Reset factor and salaryy
        if ($data['payment_type'] == 'commission')
        {
            $data['salary'] = 0;
        }
        if ($data['payment_type'] == 'salary')
        {
            $data['factor'] = 0;
        }
        
        if ($file = $request->file('profile_avatar'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/employees', $name);

            $photo = Photo::create(['file'=>$name]);
            $photo_id = $photo->id;
        }
        $photo_id = !empty($photo_id) ? $photo_id : $employee->photo_id;
        $factor =!empty($data['factor']) ? $data['factor'] : 0;
        $salary =!empty($data['salary']) ? $data['salary'] : 0;

       Employee::findOrFail($id)->update([
            'first_name'=>$data['firstname'],
            'surname'=>$data['lastname'],
            'category_id'=>$data['category_id'],
            'phone'=>$data['phone'],
            'email'=>$data['email'],
            'joined'=>$data['joined'],
            'payment_type'=>$data['payment_type'],
            'factor'=>$factor,
            'salary'=>$salary,
            'status'=>$status,
            'address'=>$data['address'],
            'state_id'=>$data['state_id'],
            'lga_id'=>$data['lga_id'],
            'next_of_king_name'=>$data['name_kin'],
            'next_of_king_relationship'=>$data['relationship_kin'],
            'next_of_king_phone'=>$data['phone_kin'],
            'next_of_king_address'=>$data['address_kin'],
            'photo_id'=>$photo_id,
        ]);

        $notification = array(
            'message' => 'Employee data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect('/employees')->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd('Dee');
        Employee::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Employee Data Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect('/employees')->with($notification);

    }

    public function getLgas($id)
    {
        $lgas = DB::table("lgas")->where("state_id",$id)->pluck("name","id");
        return json_encode($lgas);
    }
}
