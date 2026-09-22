@extends('Admin.AdminLayout.app')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home Setting</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <hr/>
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-brightness me-1 font-22 text-white"></i></div>
                            <h5 class="mb-0 text-white">Home Setting</h5>
                        </div>
                        <hr> 

                        <!-- Success Alert -->
                        @if(session('success'))
                            <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                                <div class="text-white">{{ session('success') }}</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Error Alert -->
                        @if(session('error'))
                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                                <div class="text-white">{{ session('error') }}</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form class="row g-3" action="{{ route('admin.home-setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title', $setting->title ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email', $setting->email ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Contact</label>
                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile', $setting->mobile ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp', $setting->whatsapp ?? '') }}">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" placeholder="Enter your Address" name="address" rows="4">{{ old('address', $setting->address ?? '') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Keyword</label>
                                <textarea class="form-control" name="keywords" rows="4">{{ old('keywords', $setting->keywords ?? '') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $setting->description ?? '') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Update Map</label>
                                <textarea class="form-control" name="map" rows="7">{{ old('map', $setting->map ?? '') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook" value="{{ old('facebook', $setting->facebook ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter" value="{{ old('twitter', $setting->twitter ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="{{ old('instagram', $setting->instagram ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" value="{{ old('city', $setting->city ?? '') }}">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state" value="{{ old('state', $setting->state ?? '') }}">
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Zip</label>
                                <input type="text" class="form-control" name="pincode" value="{{ old('pincode', $setting->pincode ?? '') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" value="{{ old('country', $setting->country ?? '') }}">
                            </div>

                            <!-- Image File Inputs -->
                            <div class="col-md-6">
                                <label class="form-label">Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Favicon</label>
                                <input type="file" name="favicon" class="form-control">
                            </div>

                            <!-- Image Previews -->
                            <div class="col-md-6">
                                <label class="form-label d-block">Current Logo</label>
                                @if(!empty($setting->logo) && file_exists(public_path('upload/logo/' . $setting->logo)))
                                    <img src="{{ asset('upload/logo/' . $setting->logo) }}" alt="logo" height="80px" class="border rounded p-1 bg-white">
                                @else
                                    <span class="text-muted">No logo uploaded</span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="form-label d-block">Current Favicon</label>
                                @if(!empty($setting->favicon) && file_exists(public_path('upload/favicon/' . $setting->favicon)))
                                    <img src="{{ asset('upload/favicon/' . $setting->favicon) }}" alt="favicon" height="80px" class="border rounded p-1 bg-white">
                                @else
                                    <span class="text-muted">No favicon uploaded</span>
                                @endif
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-light px-5">Update Settings</button>
                            </div>
                        </form>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection