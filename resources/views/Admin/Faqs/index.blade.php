@extends('Admin.adminlayout.app')
@section('content')
<div class="page-wrapper"><div class="page-content">
<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4"><h1 class="h4 mb-0">Manage FAQs</h1><div class="d-flex gap-2"><a class="btn btn-outline-light" href="{{ route('admin.pages.index') }}">All Pages</a><a class="btn btn-light" href="{{ route('admin.faqs.create', ['page'=>request('page')]) }}"><i class="bx bx-plus" aria-hidden="true"></i> Add FAQ</a></div></div>
@include('Admin.Navigation.alerts')
<form method="GET" class="row g-3 mb-4"><div class="col-md-8"><label class="form-label" for="page">Page</label><select class="form-select" id="page" name="page"><option value="">All pages</option>@foreach($pages as $path => $name)<option value="{{ $path }}" @selected(request('page') === $path)>{{ $name }} (/{{ ltrim($path, '/') }})</option>@endforeach</select></div><div class="col-md-4 d-flex align-items-end"><button class="btn btn-light"><i class="bx bx-filter-alt" aria-hidden="true"></i> Filter</button></div></form>
<div class="table-responsive"><table class="table align-middle"><thead><tr><th>Page</th><th>Question</th><th>Answer</th><th>Order</th><th>Visibility</th><th>Actions</th></tr></thead><tbody>
@forelse($items as $item)
<tr><td>{{ $pages[$item->page_path] ?? $item->page_path }}</td><td>{{ $item->question }}</td><td>{{ Str::limit($item->answer, 140) }}</td><td>{{ $item->position }}</td><td><form method="POST" action="{{ route('admin.faqs.visibility', $item) }}">@csrf @method('PATCH')<input type="hidden" name="is_active" value="{{ $item->is_active ? 0 : 1 }}"><button class="btn btn-sm {{ $item->is_active ? 'btn-success' : 'btn-outline-light' }}" title="Toggle FAQ visibility">{{ $item->is_active ? 'Visible' : 'Hidden' }}</button></form></td><td><div class="d-flex gap-2"><a class="btn btn-sm btn-light" href="{{ route('admin.faqs.edit', $item) }}" title="Edit FAQ" aria-label="Edit FAQ"><i class="bx bx-edit" aria-hidden="true"></i></a><form method="POST" action="{{ route('admin.faqs.destroy', $item) }}" onsubmit="return confirm('Delete this FAQ?');">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" title="Delete FAQ" aria-label="Delete FAQ"><i class="bx bx-trash" aria-hidden="true"></i></button></form></div></td></tr>
@empty
<tr><td colspan="6" class="text-center py-5">No FAQs found.</td></tr>
@endforelse
</tbody></table></div>{{ $items->links('pagination::bootstrap-5') }}</div></div>
@endsection
