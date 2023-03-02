@extends('layouts.app')
@section('PageTitle', 'Branches')
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                <div class="card">
                    <!-- Default panel contents -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="col-4 "><span class="text-bold fs-16">Branches</span></div>
                        <div class="col-md-2 float-right"><button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target=".addModal">Add New</button></div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class=" table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($branches as $key => $branch)
                                        <tr>
                                            <td scope="row">{{ $key + 1 }}</td>
                                            <th>{{ $branch->name }}</th>
                                            <td>{{ $branch->address }}</td>
                                            <td>{{ $branch->phone }}</td>
                                          
                                            <td>
                                                <a class="btn btn-sm btn-primary mb-1"
                                                    href="{{ route('branches.edit', $branch->id) }}"> <i
                                                        class="fa fa-edit"></i></a>
                                              
                                            </td>
                                        </tr>
                                        
                                    @endforeach

                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <!-- Large Modal -->
    <div class="modal fade addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Branch</h4>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <form action="{{ route('branches.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                       
                        <div class="form-group">
                            <label for="name" class="col-form-label">Branch Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
