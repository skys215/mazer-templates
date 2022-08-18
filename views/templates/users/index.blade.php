@extends('layouts.app')

@section('title')
    Users
@endsection

@section('page-action')
    <a class="btn btn-primary" href="{{ route('users.create') }}">
        Add New
    </a>
@endsection

@section('content')
    @include('mazer-templates::common.message')

    @include('users.table')
@endsection
