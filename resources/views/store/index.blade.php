@extends('layouts.app')

@section('title', 'المنتجات ')

@section('content')






    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
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









@endsection
