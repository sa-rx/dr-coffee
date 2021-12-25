@extends('layouts.app')

@section('title', 'المنتجات ')

@section('content')






    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>منتجاتنا</p>
        </div>

        <div class="row">
          @forelse($products as $product)
          <div class="col-md-4">
            <div class="card mb-4 mt-3 ">
                <div class="custom-card-image" style="background-image: url(/images/products/{{$product->img}}); height: 200px;  background-size: cover;    background-position: center;  background-size: contain; background-repeat: no-repeat;  background-position: center;"> </div>
              <div class="card-body ">
                <h5 class="card-title "> <a class="btn" href="{{route('products.show',$product)}}">{{$product->name}} </a></h5>

                @if(isset($product->offer_price))
                <b class="text-secondary">{{$product->offer_price}} ريال</b>
                <p class="text-danger"><s>{{$product->price}}ريال </s></p>
                @else
                <p class="">{{$product->price}} ريال</p>
                @endif
                <a class="btn btn-outline-secondary" href="{{route('products.show',$product)}}">{{$product->name}} </a>
              </div>

            </div>

          </div>
          @empty
          <p>لا توجد خدمات</p>
          @endforelse
        </div>

      </div>
    </section><!-- End Specials Section -->





     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>منتجاتنا</h2>
        </div>

        <div class="row">
          @forelse($products as $product)

            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>                <a  href="{{route('products.show',$product)}}">{{$product->name}} </a></span>
                <h4> {!! nl2br( $product->content )!!}</h4>

                @if(isset($product->offer_price))
                <p> {{$product->offer_price}} ريال</p>
                <p > <s>{{$product->price}}ريال </s></p>
                @else
                <p class="">{{$product->price}} ريال</p>
                @endif
                <a class="btn btn-outline-light" target="_blank" href=" https://wa.me/966556781462?text=المنتج : {{$product->name}}%20
                @if(isset($product->offer_price))
                سعر العرض : {{$product->offer_price}}
                @else
                السعر : {{$product->price}}%20
                @endif
                ">للطلب</a>

              

              </div>
            </div>
          @empty
            <p>لا توجد خدمات</p>
          @endforelse

        </div>

      </div>
    </section><!-- End Why Us Section -->








@endsection
