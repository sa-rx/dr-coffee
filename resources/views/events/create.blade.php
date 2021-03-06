@extends('layouts.app')

@section('title', 'اضافة بيانات الحجز ')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
                <div class="section-title">
                     <h2 style="color: #122c14;">ادخل بيانات الحجز</h2>
                </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #768856;">
                        <div class="card-body">
                            <form action="{{route('events.store')}}" method="post">
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
                                        <label for="responsible_party">الجهه المسؤله </label>
                                        <input type="text" name="responsible_party" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="audience">عدد الحضور</label>
                                        <input type="number" name="audience" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">تاريخ الحجز</label>
                                        <input class="form-control" type="date" id="time" name="date" >
                                    </div>

                                    <div class="form-group">
                                        <label for="content">المحتوى </label>
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
</section><!-- End Contact Section -->


@endsection
