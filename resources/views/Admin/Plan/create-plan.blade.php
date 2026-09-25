@extends('admin.adminlayout.app')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <hr />
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0 text-white">Add New Plan</h5>
                        </div>

                        <!-- Flash Success Alert -->
                        @if (session('success'))
                        <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                            <div class="text-white">{{ session('success') }}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <!-- Flash Error Alert -->
                        @if (session('error'))
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                            <div class="text-white">{{ session('error') }}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <!-- Validation Errors List -->
                        @if ($errors->any())
                        <div class="alert alert-danger border-0 bg-danger text-white">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <hr>

                        <form class="row g-3" action="{{ route('plans.store') }}" method="POST">
                            @csrf

                            <div class="col-md-6">
                                <label class="form-label text-white">Plan Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="plan_title" value="{{ old('plan_title') }}" placeholder="e.g. Basic Plan" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-white">Plan Type</label>
                                <input type="text" class="form-control" name="plan_type" value="{{ old('plan_type') }}" placeholder="e.g. Standard / Premium">
                            </div>

                            <div class="col-md-12 mb-3">
                                    <label class="control-label text-white mb-2" for="page_id">Choose Page / URL</label>
                                    <select name="page_id" id="page_id" class="form-select" required>
                                        <option value="" disabled selected>-- Select Page --</option>
                                        @foreach($pagess as $page)
                                        <option value="{{ $page->id }}" {{ old('page_id') == $page->id ? 'selected' : '' }}>
                                            {{ $page->page_title }} ( /{{ $page->slug }} )
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            <div class="col-md-12">
                                <label class="form-label text-white">Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3" placeholder="Enter plan details...">{{ old('short_description') }}</textarea>
                            </div>

                            <!-- Monthly Pricing -->
                            <div class="col-md-4">
                                <label class="form-label text-white">Monthly Price</label>
                                <input type="number" step="0.01" class="form-control" name="price_mothly" value="{{ old('price_mothly', 0) }}">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-white">Monthly Renewal Price</label>
                                <input type="number" step="0.01" class="form-control" name="renew_price" value="{{ old('renew_price', 0) }}">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-white">Monthly Discount (%)</label>
                                <input type="number" step="0.01" class="form-control" name="discount_mothly" value="{{ old('discount_mothly') }}">
                            </div>

                            <!-- Yearly Pricing -->
                            <div class="col-md-4">
                                <label class="form-label text-white">Yearly Price</label>
                                <input type="number" step="0.01" class="form-control" name="price_yearly" value="{{ old('price_yearly', 0) }}">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-white">Yearly Renewal Price</label>
                                <input type="number" step="0.01" class="form-control" name="renew_yearly" value="{{ old('renew_yearly', 0) }}">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-white">Yearly Discount (%)</label>
                                <input type="number" step="0.01" class="form-control" name="discount_yearly" value="{{ old('discount_yearly') }}">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label text-white">Status</label>
                                <select class="form-select" name="status">
                                    <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label text-white">Description</label>
                                <textarea class="form-control" id="editor" name="description" rows="5" placeholder="Enter plan details...">{{ old('description') }}</textarea>
                            </div>


                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-light px-5">Save Plan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Include CKEditor CDN Script (Form ke baad ya page ke end me lagayein) -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection