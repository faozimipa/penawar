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
                        {!! Form::open(['route' => 'pp.request.post','id'=>'demandForm', 'data-toggle'=>'validator', 'role'=>'form']) !!}
                            @include('demands.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#demandForm').validator();

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

        $('#demand_expired_date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
                format: 'DD/MM/YYYY'
            }
        });

        $('#demand_due_date').daterangepicker({

            singleDatePicker: true,
            showDropdowns: true,
            minDate: $('#demand_expired_date').val(),
            locale: {
                format: 'DD/MM/YYYY'
            }
        });



    });
</script>
@endsection
