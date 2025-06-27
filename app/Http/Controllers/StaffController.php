<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Book;

class StaffController extends Controller
{   
    //dashboard
    public function index(){
        $books = Book::orderBy('id', 'asc')->paginate(10);
        return view('staff.dashboard', ['books' => $books]);
    }

    public function create_staff(){
        return view('admin.create-staff');
    }

    public function staff_list(){
        $staffs = Staff::orderBy('id', 'asc')->paginate(10);
        return view('admin.staff-list', ['staffs' => $staffs]);
    }

    public function store_staff(Request $request){
        
        try {
            $data = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:staff,email',
                'password' => 'required|string|min:8',
                'phone_number' => 'required|string|max:15|unique:staff,phone_number',
                'gender' => 'required|in:Female,Male,Other',
                'age' => 'required|integer|min:1',
                'position' => 'required|string|max:100',
            ]);

            $data['password'] = bcrypt($data['password']);
            
            Staff::create($data);

            return redirect()->route('admin.staff-list');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit_staff(Staff $staff){
        return view('admin.edit-staff', ['staff' => $staff]);
    }

    public function update_staff(Staff $staff, Request $request){
        try{
            $data = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                // 'email' => 'required|email|unique:staff,email',
                // 'phone_number' => 'required|string|max:15|unique:staff,phone_number',
                'gender' => 'required|in:Female,Male,Other',
                'age' => 'required|integer|min:1',
                'position' => 'required|string|max:100',
            ]);
            
            $staff->update($data);

            return redirect()->route('admin.staff-list')->with('success', 'Product Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function delete_staff(Staff $staff){
        $staff->delete();
        return redirect()->route('admin.staff-list')->with('success', 'Product Deleted Successfully');
    }
}
