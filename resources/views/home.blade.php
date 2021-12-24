@extends('layouts.app')

@section('title', 'الرئيسيه')

@section('content')



<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/dr.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{ config('app.name') }}</h3>
            <p class="fst-italic">
            {{$about->content}}
            </p>
           
            <p>
            {{$about->title}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>المنيو</p>
        </div>

        <div class="row" data-aos="fade-up" >
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">

                <li data-filter="*" class="filter-active">All</li>
                @forelse($categories as $category)
                <li data-filter="filter-{{$category->name}}" >{{$category->name}}</li>
                @empty
                <p>لا يوجد شيئ </p>
                @endforelse 

            </ul>
          </div>
        </div>

        <div class="row menu-container border border-secondary rounded" data-aos="fade-up" data-aos-delay="200">

            
            @forelse($category->menus as $menu)
            <div  @forelse($categories as $category)  class="col-lg-6 menu-item   filter-{{$menu->category->name}}  "  @empty @endforelse >
                
                <div class="menu-content">
                    <a href="#">{{$menu->name}}</a><span>${{$menu->price}}</span>
                </div>
                <div class="menu-ingredients">
                    {{$menu->content}}
                </div>
            </div>
            @empty
            <p>لا يوجد شيئ </p>
            @endforelse  

          

        </div>
        

      </div>
    </section><!-- End Menu Section -->










    


<!-- ======= Events Section ======= -->
<section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>العروض</p>
        </div>

        <div class="events-slider swiper border border-secondary rounded container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


          @forelse($offers as $offer)

            <div class="swiper-slide">
              <div class="row event-item">
                
                <div class=" content" style="margin: 11px 30px 0 0;">
                  <h3>{{$offer->title}}</h3>
                  <div class="price">
                    <p><span>${{$offer->price}}</span></p>
                  </div>
                  <p class="fst-italic">
                  {{$offer->content}}
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          @empty
            <p></p>
          @endforelse    
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->









@endsection
