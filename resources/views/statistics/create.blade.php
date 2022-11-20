@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="p-4 font-weight-bold text-secondary">Create Statistic 
                <button class="btn btn-outline-secondary" onclick="toggleExplanation();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>
                </button>
            </h2>
        </div>
        @include('inc.messages')
        <div class="row justify-content-center">
            {!!Form::open(['action'=>'StatisticsController@store', 'method'=>'POST','enctype'=>'multipart/formdata','onsubmit'=>"return confirm('Do you really want to submit the form?');"])!!}
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('reason','Reason')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style = "display:none">
                        <p>The reason for choosing the school, the choices include:</p>
                        <ul>
                            <li>Course: Prefernce to the coures(s) offered.</li>
                            <li>Home: The location of the school is closer to you home.</li>
                            <li>Reputation: The reputation of the school is why this school was picked.</li>
                            <li>Other: Another reason led to picking this school.</li>
                        </ul>
                    </div>
                </div>
                 {{Form::select('reason',[
                    'course'=>'Course',
                    'home'=>'Home',
                    'reputation'=>'Reputation',
                    'other'=>'Other',
                 ],'course',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('internet','Internet')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                        <p>Does the school possess the facilities for supplying access to the internet: Yes or No ?</p>
                    </div>
                </div>
                 {{Form::select('internet',[
                    'yes'=>'Yes',
                    'no'=>'No',
                 ],'no',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('traveltime','Travel Time')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>The amount of time required to commute to the school.</p>
                    </div>
                </div>
                 {{Form::select('traveltime',[
                    '1'=>'Less than 15 minutes',
                    '2'=>'Between 15 and 30 minutes',
                    '3'=>'Between 30 minutes and 1 hour',
                    '4'=>'More than 1 hour',
                 ],'1',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('studytime','Study Time')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>The amount of hours alloted to weekly study time.</p>
                    </div>
                </div>
                 {{Form::select('studytime',[
                    '1'=>'Less than 2 hours',
                    '2'=>'Between 2 and 5 hours',
                    '3'=>'Between 5 and 10 hours',
                    '4'=>'More than 10 hours',
                 ],'1',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('failures','Failures')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>The number of past class failures.</p>
                    </div>
                </div>
                 {{Form::select('failures',[
                    '0'=>'Zero Failures',
                    '1'=>'One Failure',
                    '2'=>'Two Failures',
                    '3'=>'Three Failures',
                    '4'=>'Four or more Failures',
                 ],'0',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('freetime','Freetime')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>How frequently do you get free time that isn't spent on assignments or school related tasks.</p>
                    </div>
                </div>
                 {{Form::select('freetime',[
                    '1'=>'Very Low',
                    '2'=>'Low',
                    '3'=>'Medium',
                    '4'=>'High',
                    '5'=>'Very High',
                 ],'1',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('goout','Go Out:')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>How frequently do you engage in activities outside of the school.</p>
                    </div>
                </div>
                 {{Form::select('goout',[
                    '1'=>'Very Low',
                    '2'=>'Low',
                    '3'=>'Medium',
                    '4'=>'High',
                    '5'=>'Very High',
                 ],'1',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('health','Health')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>Your current health status, ranging fromm very poor to very good.</p>
                    </div>
                </div>
                 {{Form::select('health',[
                    '1'=>'Very Poor',
                    '2'=>'Poor',
                    '3'=>'Normal',
                    '4'=>'Good',
                    '5'=>'Very Good',
                 ],'1',['class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('absences','Absences')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>The total number of school absences, ranging from 0 to 93.</p>
                    </div>
                </div>
                 {{Form::number('absences','0',['min'=>'0','max'=>'93','class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('G1','Grade 1')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>Start of Term exams average grade.
                        From 0 to 20.
                      </p>
                    </div>
                </div>
                 {{Form::number('G1','0',['min'=>'0','max'=>'20','class'=>'form-control'])}}
            </div>
            <div class="form-group-row ">
                <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                    {{Form::label('G2','Grade 2')}}
                </div>
                <div class="row justify-content-center">
                    <div id="explanation" style="display: none">
                      <p>Middle of Term exams average grade.
                        From 0 to 20.
                      </p>
                    </div>
                </div>
                 {{Form::number('G2','0',['min'=>'0','max'=>'20','class'=>'form-control'])}}
            </div>
            <div class="row justify-content-center text-secondary font-weight-bold p-3 h4">
                {{Form::hidden('user_id')}}
                <br>
                {{Form::submit('Submit',['class'=>'btn btn-outline-success font-weight-bold mb-5', 'style'=>'width: 30%; box-shadow: 2px 2px 2px #2E8B57'])}}
            </div>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
        function toggleExplanation () {
            var element, index;
            var x = document.querySelectorAll("div#explanation");
            elements = x.length ? x : [x];
            for (index = 0; index < elements.length; index++) {
                element = elements[index];

                if (isElementHidden(element)) {
                element.style.display = 'block';

                /*  // If the element is still hidden after removing the inline display
                    if (isElementHidden(element)) {
                        element.style.display = specifiedDisplay || 'block';
                    } */
                } else {
                element.style.display = 'none';
                }
            }
            function isElementHidden (element) {
                return window.getComputedStyle(element, null).getPropertyValue('display') === 'none';
            }
        }
    </script>
@endsection
