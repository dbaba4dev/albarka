<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Fuel;
use App\Setting;
use App\Station;
use App\Ticket;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Keygen\Keygen;
use PDF;
use Psy\Util\Str;

class SettingController extends Controller
{
    public function settings()
    {
        $setting = Setting::findOrFail(1);
        $page_title = 'Settings';
        $page_description = 'Update Site settings, Fuels system, Filling and more ...';
        return view('settings', compact('setting','page_description','page_title'));
    }

    public function updateSettings(Request $request)
    {

    }

    public function stations()
    {
        $fuels = Fuel::all();
        $stations = Station::all();
        $page_title = 'Filling Stations';
        $page_description = 'Add Fuels system, Filling stations and more ...';
        return view('admin.stations.stations', compact('stations','fuels', 'page_title', 'page_description'));
    }

    public function newStation(Request $request){
        $data = $request->all();
        $name = strtoupper($data['name']);
        $station_count = Fuel::where('name',$name)->count();

        //check if the is not empty
        if (empty($data['name']))
        {
            $notification = array(
                'message' => 'Please enter filling station name in the name field',
                'alert-type' => 'info'
            );

            return redirect()->route('stations')->with($notification);
        }

        //Check if this name exist
        if ($station_count>0)
        {
            $notification = array(
                'message' => 'This Filling station has already been registered',
                'alert-type' => 'error'
            );

            return redirect()->route('stations')->with($notification);
        }

        $fuel =!empty( Fuel::findOrFail($data['fuel_id'])->name) ? Fuel::findOrFail($data['fuel_id'])->name : '';

        Station::create(['name'=>$name, 'address'=>$data['address'], 'fuel'=>$fuel, 'price'=>number_format($data['price'], 2)]);

        $notification = array(
            'message' => 'Filling Station has been registered successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('stations')->with($notification);

    }

    public function stationsEdit(Request $request)
    {
        $data = $request->all();
        if ($data['action']=='edit'){
            Station::findOrFail($data['id'])->update(['name'=>$data['name'], 'address'=>$data['address'], 'fuel'=>$data['fuel'],'price'=>$data['price']]);

            $notification = array(
                'message' => 'Data updated successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('stations')->with($notification);
        }

        if ($data['action']=='delete'){
            Station::findOrFail($data['id'])->delete();

            $notification = array(
                'message' => 'Data successfully deleted!',
                'alert-type' => 'success'
            );

            return redirect()->route('stations')->with($notification);
        }



    }

    public function newFuel(Request $request)
    {
        $data = $request->all();
        $name = strtoupper($data['name']);
        $fuel_count = Fuel::where('name',$name)->count();

        //check if the is not empty
        if (empty($data['name']))
        {
            $notification = array(
                'message' => 'Please enter fuel name in the name field',
                'alert-type' => 'info'
            );

            return redirect()->route('stations')->with($notification);
        }

        //Check if this name exist
        if ($fuel_count>0)
        {
            $notification = array(
                'message' => 'This fuel already exist!',
                'alert-type' => 'error'
            );

            return redirect()->route('stations')->with($notification);
        }

        Fuel::create(['name'=>$name]);

        $notification = array(
            'message' => 'Fuel name Added!',
            'alert-type' => 'success'
        );

        return redirect()->route('stations')->with($notification);
    }

    public function deleteFuel($id)
    {
        $fuel = Fuel::findOrFail($id);
        if (!empty($fuel))
        {
            $fuel->delete();
            $notification = array(
                'message' => 'Fuel Deleted',
                'alert-type' => 'success'
            );

            return redirect()->route('stations')->with($notification);
        }
    }

    public function ticket()
    {
        $page_title = 'Tickets';
        $page_description = 'Add, Manage and Tickets collection';

        $employees = Employee::where('status',1)->get();
        $fuels = Fuel::all();
        $stations= Station::all();
        $tickets = Ticket::all();
        return view('admin.tickets.index', compact('page_description','page_title','employees','fuels','stations','tickets'));
    }

    public function storeTicket(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $plate_no = strtoupper($data['plate_no']);

        $store = $data['store'];
        $user_id = auth()->user()->id;
        $unit_price = Station::findOrFail($data['station_id'])->price;

        //generate Random number
        $today = Carbon::parse(now())->format('Y-m-d h');
        $str1 = substr($today, 0,10);
        $str2 = substr($today, 11,13);
        $str3 = Keygen::numeric(8)->generate();
        $serial_no = $str1 . $str2 .$str3;

        Ticket::create(['employee_id'=>$data['employee_id'], 'serial'=>$serial_no, 'plate_no'=>$plate_no, 'store'=>$store,
            'station_id'=>$data['station_id'],'fuel_id'=>$data['fuel_id'], 'user_id'=>$user_id, 'unit_price'=>$unit_price]);

        $notification = array(
            'message' => 'Ticket generated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function updateTicket(Request $request)
    {
        $data = $request->all();
//        dd($data);
        if ($data['action']=='edit'){
            Ticket::findOrFail($data['id'])->update(['sales_assist'=>$data['sales_assist'], 'qty'=>$data['qty'], 'unit_price'=>$data['unit_price'], 'status'=>1]);

            $notification = array(
                'message' => 'Data updated successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('stations')->with($notification);
        }

        if ($data['action']=='delete'){
            Ticket::findOrFail($data['id'])->delete();

            $notification = array(
                'message' => 'Data successfully deleted!',
                'alert-type' => 'success'
            );

            return redirect()->route('stations')->with($notification);
        }



    }

    public function viewTicket($id)
    {
        $PDFReport = Ticket::findOrFail($id);
        $employees = Employee::findOrFail($PDFReport->employee_id);
        $employee = $employees->first_name .' '. $employees->surname;
        $user =User::findOrFail($PDFReport->user_id);
        $user= $user->admin->employee->first_name .' '. $user->admin->employee->surname;
        $fuels= Fuel::findOrFail($PDFReport->fuel_id)->name;
        $station = Station::findOrFail($PDFReport->station_id)->name;
        $pdf = PDF::loadView('admin.tickets.pdfview', ['PDFReport' => $PDFReport, 'employee' => $employee, 'fuels' => $fuels,
            'user' => $user, 'station' => $station])->setPaper('a5', 'portrait');
        $pdf->setOptions([
            "isPhpEnabled" => true,
            'footer-center' => 'Page [page] of [toPage]',
            'footer-right' => '[date]',
            'footer-line' => true,
            'footer-left' => 'cfresh.org',
            'footer-font-size' => 8,
            'enable-javascript' => true,
            'javascript-delay' => 5000,
            'enable-smart-shrinking' => true,
            'no-stop-slow-scripts' => true,
            'margin-top' => 10,
        ]);
        return $pdf->stream('ticket.pdf');
    }
}
