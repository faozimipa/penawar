
<div class="form-group col-sm-12  label-floating">
    {!! Form::label('demand_product', 'Product',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_product', null, ['class' => 'form-control']) !!}
    <span class="help-block">Please enter a valid Product name</span>
</div>

<div class="form-group col-sm-12  label-floating">
    {!! Form::label('demand_product_detail', 'Product Description',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_product_detail', null, ['class' => 'form-control']) !!}
    <span class="help-block">Please enter a valid Product description</span>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! url('/') !!}" class="btn btn-default">Cancel</a>
</div>