@extends('layouts.reception')

@section('sidebar')
    {{--<h6>Here Sidebar</h6>--}}
    {{--<div>--}}
        {{--<p>Date: {{$date}}</p>--}}
        {{--<p>Today: {{$today}}</p>--}}
        {{--<p>LastFriday: {{$lastFriday}}</p>--}}
    {{--</div>--}}
@endsection


@section('content')
    <h1 class="text-center">This is the main page of my app! </h1>
    <div id="my-calendar"></div>



@endsection

@section('script')
    <script>
        $(function() {
            var calendar = $('#my-calendar').fullCalendar('getCalendar');

            // calendar.fullCalendar({
            //     weekends: false, // will hide Saturdays and Sundays
            //     // dayClick: function() {
            //     //     alert('a day has been clicked!');
            //     // }
            //
            //
            // });
            calendar.fullCalendar({
                weekends: false, // will hide Saturdays and Sundays
                dayClick: function(date, jsEvent, view) {

                    alert('Clicked on: ' + date.format());

                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                    alert('Current view: ' + view.name);

                    // change the day's background color just for fun
                    $(this).css('background-color', 'red');

                }
            });
            //calendar.next();


        })
    </script>
@endsection