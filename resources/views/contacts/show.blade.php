@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')

<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div style="    background-color: #f1e4c6;     color: #768856;       border-color: #768856; " class="alert alert-light container" role="alert">
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                
                <li class="list-unstyled-item list-hours-item d-flex">
                    الاسم : {{$contact->name}}
                </li>

                <li class="list-unstyled-item list-hours-item d-flex">
                    الايميل : {{$contact->email}}
                </li>

                <li class="list-unstyled-item list-hours-item d-flex">
                    الرساله : {{$contact->content}}
                </li>

            </ul>
         </div>
    </div>
</section>


@endsection
