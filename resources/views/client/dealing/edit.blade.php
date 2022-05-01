@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  <div class='container m-0'>

    <h1 class='h4 m-1'>Dealing Create</h1>

    <a href='{{ route('dealing.index') }}' class='btn btn-secondary btn-sm'> < </a>

    {{ Form::open(['url' => route('dealing.store'), 'class' => 'w-50 p-3']) }}

    <div class='w-100 mt-2'>
      <div class='form-label'>{{ Form::label('dealing-domain_id', 'Domain') }}</div>

      <div>
        {{ Form::select('domain_id', $domainList, old('domain_id', $dealing->domain_id), ['placeholder' => 'Select Domain','id' => 'dealing-domain_id','class' => 'form-control w-50 d-inline']) }}
      </div>

      @error('domain_id')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>

    <div class='w-100 mt-2'>
      <div class='form-label'>{{ Form::label('dealing-client_id', 'Client') }}</div>

      <div>
        {{ Form::select('client_id', $clientList, old('client_id', $dealing->client_id), ['placeholder' => 'Select Client', 'id' => 'dealing-client_id','class' => 'form-control w-50 d-inline']) }}
      </div>

      @error('client_id')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>

    <div class='w-50 mt-2'>
      <div class='form-label'>{{ Form::label('dealing-subtotal', 'Subtotal') }}</div>

      <div>
        {{ Form::number('subtotal', old('subtotal', $dealing->subtotal), ['placeholder' => '1000', 'id' => 'dealing-subtotal', 'class' => 'form-control']) }}
      </div>

      @error('subtotal')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>
    <div class='w-50 mt-2'>
      <div class='form-label'>{{ Form::label('dealing-discount', 'Discount') }}</div>

      <div>
        {{ Form::number('discount', old('discount', $dealing->discount), ['placeholder' => '1000', 'id' => 'dealing-discount', 'class' => 'form-control']) }}
      </div>

      @error('discount')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>

    <div class='w-25 mt-2'>
      <div>{{ Form::label('dealing-billing_date', 'Billing Date') }}</div>

      <div>
        {{ Form::date('billing_date', old('billing_date', $dealing->billing_date), ['id' => 'dealing-billing_date', 'class' => 'form-control']) }}
      </div>

      @error('billing_date')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>


    <div class='w-50 mt-2'>
      <div class='form-label'>{{ Form::label('dealing-interval', 'Dealing interval') }}</div>

      <div>
        {{ Form::number('interval', old('interval', $dealing->interval), ['placeholder' => '1','id' => 'dealing-interval','class' => 'form-control w-25 d-inline']) }}
        {{ Form::select('interval_category', $intervalCategories , old('interval_category', $dealing->interval_category), ['id' => 'dealing-interval_category','class' => 'form-control w-50 d-inline']) }}
      </div>

      @error('interval')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror

      @error('interval_category')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>

    <div class='mt-2'>
      {{ Form::hidden('is_auto_update', 0) }}
      {{ Form::checkbox('is_auto_update', '1', old('is_auto_update', $dealing->is_auto_update), ['id' => 'dealing-is_auto_update','class' => 'form-check-input']) }}
      {{ Form::label('dealing-is_auto_update', 'Auto Update') }}

      @error('is_auto_update')
        <div class='invalid-feedback d-block'>{{ $message }}</div>
      @enderror
    </div>

    <div class='mt-5'>
      {{ Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
      <div>
        {{ Form::close() }}
      </div>
    </div>

  </div>
@endsection
