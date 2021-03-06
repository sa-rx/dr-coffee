@extends('layouts.app')

@section('title', 'الاصناف ')

@section('content')




 

<div class="container "  data-aos="fade-up">
    <div class="alert alert-light section-bg rounded" role="alert">
        <ul style="    color: #f1e4c6;" class="list-unstyled list-hours mb-5 text-left mx-auto">
            <li class="list-unstyled-item list-hours-item d-flex">
                <h3>{{$menu->name}}</h3>
            </li>
            
            <li class="list-unstyled-item list-hours-item d-flex">
                @if(isset($menu->offer_price))
                    <h6> {{$menu->price}} ريال   |   العرض {{$menu->offer_price}} ريال  </h6>
                @else
                    <h6> {{$menu->price}} ريال</h6>
                @endif
            </li>

            <li class="list-unstyled-item list-hours-item d-flex">
                <h6> {{$menu->calories}}   سعره حراريه </h6>
            </li>

            <li class="list-unstyled-item list-hours-item d-flex">
                <h6>  الفئه | {{$menu->category->name}}</h6>
            </li>

            <li class="list-unstyled-item list-hours-item d-flex">
                <h6> المحتوى | {!! nl2br( $menu->content )!!}</h6>
            </li>

            @if($menu->available == 1)
                <li class="list-unstyled-item list-hours-item d-flex">
                    متوفر
                </li>
            @else
                <li class="list-unstyled-item list-hours-item d-flex">
                    غير متوفر
                </li>
            @endif
        </ul>
    </div>
</div>

@endsection
