@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <section class="container pt-4">
        <div class="d-flex flex-column align-items-center">
            <div class="w-50">
                <h2>Get In Touch</h2>
                <p class="text-muted">
                    If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>
                </p>

                <form action="{{ route('contact.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="msg">Your message</label>
                        <textarea class="form-control {{ ($errors->has('message')) ? 'is-invalid' : '' }}" name="msg" rows="10" required>{{ old('msg') }}</textarea>
                        {!! $errors->first('msg', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit Enquiry <i class="fa fa-arrow-right ml-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
