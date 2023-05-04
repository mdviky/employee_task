<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Http;
use App\Mail\HelloEmail;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        $check_exists = Employee::exists();
        //dd($employees);
        return view('employee.index', compact(['employees', 'check_exists']))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create',['test'=>'anshuman']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'email' => 'required'
        ]);
        Employee::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'gender' => $request->gender,
            'age' => $request->age,
            'mobile' => $request->mobile
        ]);
        //$new_email_key = md5(rand().microtime());

        $reveiverEmailAddress = $request->email;
        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the 
         * receiver email address.
         * 
         * Also, call the send() method to incloude the
         * HelloEmail class that contains the email template.
         */
        Mail::to($reveiverEmailAddress)->send(new HelloEmail);

        /**
         * Check if the email has been sent successfully, or not.
         * Return the appropriate message.
         */
        if (Mail::failures() != 0) {
            //return "Email has been sent successfully.";
            //return back()->with(['email' => $reveiverEmailAddress, 'message' => 'Email has been sent successfully.']);
            return redirect()->route('employees.index')->with('message','Email has been sent successfully.');
        }
        return "Oops! There was some error sending the email.";
    }

    public function email_verify(Request $request)
    {
        if($request->has('m')) {
            //echo $request->input('m');
            echo $request->input('key');
        }
        //dd($request);
        Employee::where('email', $request->input('m'))->update(['verify_email' => 1]);
        return redirect()->route('employees.index')->with('message', 'Mobile verified');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //dd($request);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required'
        ]);
        //dd($request->all());
        //exit;
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')
            ->with('success', 'Deleted successfully');
    }
}
