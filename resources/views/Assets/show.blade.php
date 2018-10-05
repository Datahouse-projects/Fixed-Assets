<div class="form-group row">
    <label for="cost" class="col-md-4 col-form-label text-md-right">{{ __('Asset Cost') }}</label>

    <div class="col-md-6">
        <input id="asset_cost" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="purdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Purchased') }}</label>

    <div class="col-md-6">
        <input id="purdate" type="date" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="expdate" class="col-md-4 col-form-label text-md-right">{{ __('Exipire Date') }}</label>

    <div class="col-md-6">
        <input id="expdate" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

    </div>
</div>
<div class="form-group row">
    <label for="rendate" class="col-md-4 col-form-label text-md-right">{{ __('Renewer Date') }}</label>

    <div class="col-md-6">
        <input id="rendate" type="date" class="form-control" required autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="disdate" class="col-md-4 col-form-label text-md-right">{{ __('Date Disposal') }}</label>

    <div class="col-md-6">
        <input id="disdate" type="date" class="form-control"  required>

    </div>
</div>

<div class="form-group row">
    <label for="curdate" class="col-md-4 col-form-label text-md-right">{{ __('Current Cost') }}</label>

    <div class="col-md-6">
        <input id="curdate" type="number" class="form-control" required>
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Model Number') }}</label>

    <div class="col-md-6">
        <input id="modnumber" type="number" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Model Name') }}</label>

    <div class="col-md-6">
        <input id="modname" type="text" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Asset Picture') }}</label>

    <div class="col-md-6">
        <input id="asset_pic" type="number" class="form-control" required>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: DATAHOUSE_PC
 * Date: 9/27/2018
 * Time: 2:19 AM
 */