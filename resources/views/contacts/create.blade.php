@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact ">
    <div class="container" data-aos="fade-up">
            <div  class="section-title">
                <h2 style=" color: #98a175;" >تواصل معنا</h2>
            </div> 
                <div class="row ">         
                   
                    
                @if(isset($about->email))
                    <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-envelope fa-2x"></i> </button>  </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p class="text-center"  style=" color: #98a175;  border-color: #98a175" > <a  style=" color: #98a175;  border-color: #98a175"  target="_blank"  href=" {{$about->email}} "> {{$about->email}} </a> </p>
                        </div>
                    </div>
                @else
                
                @endif

                @if(isset($about->number))
                    <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">  <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p class="text-center"  style=" color: #98a175;  border-color: #98a175" >{{$about->number}}  </p>
                        </div>
                    </div>
                
                @else
                
                @endif
                    
                @if(isset($about->tiktok))
                   <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg"> <i>TikTok</i> </button>  </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p class="text-center"  style=" color: #98a175;  border-color: #98a175" > <a style=" color: #98a175;  border-color: #98a175"  target="_blank" href="https://vm.tiktok.com/ZSeH5QUTs/">{{$about->tiktok}} </a>  </p>
                        </div>
                    </div>
                @else
                
                @endif

                @if(isset($about->inst))
                    <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1 class="text-center  text-secondary">  <button style=" color: #98a175;  border-color: #98a175" class="btn  btn-outline-light btn-lg">  <i class="fab fa-instagram fa-2x"></i>   </button> </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p  class="text-center"><a   style=" color: #98a175;  border-color: #98a175"  target="_blank" class="text-center " href="https://www.instagram.com/{{$about->inst}}">  {{$about->inst}}   </a> </p>
                        </div>
                    </div>

                @else
                
                @endif



                @if(isset($about->snap))
                    <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                           <h1 class="text-center  text-secondary">  <button style=" color: #98a175;  border-color: #98a175" class="btn  btn-outline-light btn-lg">  <i class="fab fa-snapchat fa-2x"></i>  </button>   </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p class="text-center"><a  style=" color: #98a175;  border-color: #98a175" target="_blank" class="text-center "  href="http://story.snapchat.com/u/{{$about->snap}}"> {{$about->snap}}</a></p>
                        </div>
                     </div>
                     @else
                
                @endif
                @if(isset($about->address))
                    <div class="col-sm-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1 class="text-center  text-secondary">  <button style=" color: #98a175;  border-color: #98a175" class="btn  btn-outline-light btn-lg">   <i class="fas fa-map-marker-alt fa-2x"></i>   </button>   </h1>
                        </a>
                        <div id="demo" class="collapse">
                            <p  style=" color: #98a175;  border-color: #98a175" class="text-center">{{$about->address}}</p>
                            <p class="text-center"><a  style=" color: #98a175;  border-color: #98a175"  target="_blank" class="text-center  " href="{{$about->location}}">موقع المقهى</a></p>
                        </div>
                    </div>

                    @else
                
                @endif
            </div>
                <br><br><br>
                @if(isset($about->worktime))
                <div class="cta-inner bg-faded text-center rounded">
                    <div class="row ">
                            <b  style=" color: #122c14;  border-color: #98a175" class="mb-0">  اوقات العمل</b>
                        <div class="alert  col-md-12" role="alert">
                            <h6  style=" color: #98a175;  border-color: #98a175" class="mb-0">  {!! nl2br( $about->worktime )!!}</h6>
                        </div>
                    </div>
                </div>
                @else
                
                @endif
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background-color: #768856;">
                    <div class="card-header"><h3>رسالتك</h3></div>

                        <div class="card-body">
                            <form action="{{route('contacts.store')}}" method="post">
                                <div class="row">
                                    @csrf

                                    <div class="form-group col-md-12">
                                        <label for="name">اسم </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group ">
                                        <label for="email">الايميل</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <label for="content">المحتوى</label>
                                        <textarea name="content" class="form-control"></textarea>
                                    </div>
                                    
                                    <br>
                                    <br>

                                    <div class="form-group">
                                        <button class="btn btn btn-outline-light"> ارسال <i class="fas fa-paper-plane"></i>   </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<!-- End Contact Section -->


@endsection
