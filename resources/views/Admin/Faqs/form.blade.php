@extends('Admin.adminlayout.app')
@section('content')
<div class="page-wrapper"><div class="page-content">
<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4"><h1 class="h4 mb-0">{{ $item->exists ? 'Edit FAQ' : 'Add FAQ' }}</h1><a class="btn btn-outline-light" href="{{ route('admin.faqs.index', ['page'=>$item->page_path]) }}">Back to FAQs</a></div>
@include('Admin.Navigation.alerts')
<form method="POST" action="{{ $item->exists ? route('admin.faqs.update', $item) : route('admin.faqs.store') }}" class="row g-4">
@csrf
@if($item->exists)
@method('PUT')
@endif
<div class="col-12"><label class="form-label" for="page_path">Page</label><select class="form-select" id="page_path" name="page_path" required><option value="">Select page</option>@foreach($pages as $path => $name)<option value="{{ $path }}" @selected(old('page_path', $item->page_path) === $path)>{{ $name }} (/{{ ltrim($path, '/') }})</option>@endforeach</select></div>
<div class="col-12"><label class="form-label" for="question">Question</label><input class="form-control" id="question" name="question" value="{{ old('question', $item->question) }}" maxlength="500" required></div>
<div class="col-12"><label class="form-label" for="answer">Answer</label><textarea class="form-control" id="answer" name="answer" rows="7" maxlength="20000" required>{{ old('answer', $item->answer) }}</textarea></div>
<div class="col-md-6"><label class="form-label" for="position">Display order</label><input class="form-control" id="position" name="position" type="number" min="0" max="9999" value="{{ old('position', $item->position) }}" required></div>
<div class="col-md-6"><label class="form-label" for="is_active">Visibility</label><select class="form-select" id="is_active" name="is_active"><option value="1" @selected(old('is_active', $item->is_active) == 1)>Visible</option><option value="0" @selected(old('is_active', $item->is_active) == 0)>Hidden</option></select></div>
<div class="col-12"><button class="btn btn-light"><i class="bx bx-save" aria-hidden="true"></i> Save FAQ</button></div>
</form></div></div>
@endsection
