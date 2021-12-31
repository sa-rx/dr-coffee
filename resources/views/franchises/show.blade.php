@extends('layouts.app')

@section('title', ' بيانات الامتياز التجاري ')

@section('content')
 
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="alert alert-light container" role="alert">
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم : {{$franchise->name}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         الايميل : {{$franchise->email}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         رقم الجوال : {{$franchise->number}}
                    </li>




                    <li class="list-unstyled-item list-hours-item d-flex">
                        {{$franchise->qualification}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                       {{$franchise->commercial_experie}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         {{$franchise->area}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                        {{$franchise->investment_value}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                       {{$franchise->solvency}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         {{$franchise->date}}
                    </li>

                    <li class="list-unstyled-item list-hours-item d-flex">
                         {!! nl2br( $franchise->reason_franchise )!!}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                         {!! nl2br( $franchise->know_us )!!}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
