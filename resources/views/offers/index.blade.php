@extends('layouts.app')

@section('title', 'العروض ')

@section('content')

<div class="container">
        <a  class="btn btn-outline-light mx-auto mb-2" href="{{route('offers.create')}}"><i class="fas fa-plus-square"></i>  اضافة عرض </a>   
    <table class="table table-light table-striped  table-hover  ">
        <thead  class="">
            <tr>                            
                <th scope="col">الاسم</th>
                <th scope="col">السعر</th>
                <th scope="col"> متوفر</th>
                <th scope="col">عرض</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>
                      
        <tbody>
            @forelse($offers as $offer)
                <tr>
                    <td><a  class="text-dark" href="{{route('offers.show',$offer)}}"> {{$offer->title}}</a></td>
                    <td>{{$offer->price}}</td>

                        @if($offer->available == 1)
                            <td class="ms-auto">متوفر</td> 
                        @else
                            <td class="ms-auto">غير متوفر</td> 
                        @endif

                    <td> <a class="btn btn-outline-primary" href="{{route('offers.edit',$offer)}}"><i class="fas fa-pen-square"></i>  </a> </td>

                    <td>
                        <form method="post" action="{{route('offers.destroy',$offer)}}"href="">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>

            @empty
                <p>لا توجد عروض</p>
            @endforelse
        </tbody>

    </table>
</div>        


@endsection
