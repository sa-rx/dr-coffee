@extends('layouts.app')

@section('title', 'العروض ')

@section('content')


<div class="container section-bg rounded"  data-aos="fade-up">    
        <ul style="    color: #f1e4c6;" class="list-unstyled list-hours mb-5 text-left mx-auto">
            <br><br>
            <li class="list-unstyled-item list-hours-item d-flex">
               <h3> {{$offer->title}}</h3>
            </li>

            <li class="list-unstyled-item list-hours-item d-flex">
                {{$offer->price}} ريال
            </li>

            <li class="list-unstyled-item list-hours-item d-flex">
            المحتوى:
               
                {!! nl2br( $offer->content )!!}
            </li>


            @if($offer->available == 1)
                <li class="list-unstyled-item list-hours-item d-flex">
                    متوفر
                </li>
            @else
                <li class="list-unstyled-item list-hours-item d-flex">
                    غير متوفر
                </li>
            @endif
            <br><br>

        </ul>
    </div>
</div>

@endsection
