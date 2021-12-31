@extends('layouts.app')

@section('title', 'اضافة البيانات ')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
        <div class="section-title">
                     <h2 style="color: #768856;">اصدار الشهادات</h2>
                </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #98a175;">
                        <div class="card-body">
                            <form action="{{route('certificates.store')}}" method="post">
                                <div class="row">
                                 @csrf
                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>



                                    <div class="form-group ">
                                        <label for="email">الايميل</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">رقم الجوال</label>
                                        <input type="text" name="number" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">تاريخ التدريب</label>
                                        <input class="form-control" type="date" id="time" name="date" >
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
</section><!-- End Contact Section -->


@endsection
