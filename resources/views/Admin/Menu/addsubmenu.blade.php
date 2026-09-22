
@extends('Admin.AdminLayout.app')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-10 mx-auto">

                <hr/>
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body p-5">
                        
                        <!-- Success / Error Alert Messages -->
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

                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0 text-white">Add Sub Menu</h5>
                        </div>
                        <hr>

                        <!-- Form Action & CSRF Token -->
                        <form class="row g-3" action="{{ route('admin.add-submenu') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <label class="control-label mb-2" for="menu">Choose Main Menu</label>
                                <select class="form-control" name="menuslug" id="menuslug" required>
                                    <option value="">-- Choose Option --</option>
                                    
                                    {{-- Controller se aaya hua $menu loop kar rahe hain --}}
                                    @foreach($menu as $item)
                                        <option value="{{ $item->slug }}">{{ $item->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="control-label mb-2" for="submenu">Sub Menu Name</label>
                                <input type="text" class="form-control" id="submenu" placeholder="Enter Sub Menu Name" name="submenu" required>
                            </div>


                              <div class="col-md-12">
                                <label class="control-label mb-2" for="sub_menu">Sub Menu Description</label>
                                <input type="text" class="form-control" id="sub_menu" placeholder="Enter Sub Menu Name" name="description" required>
                            </div>

                            <div class="col-md-12">
                                <label class="control-label mb-2" for="image">Sub Menu Icon / Image</label>
                                <input type="file" class="form-control" id="image" name="image">
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