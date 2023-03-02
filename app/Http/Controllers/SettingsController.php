<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Settings;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $data['settings'] = Settings::find(1);
        return view('settings.index',$data);
    }
    public function branchIndex(){
        $data['branches'] = Branch::all();
        return view('settings.branches',$data);
    }
    public function branchEdit($id){
        $data['branch'] = Branch::find($id);
        return view('settings.edit_branch',$data);
    }

    public function branchUpdate(Request $request, $id){
        $data= Branch::find($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->update();
        Toastr::success('Branch has been updated sucessfully', 'Done');
        return redirect()->route('branches.index');   
    }

    public function store(Request $request){
        $exist = Settings::find(1);
        if($exist)
        {
            $exist->name = $request->name;
            $exist->address = $request->address;
            $exist->update();
            Toastr::success('Settings has been updated sucessfully', 'Done');
            return redirect()->back();
        }

        $new = new Settings();
        $new->name = $request->name;
        $new->address = $request->address;
        $new->save();
        Toastr::success('Settings has been Saved sucessfully', 'Done');
        return redirect()->back();   
     }

     public function branchStore(Request $request)
     {
        $data = new Branch();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->save();
        Toastr::success('Branch has been Saved sucessfully', 'Done');
        return redirect()->back();   
     }
}
