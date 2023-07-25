@extends('nave')
@section('content')
<h1 class='text-center'>Student Count</h1>
        <div class="container home-stats text-center">
            <div class="row">
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-firstyear">
                        First Year
                        <span><a href="{{route('view_students', ['id' => 'one'])}}">{{$first}}</a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-secondyear">
                        Secnod Year
                        <span><a href="{{ route('view_students', ['id' => 'tow']) }}">{{$second}}</a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-thirdyear">
                        Third Year
                        <span><a href="{{ route('view_students', ['id' => 'three']) }}">{{$third}}</a></span>
                    </div>
                </div>
            </div>
        </div>
        @stop