@extends('layouts.app')

@section('title', 'الاصناف ')

@section('content')

<div class="container">
                <div class="alert alert-light" role="alert">
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم: {{$product->name}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        السعر:   {{$product->price}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        العرض:  {{$product->offer_price}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        <img src="{{asset('images/products/'.$product->img)}}" width="70px" height="70px"; alt="{{$product->name}}">
                        </li>

                        

                        

                        <li class="list-unstyled-item list-hours-item d-flex">
                         المحتوى:   {!! nl2br( $product->content )!!}
                        </li>


                        @if($product->available == 1)
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
