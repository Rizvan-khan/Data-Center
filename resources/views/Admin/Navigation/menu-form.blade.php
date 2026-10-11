@extends('Admin.adminlayout.app')
@section('content')
<div class="page-wrapper"><div class="page-content"><h1 class="h4 mb-4">{{ $item->exists ? 'Edit Menu' : 'Add Menu' }}</h1>
@include('Admin.Navigation.alerts')
<form method="POST" class="row g-4" action="{{ $item->exists ? route('admin.menus.update', $item) : route('admin.add-menu') }}">@csrf
@if($item->exists) @method('PUT') @endif
<div class="col-md-6"><label for="name" class="form-label">Menu name</label><input name="name" id="name" value="{{ old('name', $item->name) }}" required maxlength="100" class="form-control"></div>
<div class="col-md-6"><label for="slug" class="form-label">Menu key</label><input name="slug" id="slug" value="{{ old('slug', $item->slug) }}" required pattern="[a-z0-9-]+" class="form-control"></div>
<div class="col-md-6"><label for="url" class="form-label">Page path</label><input name="url" id="url" value="{{ old('url', $item->url) }}" placeholder="/business-services" required class="form-control"></div>
<div class="col-md-2"><label for="position" class="form-label">Display order</label><input type="number" name="position" id="position" min="0" max="9999" value="{{ old('position', $item->position) }}" required class="form-control"></div>
<div class="col-md-2"><label for="status" class="form-label">Visibility</label><select id="status" name="status" class="form-select"><option value="1" @selected(old('status', $item->status) == 1)>Visible</option><option value="0" @selected(old('status', $item->status) == 0)>Hidden</option></select></div>
<div class="col-md-2"><label for="submenu" class="form-label">Submenus</label><select id="submenu" name="submenu" class="form-select"><option value="1" @selected(old('submenu', $item->submenu) == 1)>Enabled</option><option value="0" @selected(old('submenu', $item->submenu) == 0)>Disabled</option></select></div>
<div class="col-12 border-top pt-4"><div class="d-flex gap-3 flex-wrap justify-content-between align-items-center"><h2 class="h5 mb-0">Category & Page Links</h2><button type="button" class="btn btn-outline-light" id="add-menu-page"><i class="bx bx-plus"></i> Add Page</button></div>
@if($item->exists)<div class="d-flex gap-3 mt-3"><a href="{{ route('admin.categories.index',['parent'=>$item->slug]) }}">Manage Categories</a><a href="{{ route('admin.submenus.index',['parent'=>$item->slug]) }}">Manage Existing Pages</a></div>@endif
<div id="menu-pages" class="mt-3">
@foreach(old('children',[]) as $index=>$child)
<div class="row g-3 align-items-end border-bottom pb-3 mb-3 menu-page-row"><div class="col-md-4"><label class="form-label">Page</label><select class="form-select" name="children[{{ $index }}][page]" required aria-label="Page">@foreach($pages as $path=>$label)<option value="{{ $path }}" @selected($child['page']===$path)>{{ $label }}</option>@endforeach</select></div><div class="col-md-4"><label class="form-label">Category</label><input class="form-control" name="children[{{ $index }}][category]" value="{{ $child['category'] ?? '' }}" maxlength="100" aria-label="Category"></div><div class="col-md-3"><label class="form-label">Page icon</label><select class="form-select" name="children[{{ $index }}][icon]" aria-label="Page icon">@foreach(['la-link'=>'Link','la-server'=>'Server','la-cloud'=>'Cloud','la-shield-alt'=>'Security','la-network-wired'=>'Network','la-phone'=>'Phone','la-video'=>'Video','la-envelope'=>'Email'] as $icon=>$label)<option value="{{ $icon }}" @selected(($child['icon']??'la-link')===$icon)>{{ $label }}</option>@endforeach</select></div><div class="col-md-1"><button type="button" class="btn btn-outline-danger remove-menu-page" title="Remove page row" aria-label="Remove page row"><i class="bx bx-trash"></i></button></div></div>
@endforeach
</div></div>
<div class="col-12 d-flex gap-3"><button class="btn btn-light" type="submit"><i class="bx bx-save" aria-hidden="true"></i> Save Menu</button><a href="{{ route('admin.menus.index') }}" class="btn btn-outline-light">Back</a></div>
</form></div></div>
<template id="menu-page-template"><div class="row g-3 align-items-end border-bottom pb-3 mb-3 menu-page-row"><div class="col-md-4"><label class="form-label">Page</label><select class="form-select" data-field="page" required aria-label="Page"><option value="">Select page</option>@foreach($pages as $path=>$label)<option value="{{ $path }}">{{ $label }}</option>@endforeach</select></div><div class="col-md-4"><label class="form-label">Category</label><input class="form-control" data-field="category" maxlength="100" aria-label="Category"></div><div class="col-md-3"><label class="form-label">Page icon</label><select class="form-select" data-field="icon" aria-label="Page icon">@foreach(['la-link'=>'Link','la-server'=>'Server','la-cloud'=>'Cloud','la-shield-alt'=>'Security','la-network-wired'=>'Network','la-phone'=>'Phone','la-video'=>'Video','la-envelope'=>'Email'] as $icon=>$label)<option value="{{ $icon }}">{{ $label }}</option>@endforeach</select></div><div class="col-md-1"><button type="button" class="btn btn-outline-danger remove-menu-page" title="Remove page row" aria-label="Remove page row"><i class="bx bx-trash"></i></button></div></div></template>
<script>
document.addEventListener('DOMContentLoaded', function(){
    var index={{ count(old('children',[])) }};
    var list=document.getElementById('menu-pages');
    document.getElementById('add-menu-page').addEventListener('click',function(){
        var fragment=document.getElementById('menu-page-template').content.cloneNode(true);
        fragment.querySelectorAll('[data-field]').forEach(function(input){input.name='children['+index+']['+input.dataset.field+']';});
        list.appendChild(fragment); index++;
        document.getElementById('submenu').value='1';
    });
    list.addEventListener('click',function(event){var button=event.target.closest('.remove-menu-page');if(button) button.closest('.menu-page-row').remove();});
    var key=document.getElementById('slug'), name=document.getElementById('name'), manual=!!key.value;
    key.addEventListener('input',function(){manual=true;});
    name.addEventListener('input',function(){if(!manual)key.value=name.value.toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/^-|-$/g,'');});
});
</script>
@endsection
