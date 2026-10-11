@extends('Admin.adminlayout.app')
@section('content')
<div class="page-wrapper"><div class="page-content"><div class="d-flex justify-content-between align-items-center mb-4"><h1 class="h4">Manage Menus</h1><a href="{{ route('admin.menus.create') }}" class="btn btn-light"><i class="bx bx-plus" aria-hidden="true"></i> Add Menu</a></div>
@include('Admin.Navigation.alerts')
<div class="table-responsive"><table class="table align-middle"><thead><tr><th>Menu</th><th>Destination</th><th>Submenus</th><th>Order</th><th>Status</th><th>Actions</th></tr></thead><tbody>@foreach($menus as $menu)<tr><td>{{ $menu->name }}</td><td>{{ $menu->url }}</td><td>{{ $menu->submenus_count }}</td><td>{{ $menu->position }}</td><td>{{ $menu->status ? 'Visible' : 'Hidden' }}</td><td><a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-light" title="Edit menu"><i class="bx bx-edit" aria-hidden="true"></i></a> <a href="{{ route('admin.submenus.index', ['parent' => $menu->slug]) }}" class="btn btn-sm btn-outline-light">Submenus</a></td></tr>@endforeach</tbody></table></div></div></div>
@endsection
