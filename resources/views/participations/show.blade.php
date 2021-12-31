@extends('layouts.app')

@section('title', 'بيانات المتدربين')

@section('content')

    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div style="    background-color: #f1e4c6;     color: #768856;       border-color: #768856; " class="alert alert-light container" role="alert">
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم : {{$participation->name}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         الايميل : {{$participation->email}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         رقم الجوال : {{$participation->number}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                        اسم الكورس : {{$participation->course->name}}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
