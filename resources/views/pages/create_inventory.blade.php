@extends('layout.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create New Inventory</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
            {{-- <button type="button" class="close" data-dismiss="alert">X</button> --}}
                <strong>{{ $message }}</strong>
        </div>


        @endif

        <div>
        {!! Form::open(['url' => ['store-inventory'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('value','Value') }}
                {{ Form::text('value',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('status','Status') }}
                {{ Form::text('status',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>
</div>

@endsection