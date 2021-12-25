@extends('layouts.app')

@section('title', 'الاصناف ')

@section('content')

<div class="container">
                <div class="alert alert-light" role="alert">
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                        <h3> {{$product->name}}</h3>
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        @if(isset($product->offer_price))
                       <h6> {{$product->price}} ريال   |   العرض {{$product->offer_price}} ريال  </h6>
                       @else
                       <h6> {{$product->price}} ريال</h6>
                       @endif
                        </li>

                        

                        

                        <li class="list-unstyled-item list-hours-item d-flex">
                        <h6>  المحتوى:   {!! nl2br( $product->content )!!} </h6>
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

                        <a class="btn btn-outline-dark" target="_blank" href=" https://wa.me/966556781462?text=المنتج : {{$product->name}}
                            %20 @if(isset($product->offer_price))
                            سعر العرض : {{$product->offer_price}}
                            @else
                            السعر : {{$product->price}}%20
                            @endif
                            ">للطلب
                        </a>
                        
                        
                    </ul>
                </div>
            </div>

@endsection
