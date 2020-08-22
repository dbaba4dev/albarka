<?php

namespace App\Http\Controllers;

use App\Category;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

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
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function getLgas($id)
    {
        $lgas = DB::table("lgas")->where("state_id",$id)->pluck("name","id");
        return json_encode($lgas);
    }
}
