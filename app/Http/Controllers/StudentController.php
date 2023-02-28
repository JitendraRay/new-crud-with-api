<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index(Request $req) : View {
        $data['students'] = Student::paginate(20);  // latest() and orderby('id','DESc')-paginate(50);
        $data['StudentCount'] = Student::count();
        if ($req->search != "") {
            $search = $req->search;
            $data['students'] = Student::where("name","LIKE", "%$search%")->orWhere('contact', $search)->paginate(20);
            $data['StudentCount'] = $data['students']->count();
        }
        
        return view( 'home', $data );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() : View {
        return view( 'insert' );

    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) : RedirectResponse {
        $data = $request->validate( [
            'name' => 'required',
            'father_name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'city' => 'required',
            'pincode' => 'required',
        ] );
        Student::create( $data );
        return redirect()->route( 'student.index' );
    }

    /**
    * Display the specified resource.
    */

    public function show( Student $student ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Student $student ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, Student $student ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( Student $student ) : RedirectResponse {
        $student->delete();
        return redirect()->route( 'student.index' );
    }
}
