@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')

    <div class="container">
    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$contact->name}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$contact->email}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$contact->content}}
                                                       
                                                    </li>
    </ul>
    </div>

@endsection
