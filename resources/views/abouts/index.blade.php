@extends('layouts.app')

@section('title', 'عن المقهى ')

@section('content')

<section id="specials" class="specials">
     <div class="container" data-aos="fade-up">
          <div style=" color: #122c14;" class="pull-left">
                <h2>بيانات المقهى</h2>
            </div>
          <div class="card"  style="background-color: #98a175;">
                <br><br>
               <div class="row">
                    @forelse($abouts as $about)
                         <div class="col-xl-9 mx-auto">
                              <div class="cta-inner bg-faded text-center rounded">
                                   <div class="row">

                                        <div class="col-md-4 mt-3">
                                             <p>الايميل : </p>
                                             <p class="mb-0">{{$about->email}}</p>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                             <p>تيك توك : </p>
                                             <p class="mb-0">{{$about->tiktok}}</p>
                                        </div>


                                        <div class="col-md-4 mt-3">
                                             <p>السناب : </p>
                                             <p class="mb-0">{{$about->snap}}</p>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                             <p>الانستقرام : </p>
                                             <p class="mb-0">{{$about->inst}}</p>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                             <p>الجوال : </p>
                                             <p class="mb-0">{{$about->number}}</p>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                             <p>رابط الموقع : </p>
                                             <p class="mb-0">{{$about->location}}</p>
                                        </div>

                                        <div class="col-md-4 mt-3">
                                             <p> العنوان : </p>
                                             <p class="mb-0">{{$about->address}}</p>
                                        </div>

                                        <div class="col-md-12">
                                             <p>اوقات العمل : </p>
                                             <p class="mb-0">{!! nl2br( $about->worktime )!!}</p>
                                        </div>

                                        <div class="col-md-12">
                                             <p>المحتوى : </p>
                                             <p class="mb-0">{!! nl2br( $about->content )!!}</p>
                                        </div>
                                   </div>
                                        <p class="mb-0">   <a class="btn  btn-outline-light" href="{{route('abouts.edit',$about)}}">تعديل  </a>  </p>
                              </div>
                         </div>
                    @empty
                     <p>لا توجد حجوزات</p>
                    @endforelse
               </div>
               <br>
               <br>
          </div>
     </div>
</section>

      

@endsection
