<div class="form-group col-sm-12  label-floating">
    {!! Form::label('demand_product', 'Product',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_product', null, ['class' => 'form-control', 'required'=>true]) !!}
    <span class="help-block  with-errors">Please enter a valid Product name</span>
</div>

<div class="form-group col-sm-12  label-floating">
    {!! Form::label('demand_product_detail', 'Product Description',  ['class' => 'control-label']) !!}
    {!! Form::textarea('demand_product_detail', null, ['class' => 'form-control', 'rows'=>3, 'required'=>true]) !!}
    <span class="help-block">Please enter a valid Product description</span>
</div>


<div class="col-sm-6">
    <div class="input-group">
        <span class="input-group-btn">
             <button type="button" class="quantity-left-minus btn btn-danger btn-raised btn-number"  data-type="minus" data-field="">
                  <span class="glyphicon glyphicon-minus"></span>
             </button>
        </span>
        <input type="text" id="quantity" name="demand_quantity" class="form-control input-number" value="10" min="1" max="100">
        <span class="input-group-btn">
              <button type="button" class="quantity-right-plus btn btn-success btn-raised btn-number" data-type="plus" data-field="">
                    <span class="glyphicon glyphicon-plus"></span>
              </button>
        </span>
    </div>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_unit', 'Satuan',  ['class' => 'control-label']) !!}
    {!! Form::select('demand_unit', ['pcs'=>'Pieces','kg'=>'Kg', 'kwt'=>'Kwintal','ton'=>'Ton'],null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_estimation_price_low', 'Batas Harga Bawah',  ['class' => 'control-label']) !!}
    {!! Form::number('demand_estimation_price_low', null, ['class' => 'form-control']) !!}
    <span class="help-block">Please enter a valid Batas Harga Bawah</span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_estimation_price_height', 'Batas Harga Atas',  ['class' => 'control-label']) !!}
    {!! Form::number('demand_estimation_price_height', null, ['class' => 'form-control']) !!}
    <span class="help-block">Please enter a valid Batas Harga Atas</span>
</div>



<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_expired_date', 'Batas berlakunya permintaan ',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_expired_date', null, ['class' => 'form-control','id'=>'demand_expired_date']) !!}
    <span class="help-block">Please enter a valid Batas berlakunya permintaan </span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_due_date', 'Batas waktu penyediaan barang',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_due_date', null, ['class' => 'form-control', 'id' => 'demand_due_date']) !!}
    <span class="help-block">Please enter a valid Batas Harga Atas</span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_name', 'Name',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_name', null, ['class' => 'form-control', 'required'=>true]) !!}
    <span class="help-block">Please enter your name</span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_company', 'Company',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_company', null, ['class' => 'form-control']) !!}
    <span class="help-block">Please enter your company name</span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_phone', 'Phone',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_phone', null, ['class' => 'form-control', 'required'=>true]) !!}
    <span class="help-block">Please enter a valid Phone number</span>
</div>

<div class="form-group col-sm-6  label-floating">
    {!! Form::label('demand_email', 'Email',  ['class' => 'control-label']) !!}
    {!! Form::text('demand_email', null, ['class' => 'form-control', 'required'=>true]) !!}
    <span class="help-block">Please enter a valid Email</span>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Send Request', ['class' => 'btn btn-primary btn-raised']) !!}
    <a href="{!! url('/') !!}" class="btn btn-default">Cancel</a>
</div>