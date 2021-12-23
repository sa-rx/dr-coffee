@extends('layouts.app')

@section('title', 'عن المقهى ')

@section('content')

<div class="container">
<a  class="btn btn-outline-dark mx-auto mb-2" href="{{route('abouts.create')}}"><i class="fas fa-plus-square"></i>  اضافة فئه </a>

<section class="page-section cta">
            <div class="container">
                <div class="row">

                @forelse($abouts as $about)

                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <p class="mb-0">{{$about->title}}</p>
                            <div class="row">

                                <div class="col-md-2">
                                     <p class="mb-0">{{$about->snap}}</p>
                                </div>

                                <div class="col-md-2">
                                     <p class="mb-0">{{$about->inst}}</p>
                                </div>

                                <div class="col-md-2">
                                     <p class="mb-0">{{$about->number}}</p>
                                </div>

                                <div class="col-md-2">
                                     <p class="mb-0">{{$about->location}}</p>
                                </div>

                                <div class="col-md-2">
                                     <p class="mb-0">{{$about->address}}</p>
                                </div>

                                <div class="col-md-12">
                                     <p class="mb-0">{{$about->worktime}}</p>
                                </div>

                            </div>
                            <p class="mb-0">   <a class="btn btn-primary" href="{{route('abouts.edit',$about)}}">تعديل  </a>  </p>
                        </div>
                    </div>

                    @empty
                          <p>لا توجد حجوزات</p>
                     @endforelse


                </div>
            </div>
        </section>

      
</div>

@endsection
