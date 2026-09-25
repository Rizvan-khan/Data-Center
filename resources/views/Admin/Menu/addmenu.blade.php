@extends('admin.adminlayout.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-10 mx-auto">

                <hr />
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0 text-white">Add Menu</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{route('admin.add-menu')}}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label class="control-label" for="text-field">Menu Name</label>
                                <input type="text" class="form-control" placeholder="Enter Menu" id="text-field" name="menu">
                            </div>

                            <div class="col-md-12">
                                <label class="control-label" for="text-field">Sub Menu Status</label>
                                <select class="form-control" name="sub_menu">
                                    <option value="2">--Choose Option--</option>
                                    <option value="1">--Yes--</option>
                                    <option value="0">--No--</option>
                                </select>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-light px-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->

@endsection