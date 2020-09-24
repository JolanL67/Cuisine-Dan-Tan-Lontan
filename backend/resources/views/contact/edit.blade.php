@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

@include('layouts.nav')

@section('content')

<style> form { background-color: white }</style>


<form class="form-horizontal" method="POST" action=" {{ route('contact.update') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="phone" class="col-md-4 control-label">Numéro de téléphone</label>
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <input id="phone" type="tel" class="form-control" name="phone" value="{{ $contact->phone }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="mail" class="col-md-4 control-label">E-mail</label>
        @error('mail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <input id="mail" type="email" class="form-control" name="mail" value="{{ $contact->mail }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="facebook" class="col-md-4 control-label">Facebook</label>
        @error('facebook')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <input id="facebook" type="url" class="form-control" name="facebook" value="{{ $contact->facebook }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="instagram" class="col-md-4 control-label">Instagram</label>
        @error('instagram')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="col-md-6">
            <input id="instagram" type="url" class="form-control" name="instagram" value="{{ $contact->instagram }}" required>
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
