<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('location') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('item', 'Select Location:') !!}
        
        {!! Form::select('location', $items, isset($property)?$property->location:null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('address', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Type', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('type', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'Price', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('price', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('beds') ? 'has-error' : ''}}">
    {!! Form::label('beds', 'Beds', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('beds', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('beds', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('baths') ? 'has-error' : ''}}">
    {!! Form::label('baths', 'Baths', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('baths', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('baths', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('area') ? 'has-error' : ''}}">
    {!! Form::label('area', 'Area (Sq.Ft)', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('area', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">

        <div class="max-text">
        <img alt="" class="img-responsive" id="banner1" 
        src="{{ isset($property)?asset($property->image):asset('images/upload.jpg') }}" style=" width: 30%; "> 
        <br/>
      </div>
        <br/>

        {!! Form::file('image', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
