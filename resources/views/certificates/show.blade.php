@extends('layouts.app')

@section('title', 'بيانات المتدربين')

@section('content')

    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="alert alert-light container" role="alert">
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم : {{$certificate->name}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         الايميل : {{$certificate->email}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         رقم الجوال : {{$certificate->number}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                        تاريخ التدريب : {{$certificate->date}}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
