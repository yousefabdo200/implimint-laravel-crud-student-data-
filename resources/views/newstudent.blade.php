@extends('nave')
@section('content')
        <h1 class="text-center">Add Student</h1>
        <div class="container">
            <form class="form-horizontal" action="{{route('add_student')}}" method="post">
                
                    @csrf
                <!-- Name Field -->
                <input name="id" value="{{$id}}" hidden>
                <div class="form-group">
                    <label>Name</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="name" class="form-control form-control-lg" autocomplete="off" placeholder="Student Name"  />
                    </div>
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <!-- Student Number Field -->
                <div class="form-group">
                    <label>Student Number</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="studentnumber" class="form-control form-control-lg" autocomplete="off" placeholder="Student Number" />
                    </div>
                    @error('studentnumber')
                        {{$message}}
                    @enderror
                </div>  

                <!-- Parrent Number Field -->
                <div class="form-group">
                    <label>Parrent Number</label>
                    <div class="col-sm-10 col-md-6 password">
                        <input type="text" name="parentnumber" class="form-control form-control-lg" autocomplete="off" placeholder="Parrent Number" />
                    </div>
                    @error('parentnumber')
                        {{$message}}
                    @enderror
                </div>  

                <!-- 1st Degree Field -->
                <div class="form-group">
                    <label>1st Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="firstdegree" class="form-control form-control-lg" autocomplete="off" placeholder="1st Exam"/>
                    </div>
                    @error('firstdegree')
                        {{$message}}
                    @enderror
                </div>  

                <!-- 2nd Degree Field -->
                <div class="form-group">
                    <label>2nd Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="seconddegree" class="form-control form-control-lg" autocomplete="off" placeholder="2nd Exam"/>
                    </div>
                    @error('seconddegree')
                        {{$message}}
                    @enderror
                </div>  
                <!-- 3rd Degree Field -->
                <div class="form-group">
                    <label>3rd Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="thirddegree" class="form-control form-control-lg" autocomplete="off" placeholder="3rd Exam"/>
                    </div>
                    @error('thirddegree')
                        {{$message}}
                    @enderror
                </div>  
                <!-- 4th Degree Field -->
                <div class="form-group">
                    <label>4th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fourthdegree" class="form-control form-control-lg" autocomplete="off" placeholder="4th Exam"/>
                    </div>
                    @error('fourthdegree')
                        {{$message}}
                    @enderror
                </div>  
                <!-- 5th Degree Field -->
                <div class="form-group">
                    <label>5th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fifthdegree" class="form-control form-control-lg" autocomplete="off" placeholder="5th Exam"/>
                    </div>
                    @error('fifthdegree')
                        {{$message}}
                    @enderror
                </div>  

                <!-- 6th Degree Field -->
                <div class="form-group">
                    <label>6th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="sithdegree" class="form-control form-control-lg" autocomplete="off" placeholder="6th Exam"/>
                    </div>
                    @error('sithdegree')
                        {{$message}}
                    @enderror
                </div>  
                <!-- 7th Degree Field -->
                <div class="form-group">
                    <label>7th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="seventhdegree" class="form-control form-control-lg" autocomplete="off" placeholder="7th Exam"/>
                    </div>
                    @error('seventhdegree')
                        {{$message}}
                    @enderror
                </div>

                <!-- Submit Field -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Add New Student" class="btn btn-primary btn-lg" />
                    </div>
                </div>  
            </form>
        </div>
       @stop