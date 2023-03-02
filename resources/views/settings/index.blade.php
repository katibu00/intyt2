@extends('layouts.app')
@section('PageTitle', 'Settings')

@section('content')

    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-header ">
                                <h5>Settings</h5>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('settings.store') }}" method="post">
                                    @csrf
                                    <div class="row row-xs">
                                        <div class="col-md-6">
                                            <label>Business Name</label>
                                           <input type="text" class="form-control" name="name" value="{{ @$settings->name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ @$settings->address }}">
                                        </div>
                                       

                                        <div class="col-md-2 mt-4">
                                            <button class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
            </div>
        </div>
    </section>
        <!-- ============ Body content End ============= -->
    @endsection
   