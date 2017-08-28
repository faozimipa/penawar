@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">Permintaan Penawaran</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'pp.request.post']) !!}
                            @include('demands.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
