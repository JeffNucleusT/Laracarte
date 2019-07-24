@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <section class="container pt-4">
        <div class="d-flex flex-column align-items-center">
            <div class="w-50">
                <h2>Get In Touch</h2>
                <p class="text-muted">
                    If you having trouble with this service, please <a href="mailto:jeffserwork7@gmail.com">ask for help</a>
                </p>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your message</label>
                        <textarea class="form-control" id="message" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit Enquiry <i class="fa fa-arrow-right ml-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
