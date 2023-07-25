<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateStudentn;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view_data()
    {
        $first=Students::where('year','=','one')->count();
        $second=Students::where('year','=','tow')->count();
        $third=Students::where('year','=','three')->count();
        
        return view('dashboard',compact('first','second','third'));
    } 
    public function view_students($id)
    {
        if($id==='one'||$id==='tow'||$id==='three')
        {
            $students=Students::where('year','=',$id)->get();
            return view('year',compact('id','students'));
        }
        return redirect()->route('view_data');
       
    }
    public function new_student($id)
    {
        return view('newstudent',compact('id'));
    }
    /**
     * Summary of add_student
     * @param \App\Http\Requests\ValidateStudentn $request
     * @return void
     */
    public function add_student(ValidateStudentn $request)
    {
        $attend=[$request->firstdegree,$request->seconddegree,$request->thirddegree,$request->fourthdegree,$request->fifthdegree,$request->sithdegree,$request->seventhdegree];
        $attend=implode(',',$attend);
        $timestamp = time();
        $time= date('Y-m-d', $timestamp);
        Students::create(
            ['s_name'=>$request->name,'s_number'=>$request->studentnumber,'p_number'=>$request->parentnumber,'attend'=>$attend,'year'=>$request->id,'time'=>$time]
        );
        return redirect()->route('view_data');
    }
    public function edit_student($id)
{
    $num=$id;
    $data = Students::where('s_number',"$id")->first();

    
    return view('edit',compact('data'));
}
public function update_student(Request $request, $s_number)
{
    $data = Students::where('s_number', $s_number)->first();
    $primaryKeyValues = [
        's_name' => $data->s_name,
        's_number' => $s_number,
    ];
    if (!$data) {
        $first = Students::where('year', '=', 'one')->count();
        $second = Students::where('year', '=', 'tow')->count();
        $third = Students::where('year', '=', 'three')->count();
        
        return view('dashboard', compact('first', 'second', 'third'));
    }
    
    $attend = [
        $request->firstdegree,
        $request->seconddegree,
        $request->thirddegree,
        $request->fourthdegree,
        $request->fifthdegree,
        $request->sithdegree,
        $request->seventhdegree
    ];

    $sattend = implode(',', $attend);
    $timestamp = time();
    $time = date('Y-m-d', $timestamp);
/*
    $data->update([
        's_name' => $request->name,
        's_number' => $request->studentnumber,
        'p_number' => $request->parentnumber,
        'attend' => $sattend,
        'time' => $time
    ]);*/
    Students::where($primaryKeyValues)->update([
        's_name' => $request->name,
        's_number' => $request->studentnumber,
        'p_number' => $request->parentnumber,
        'attend' => $sattend,
        'time' => $time
        
        // Add other attributes to update
    ]);
    //return $request->parentnumber;
    return redirect()->route('view_data');
}
public function delete_student($s_number)
{
    $data = Students::where('s_number', $s_number)->first();
    if (!$data) {
        $first = Students::where('year', '=', 'one')->count();
        $second = Students::where('year', '=', 'tow')->count();
        $third = Students::where('year', '=', 'three')->count();
        
        return view('dashboard', compact('first', 'second', 'third'));
    }
    $primaryKeyValues = [
        's_name' => $data->s_name,
        's_number' => $s_number,
    ];
    Students::where($primaryKeyValues)->delete();
    return redirect()->route('view_data');
}
}