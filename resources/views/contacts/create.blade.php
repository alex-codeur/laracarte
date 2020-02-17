@extends('layouts.default', ['title' => 'contact'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-10 mx-auto">
                <h2>Get IN Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>,</p>
                
                <form action="#" method="POST">
                    @csrf

                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required="required" value="{{ old('name') }}">
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required="required" value="{{ old('email') }}">
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    <label for="message" class="control-label">Message</label>
                    <textarea type="message" name="message" id="message" cols="10" rows="10" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" required="required">{{ old('message') }}</textarea>
                    {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                </div>
                
                </form>
            </div>
        </div>
        
    </div>
@endsection