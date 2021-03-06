@extends('nodes.backend::reset-password.reset-template')

@section('feedback-header')
    <h3 class="panel-title">Reset password</h3>
@endsection

@section('feedback-message')
    <p><strong>Congratulations!</strong></p>
    <p>Your password has been now been updated and you can now delete the before sent e-mail.</p>
    <a href="{{ route('nodes.backend.login.form') }}" class="btn btn-primary form-control">Go to login</a>
@endsection