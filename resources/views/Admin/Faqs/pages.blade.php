@extends('Admin.adminlayout.app')
@section('content')
<div class="page-wrapper"><div class="page-content">
<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4"><h1 class="h4 mb-0">All Pages</h1><a class="btn btn-light" href="{{ route('admin.faqs.index') }}"><i class="bx bx-list-ul" aria-hidden="true"></i> All FAQs</a></div>
<div class="table-responsive"><table class="table align-middle"><thead><tr><th>Page</th><th>Path</th><th>FAQs</th><th>Actions</th></tr></thead><tbody>
@foreach($pages as $path => $name)
<tr><td>{{ $name }}</td><td><a href="{{ url($path) }}" target="_blank" rel="noopener">/{{ ltrim($path, '/') }}</a></td><td>{{ $counts[$path] ?? 0 }}</td><td><div class="d-flex gap-2 flex-wrap"><a class="btn btn-sm btn-light" href="{{ route('admin.faqs.index', ['page'=>$path]) }}"><i class="bx bx-edit" aria-hidden="true"></i> Manage FAQs</a><a class="btn btn-sm btn-outline-light" href="{{ route('admin.faqs.create', ['page'=>$path]) }}"><i class="bx bx-plus" aria-hidden="true"></i> Add FAQ</a></div></td></tr>
@endforeach
</tbody></table></div></div></div>
@endsection
