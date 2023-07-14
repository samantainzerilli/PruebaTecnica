<!-- resources/views/calendar.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="calendar"></div>
    </div>

    <!-- Ventana modal para agregar/editar eventos -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <!-- Contenido de la ventana modal -->
    </div>

    <script src="{{ asset('js/calendar.js') }}"></script>
@endsection
