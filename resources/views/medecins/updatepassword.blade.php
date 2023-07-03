<!-- doctor_password_change.blade.php -->
{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Changement de mot de passe</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('updateDoctorPassword') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">Nouveau mot de
                                passe</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password"
                                    class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                                    required autocomplete="new-password">

                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password_confirmation"
                                class="col-md-4 col-form-label text-md-right">Confirmer le nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="new_password_confirmation" type="password" class="form-control"
                                    name="new_password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}
<center>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<form method="POST" action="{{ route('updateDoctorPassword') }}">
    @csrf
<div class="card text-center" style="width: 400px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
        <p class="card-text py-2">
        </p>

        <div class="form-outline">
              <label class="form-label" for="typeEmail">Nouveau mot de passe</label>
            <input id="new_password" type="password"
            class="form-control @error('new_password') is-invalid @enderror" name="new_password"
            required autocomplete="new-password">

        </div>
        <div class="form-outline">
        <label for="new_password_confirmation"
        class="form-label" for="">Confirmer le nouveau mot de passe</label>


        <input id="new_password_confirmation" type="password" class="form-control"
            name="new_password_confirmation" required autocomplete="new-password">

</div>
    <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
        <div class="d-flex justify-content-between mt-4">
            <a class="" href="#">Login</a>
            <a class="" href="#">Register</a>
        </div>
    </div>
</div>
</form>
</center>
