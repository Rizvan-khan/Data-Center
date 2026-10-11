<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>AFU Data Center | Admin Panel</title>
<link rel="icon" href="{{ asset('App/assets/img/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/plugins/simplebar/css/simplebar.css') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/plugins/metismenu/css/metisMenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('AdminCss/assets/css/icons.css') }}">
<link rel="stylesheet" href="{{ asset('App/assets/css/navigation-icons.css') }}">
<style>.page-content{padding-bottom:70px}.table td{max-width:300px;overflow-wrap:anywhere}.sidebar-header .logo-icon{width:100px;height:auto;background:#fff;padding:5px;border-radius:4px}.sidebar-header .logo-text{font-size:18px}.pagination{flex-wrap:wrap}.topbar .user-name{max-width:180px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.page-content h1{font-size:24px}.page-content input,.page-content select{max-width:100%}.page-content .table-responsive{overflow-x:auto}.footer{padding:10px;text-align:center;border-top:1px solid #ffffff30;font-size:13px}</style>
</head><body class="bg-theme bg-theme3"><div class="wrapper">
<style>.form-select,.form-select option{color:#243244;background-color:#fff}.topbar .nav-link,.topbar .user-name{color:#fff}.page-content .btn-outline-light:hover{color:#243244}</style>
<div class="sidebar-wrapper" data-simplebar="true"><div class="sidebar-header"><a href="{{ url('/admin/dashboard') }}"><img class="logo-icon" src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center"></a><h2 class="logo-text mb-0">Admin</h2><div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i></div></div>
<ul class="metismenu" id="menu">
<li><a href="{{ url('/admin/dashboard') }}"><div class="parent-icon"><i class="bx bx-home-circle"></i></div><div class="menu-title">Dashboard</div></a></li>
<li><a href="javascript:;" class="has-arrow"><div class="parent-icon"><i class="bx bx-user"></i></div><div class="menu-title">Manage Profile</div></a><ul><li><a href="{{ url('/admin/profile') }}"><i class="bx bx-user"></i>Admin Profile</a></li><li><a href="{{ url('/admin/change-password') }}"><i class="bx bx-key"></i>Change Password</a></li></ul></li>
<li><a href="javascript:;" class="has-arrow"><div class="parent-icon"><i class="bx bx-menu"></i></div><div class="menu-title">Menus & Categories</div></a><ul>
<li><a href="{{ route('admin.menus.index') }}"><i class="bx bx-list-ul"></i>Manage Menus</a></li>
<li><a href="{{ route('admin.menus.create') }}"><i class="bx bx-plus"></i>Add Menu</a></li>
<li><a href="{{ route('admin.categories.index') }}"><i class="bx bx-category"></i>Menu Categories</a></li>
<li><a href="{{ route('admin.submenus.index') }}"><i class="bx bx-list-ul"></i>Manage Submenus</a></li>
<li><a href="{{ route('admin.submenus.create') }}"><i class="bx bx-plus"></i>Add Submenu</a></li></ul></li>
<li><a href="javascript:;" class="has-arrow"><div class="parent-icon"><i class="bx bx-file"></i></div><div class="menu-title">Pages & FAQs</div></a><ul><li><a href="{{ route('admin.pages.index') }}"><i class="bx bx-file"></i>All Pages</a></li><li><a href="{{ route('admin.faqs.index') }}"><i class="bx bx-list-ul"></i>Manage FAQs</a></li><li><a href="{{ route('admin.faqs.create') }}"><i class="bx bx-plus"></i>Add FAQ</a></li></ul></li>
<li><a href="{{ route('admin.users.index') }}"><div class="parent-icon"><i class="bx bx-group"></i></div><div class="menu-title">Users & Access</div></a></li>
<li><a href="{{ route('admin.home-setting.index') }}"><div class="parent-icon"><i class="bx bx-cog"></i></div><div class="menu-title">Settings</div></a></li>
</ul></div>
<header><div class="topbar d-flex align-items-center"><nav class="navbar navbar-expand"><div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div><a class="ms-auto me-3 text-white" href="{{ url('/') }}" target="_blank" rel="noopener" title="View website"><i class="bx bx-link-external"></i> Website</a><div class="user-box dropdown"><a class="d-flex align-items-center nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-user-circle fs-3"></i><span class="user-name ps-2">{{ auth()->user()?->name }}</span></a><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="{{ url('/admin/profile') }}"><i class="bx bx-user"></i> My Profile</a></li><li><a class="dropdown-item" href="{{ url('/admin/change-password') }}"><i class="bx bx-key"></i> Change Password</a></li><li><form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="dropdown-item"><i class="bx bx-log-out"></i> Sign Out</button></form></li></ul></div></nav></div></header>
<div class="overlay toggle-icon"></div>
