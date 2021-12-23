@extends('layouts.app')

@section('title', 'الاصناف ')

@section('content')

<div class="container">
                <div class="alert alert-light" role="alert">
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                        الاسم: {{$menu->name}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        السعر:   {{$menu->price}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        سعره حراريه:  {{$menu->offer_price}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        سعره حراريه:   {{$menu->calories}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        الفئه:  {{$menu->category->name}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                        بواسطه:    {{$menu->user_id}}
                        </li>

                        <li class="list-unstyled-item list-hours-item d-flex">
                         المحتوى:   {!! nl2br( $menu->content )!!}
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
