@extends('nave')
@section('content')
<h1 class='text-center'>Student Info</h1>
        <div class="container">
            <div class="table-responsive">
                
                <table class="table table-bordered text-center main-table">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Student Number</td>
                            <td>Parrent Number</td>
                            <td>SignIn Date</td>
                            <td>1st Day</td>
                            <td>2nd Day</td>
                            <td>3rd Day</td>
                            <td>4th Day</td>
                            <td>5th Day</td>
                            <td>6th Day</td>
                            <td>7th Day</td>
                            <td>Control</td>
                        </tr>
                    </thead>
                    <tbody>
                   
                    @foreach($students as $student)
                        
                        <tr>
                            <td>{{$student->s_name}}</td>
                            <td>{{$student->s_number}}</td>
                            <td>{{$student->p_number}}</td>
                            <td>{{$student->time}}</td>
                            <?php
                            $arr=explode(',',$student->attend);
                            ?>
                            <td>{{$arr[0]}}</td>
                            <td>{{$arr[1]}}</td>
                            <td>{{$arr[2]}}</td>
                            <td>{{$arr[3]}}</td>
                            <td>{{$arr[4]}}</td>
                            <td>{{$arr[5]}}</td>
                            <td>{{$arr[6]}}</td>
                            <td>
                                <a href='{{route("edit",["id"=>$student->s_number])}}' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                <a href='{{route("delete",["id"=>$student->s_number])}}' class='btn btn-danger confirm'><i class='fa fa-times'></i> Delete</a>
                            </td>
                        </tr>
                       
                        @endforeach
                      
                       
                    </tbody>

                </table>
            </div>
            <a href='{{route("new_student","$id")}}' class="btn btn-primary">New Student</a>
        </div>
        @stop