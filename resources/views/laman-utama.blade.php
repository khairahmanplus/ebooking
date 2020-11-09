@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.css">
@endsection

@section('content')
    <div class="container">
        <div id="calendar"></div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarElement = document.getElementById('calendar');
            
            var fullCalendar = new FullCalendar.Calendar(calendarElement, {
                initialView: 'dayGridMonth'
            });

            fullCalendar.render();
        });
    </script>
@endsection