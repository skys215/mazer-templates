@extends('layouts.app')

@section('title')
            Edit User
    @endsection

@section('content')
    @include('mazer-templates::common.errors')

    {!! Form::model($aaa, ['route' => ['users.update', $aaa->id], 'method' => 'patch', 'class' => 'form form-vertical']) !!}
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
