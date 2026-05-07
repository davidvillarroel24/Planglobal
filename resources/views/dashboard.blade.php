@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row">

    {{-- Docentes --}}
    <div class="col-lg-3 col-6">

        <div class="small-box bg-primary">

            <div class="inner">
                <h3>24</h3>
                <p>Docentes</p>
            </div>

            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>

            <a href="#" class="small-box-footer">
                Ver módulo
                <i class="fas fa-arrow-circle-right"></i>
            </a>

        </div>

    </div>

    {{-- Estudiantes --}}
    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">

            <div class="inner">
                <h3>320</h3>
                <p>Estudiantes</p>
            </div>

            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>

            <a href="#" class="small-box-footer">
                Ver módulo
                <i class="fas fa-arrow-circle-right"></i>
            </a>

        </div>

    </div>

    {{-- Cursos --}}
    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">

            <div class="inner">
                <h3>18</h3>
                <p>Cursos</p>
            </div>

            <div class="icon">
                <i class="fas fa-book"></i>
            </div>

            <a href="#" class="small-box-footer">
                Ver módulo
                <i class="fas fa-arrow-circle-right"></i>
            </a>

        </div>

    </div>

    {{-- Reportes --}}
    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">

            <div class="inner">
                <h3>12</h3>
                <p>Reportes</p>
            </div>

            <div class="icon">
                <i class="fas fa-chart-bar"></i>
            </div>

            <a href="#" class="small-box-footer">
                Ver módulo
                <i class="fas fa-arrow-circle-right"></i>
            </a>

        </div>

    </div>

</div>

@endsection