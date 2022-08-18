@extends('layouts.app')

@section('title')
            Create User
    @endsection

@section('content')
    @include('mazer-templates::common.errors')
    
    {!! Form::open(['route' => 'users.store', 'class' => 'form form-vertical']) !!}
        <div class="form-body">
            <div class="row">
                @include('users.fields')
            </div>

            <div class="col-12 d-flex justify-content-end">
              {!! Form::submit( 'Save' , ['class' => 'btn btn-primary me-1 mb-1']) !!}

              <a href="{{ route('users.index') }}" class="btn btn-light-secondary me-1 mb-1"> Cancel </a>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
