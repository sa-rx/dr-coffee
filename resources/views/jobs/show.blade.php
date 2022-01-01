@extends('layouts.app')

@section('title', 'بيانات التوظيف')

@section('content')

    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div style="    background-color: #f1e4c6;     color: #768856;       border-color: #768856; " class="alert alert-light container" role="alert">
                <h3> {{$job->name}}</h3>
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                         رقم الجوال : {{$job->number}}
                    </li>

                    <li class="list-unstyled-item list-hours-item d-flex">
                         العمر : {{$job->age}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    @if($job->sex == 1)
                      الجنس :   ذكر
                    @else
                         انثى : الجنس 
                    @endif
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                        الخبرات السابقه :
                        <br>
                        {!! nl2br( $job->previous_experience )!!}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
