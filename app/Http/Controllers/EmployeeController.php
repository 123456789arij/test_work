<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =  Employee::oldest('nom')->paginate(1);

        return view('Entreprise.Employeer.index', compact('employees'));

       /* $employees = Employee::Count();
        return view('users', compact('employees'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create()
    {
        return view('Entreprise.Employeer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $request = Hash::make('password');
        $request->validate([
            'nom' =>'required',
            'email' =>'required',
            'password' => 'required', 'string', 'min:6',
             'sex' =>'required',
        ]);


        Employee::create($request-> all());
        return redirect()->route('index')->with('success', '  Employee is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('Entreprise.Employeer.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Employee $employee )
    {
       // $hashed = Hash::make('password');
        $request->validate([
            'nom' =>'required',
            'email' =>'required',
            'password' => 'required', 'string', 'min:6',
            'sex' =>'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('index')->with('success', 'produit is successfully updated');
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
        return redirect()->route('index')->with('success', 'produit is successfully deleted');
    }



    public function nombre()
    {

        $employees = Employee::count();
        /*  'comments' => Comment::count(),
          'events' => Event::count(),*/
        return view('users', compact('employees'));
    }



   /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'sex' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        return Employee::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sex' =>   $data['sex'],
        ]);
    }*/




}
