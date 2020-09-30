@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

@include('layouts.nav')

@section('content')

<style> form { background-color: white }</style>


<form class="form-horizontal" method="POST" action=" {{ route('presentation.update') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="description" class="col-md-4 control-label">Description</label>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <textarea id="description" name="description" rows="10" cols="50" required>{{ $presentation->description }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="thumbnail" class="col-md-4 control-label">Image description</label>
        @error('thumbnail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <img src="{{ $presentation->thumbnail }}" alt="image_description">
            <input id="thumbnail" type="file" class="form-control" name="thumbnail">
        </div>
    </div>
    <div class="form-group">
        <label for="bg_image" class="col-md-4 control-label">Image de fond</label>
        @error('bg_image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <img src="{{ $presentation->bg_image }}" alt="image de fond">
            <input id="bg_image" type="file" class="form-control" name="bg_image">
        </div>
    </div>
    <div class="form-group">
        <label for="command_info" class="col-md-4 control-label">Info de commande</label>
        @error('command_info')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <textarea id="command_info" name="command_info" rows="5" cols="50" required>{{ $presentation->command_info }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="payment_info" class="col-md-4 control-label">Info de paiement</label>
        @error('payment_info')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <textarea id="payment_info" name="payment_info" rows="5" cols="50" required>{{ $presentation->payment_info }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </div>
</form>



@endsection
