@extends('layouts.app')
@section('content')
<style>
tr:hover {background-color: #D6EEEE;}
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="p-4 font-weight-bold text-secondary">
            @if ($statistic->title == Null)
                {{$user->name}}'s statistic created on {{$statistic->created_at->format('Y-m-d')}}.
            @else
                {{$statistic->title}}
            @endif
        </h2>
    </div>
    <div class="row justify-content-start" style="padding-left: 0.5cm">
        <div class="col-1">
            <p class="font-weight-bold">About:</p>
        </div>
        <div class="col">
            <p>
                @if ($statistic->about == Null)
                    There is no information about this statistic.
                @else
                    {{$statistic->about}}
                @endif
            </p>
        </div>
    </div>
    <div class="row justify-content-start" style="padding-left: 0.5cm">
        <div class="col-1">
            <p class="font-weight-bold">Owner:</p>
        </div>
        <div class="col-4">
            <p>
                {{$user->name}}
            </p>
        </div>
    </div>
    <div class="row justify-content-start" style="padding-left: 0.5cm">
        <div class="col-1">
            <p class="font-weight-bold">Created:</p>
        </div>
        <div class="col-4">
            <p>
                {{$statistic->created_at->format('Y-m-d')}}
            </p>
        </div>
    </div>
    <div class="row justify-content-start" style="padding-left: 0.5cm; padding-bottom: 0.5cm">
        @if ($user->id == Auth::user()->id)
        <div class="col-3">
            <a href="{{$statistic->id}}/edit" class="text-center font-weight-bold btn btn-outline-info mt-4">Edit Statistic</a>
        </div>
        <div class="col-3">
            {!!Form::open(['action'=>['StatisticsController@destroy',$statistic->id],'method'=>'POST','onsubmit'=>"return confirm('Are you sure you want to Delete This Statistic?');"])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete Post',['class'=>'text-center btn btn-outline-danger font-weight-bold mt-4', 'style'=>'box-shadow:  2px 2px 2px #CD5C5C'])}}
            {!!Form::close()!!}
        </div>    
        @else
            {!!Form::open(['action'=>'PredictionController@prediction','method'=>'GET','enctype'=>'multipart/formdata',])!!}
            {{Form::hidden('initiator',Auth::user()->id)}}
            {{Form::hidden('receiver',$user->id)}}
            {{Form::hidden('statistic',$statistic->id)}}
            {{Form::submit('Initiate Prediction',['class'=>'font-weight-bold btn btn-outline-success mb-5', 'style'=>'box-shadow: 2px 2px 2px #2E8B57'])}}
            {!!Form::close()!!}
        @endif
    </div>
    <div class="justify-content-center">
    <table class="table">
        <thead>
            <th scope="col">Feature:</th>
            <th scope="col">Value:</th>
            <th scope="col" id="explanation" display="none">Explanation:</th>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Reason:</th>
                <td> <?php echo ucfirst($statistic->reason);?> </td>
                <td id="explanation" display="none">
                    <p>The reason for choosing the school, the choices include:</p>
                    <ul>
                        <li>Course: Preference to the coures(s) offered.</li>
                        <li>Home: The location of the school is closer to you home.</li>
                        <li>Reputation: The reputation of the school is why this school was picked.</li>
                        <li>Other: Another reason led to picking this school.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row">Internet:</th>
                <td> <?php echo ucfirst($statistic->internet);?> </td>
                <td id="explanation" display="none">
                    <p>Does the school possess the facilities for supplying access to the internet: Yes or No ?</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Travel Time:</th>
                <td>
                    @if ($statistic->traveltime == 1)
                        <p>Less Than 15 minutes.</p>
                    @elseif ($statistic->traveltime == 2)
                        <p>Between 15 and 30 minutes</p>                
                    @elseif ($statistic->traveltime == 3)
                        <p>Between 30 mintes and 1 hour.</p>
                    @else
                        <p>More than 1 hour.</p>
                    @endif
                </td>
                <td id="explanation" display="none">
                    <p>The amount of time required to commute to the school.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Study Time:</th>
                <td>
                    @if ($statistic->studytime == 1)
                        <p>Less than 2 hours.</p>
                    @elseif ($statistic->studytime == 2)
                        <p>Between 2 and 5 hours.</p>
                    @elseif ($statistic->studytime == 3)
                        <p>Between 5 and 10 hours.</p>
                    @else
                        <p>More than 10 hours</p>
                    @endif
                </td>
                <td id="explanation" display="none">
                    <p>The amount of hours alloted to weekly study time.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Free Time:</th>
                <td>
                    @if ($statistic->freetime == 1)
                        <p>Very Low.</p>
                    @elseif ($statistic->freetime == 2)
                        <p>Low.</p>
                    @elseif ($statistic->freetime == 3)
                        <p>Medium.</p>
                    @elseif ($statistic->freetime == 4)
                       <p>High.</p>
                    @else
                        <p>Very High.</p>
                    @endif
                </td>
                <td id="explanation" display="none">
                    <p>How frequently do you get free time that isn't spent on assignments or school related tasks.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Failures:</th>
                <td> {{$statistic->failures}} </td>
                <td id="explanation" display="none">
                    <p>The number of past class failures.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Go out:</th>
                <td>
                    @if ($statistic->freetime == 1)
                        <p>Very Low.</p>
                    @elseif ($statistic->freetime == 2)
                        <p>Low.</p>
                    @elseif ($statistic->freetime == 3)
                        <p>Medium.</p>
                    @elseif ($statistic->freetime == 4)
                       <p>High.</p>
                    @else
                        <p>Very High.</p>
                    @endif
                </td>
                <td id="explanation" display="none">
                    <p>How frequently do you engage in activities outside of the school.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Absences:</th>
                <td> {{$statistic->absences}} </td>
                <td id="explanation" display="none">
                    <p>The total number of school absences, ranging from 0 to 93.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">health:</th>
                <td>
                    @if ($statistic->health == 1)
                        <p>Very Low.</p>
                    @elseif ($statistic->health == 2)
                        <p>Low.</p>
                    @elseif ($statistic->health == 3)
                        <p>Medium.</p>
                    @elseif ($statistic->health == 4)
                       <p>High.</p>
                    @else
                        <p>Very High.</p>
                    @endif
                </td>
                <td id="explanation" display="none">
                    <p>Your current health status, ranging from very poor to very good.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Grade 1:</th>
                <td> {{$statistic->G1}} </td>
                <td id="explanation" display="none">
                    <p>Start of Term exams average grade.
                        From 0 to 20.
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">Grade 2:</th>
                <td> {{$statistic->G2}} </td>
                <td id="explanation" display="none">
                    <p>Middle of Term exams average grade.
                        From 0 to 20.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
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