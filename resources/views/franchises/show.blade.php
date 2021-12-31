@extends('layouts.app')

@section('title', ' بيانات الامتياز التجاري ')

@section('content')
 
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div style="    background-color: #f1e4c6;     color: #768856;       border-color: #768856; " class="alert container" role="alert">
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
                    المؤهل الاكاديمي او التخصص :  {{$franchise->qualification}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    سنوات الخبره : {{$franchise->commercial_experie}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    المنطقة المقترحة لبدء الامتياز :{{$franchise->area}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    حجم الاستثمار للوحده : {{$franchise->investment_value}}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    هل تتوفر الملائه الماليه لقيمة الاستثمار؟ : 
                    @if($franchise->solvency == 0)
                    لا تتوفر
                    @else
                    تتوفر
                    @endif
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    الموعد المقترح لبدء العمل : {{$franchise->date}}
                    </li>

                    <li class="list-unstyled-item list-hours-item d-flex">
                    ماهو سبب اهتمامك بالامتياز التجاري :  {!! nl2br( $franchise->reason_franchise )!!}
                    </li>
                    <li class="list-unstyled-item list-hours-item d-flex">
                    كيف سمعت او تعرفت علينا : {!! nl2br( $franchise->know_us )!!}
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
