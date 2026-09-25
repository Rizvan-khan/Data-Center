@extends('admin.adminlayout.app')

@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <hr />
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body">

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

                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i></div>
                                <h5 class="mb-0 text-white">Add Plan Heading</h5>
                            </div>
                            <hr /><br>

                            <form class="row g-3" action="{{ route('plan-headings.store') }}" method="POST">
                                @csrf

                                <!-- Select Page Dropdown -->
                                <div class="col-md-12 mb-3">
                                    <label class="control-label text-white mb-2" for="page_id">Choose Page / URL</label>
                                    <select name="page_id" id="page_id" class="form-select" required>
                                        <option value="" disabled selected>-- Select Page --</option>
                                        @foreach($pages as $page)
                                        <option value="{{ $page->id }}" {{ old('page_id') == $page->id ? 'selected' : '' }}>
                                            {{ $page->page_title }} ( /{{ $page->slug }} )
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Plan Heading Input -->
                                <div class="row mb-3">
                                    <label for="heading" class="col-sm-3 col-form-label text-white">Plan Heading</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="heading" name="heading" class="form-control" value="{{ old('heading') }}" placeholder="Enter Heading" required>
                                    </div>
                                </div>

                                <!-- Plan Description Input (Paragraph) -->
                                <div class="row mb-3">
                                    <label for="editor" class="col-sm-3 col-form-label text-white">Plan Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="paragraph" id="editor" rows="4" placeholder="Description">{{ old('paragraph') }}</textarea>
                                    </div>
                                </div>

                                <!-- Status Selection -->
                                <div class="row mb-3">
                                    <label for="status" class="col-sm-3 col-form-label text-white">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" name="status" id="status">
                                            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-light px-5">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CKEditor Integration Script -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection