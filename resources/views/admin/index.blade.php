@extends('layouts.admin')
@section('title', 'Dashboard')
@section('admin_content')


<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        {{ Breadcrumbs::render() }}
    </nav>
</div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

            <!-- Reports -->
            <div class="col-12">
                <div class="card">


                </div>
            </div><!-- End Reports -->
            </div>
        </div><!-- End Right side columns -->

        </div>
    </section>



@endsection