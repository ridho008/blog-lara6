@extends('layouts.app-backend')

@section('title', 'File Manager')
@section('navbar-backend')

@section('sub-title', 'File Manager')
@section('content')
<iframe src="/filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
@endsection