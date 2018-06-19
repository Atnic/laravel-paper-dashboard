@extends('paper-dashboard::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
{{-- @include('paper-dashboard::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
]) --}}
@endsection

@section('sidebar-menu')
<ul class="nav">
  <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
      <i class="nc-icon nc-bank"></i>
      <p>Home</p>
    </a>
  </li>
</ul>
@endsection
