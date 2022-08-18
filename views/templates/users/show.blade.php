@extends('layouts.app')

@section('title')
    User Details
@endsection

@section('page-action')
    <a class="btn btn-light" href="{{ route('users.index') }}">Back</a>
@endsection

@section('content')
    @include('users.show_fields')
@endsection
