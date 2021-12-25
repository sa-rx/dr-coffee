@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>تواصل معنا</h2>
             
            </div> 
        

            <div class="row ">

                             
                                    

            <div class="col-md-3">
            <a href="#demo" data-toggle="collapse">
                <h1  class="text-center  text-secondary"><button  style=" color: #767676;  border-color: #767676; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
            </a>

            <div id="demo" class="collapse">
                <p class="text-center" >{{$about->number}}  </p>
            
            </div>
            </div>



            <div class="col-md-3">
            <a href="#demo" data-toggle="collapse">
                <h1 class="text-center  text-secondary">  <button style=" color: #767676;  border-color: #767676" class="btn  btn-outline-light btn-lg">  <i class="fab fa-instagram fa-2x"></i>   </button> </h1>
            </a>

            <div id="demo" class="collapse">
                <p class="text-center"><a   target="_blank" class="text-center " href="https://www.instagram.com/{{$about->inst}}">  {{$about->inst}}   </a> </p>
            </div>
            </div>


            <div class="col-md-3">
            <a href="#demo" data-toggle="collapse">
            <h1 class="text-center  text-secondary">  <button style=" color: #767676;  border-color: #767676" class="btn  btn-outline-light btn-lg">  <i class="fab fa-snapchat fa-2x"></i>  </button>   </h1>
            </a>

            <div id="demo" class="collapse">
                <p class="text-center"><a  target="_blank" class="text-center "  href="http://story.snapchat.com/u/{{$about->snap}}"> {{$about->snap}}</a></p>
            </div>
            </div>


            <div class="col-sm-3">
                <a href="#demo" data-toggle="collapse">
                    <h1 class="text-center  text-secondary">  <button style=" color: #767676;  border-color: #767676" class="btn  btn-outline-light btn-lg">   <i class="fas fa-map-marker-alt fa-2x"></i>   </button>   </h1>
                </a>

                <div id="demo" class="collapse">
                    <p class="text-center">{{$about->address}}</p>
                     <p class="text-center"><a   target="_blank" class="text-center  " href="{{$about->location}}">موقع المقهى</a></p>
                </div>
            </div>


            </div>

<br><br><br>
            <div class="cta-inner bg-faded text-center rounded">


              

                <div class="row ">

                
                        <b class="mb-0">  اوقات العمل</b>
                    
                    
                    <div class="alert  col-md-12" role="alert">
                        <h6 class="mb-0">  {!! nl2br( $about->worktime )!!}</h6>
                    </div>

                </div>
            </div>
            </div>
            </div>

            </section>



            <div class="container">
            <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #4040406b;">
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
            </div></div>
            </div>
    



        
    </div> 
</section><!-- End Contact Section -->


@endsection
