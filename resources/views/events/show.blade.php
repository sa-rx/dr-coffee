@extends('layouts.app')

@section('title', ' بيانات الحجز ')

@section('content')

    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="alert alert-light container" role="alert">
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم : {{$event->name}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         الايميل : {{$event->email}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         رقم الجوال : {{$event->number}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                      الجهه المسؤله : {{$event->responsible_party}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                       عدد الحضور: {{$event->audience}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                        تاريخ التدريب : {{$event->date}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                       الملاحظات : {!! nl2br( $event->content )!!}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
