@extends('layouts.app')

@section('title', 'المنتجات ')

@section('content')

<div class="container">
<a  class="btn btn-outline-dark mx-auto mb-2" href="{{route('products.create')}}"><i class="fas fa-plus-square"></i>  اضافة منتج </a>

<table class="table table-responsive-xl table-hover  ">
                                    <thead  class="">
                                        <tr>
                                        <th scope="col"> الصوره</th>
                                        <th scope="col">اسم المنتج</th>
                                        <th scope="col " >السعر</th>
                                        <th scope="col">العرض</th>
                                        <th scope="col"> متوفر</th>
                                        <th scope="col">عرض</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                            @forelse($products as $product)
                                            <tr>
                                                
                                                <td >
                                                    <img src="{{asset('images/products/'.$product->img)}}" width="70px" height="70px"; alt="{{$product->name}}">
                                                </td>
                                                <td ><a href="{{route('products.show',$product)}}">{{$product->name}}</a></td>

                                               
                                                <td>{{$product->price}}</td>
                                                
                                                <td>{{$product->offer_price}}</td>
                                               

                                                


                                            

                                              

                                              


                                                @if($product->available == 1)
                                                    <td class="ms-auto">متوفر</td> 
                                                @else
                                                    <td class="ms-auto">غير متوفر</td> 
                                                @endif

                                              


                                                <td> <a class="btn btn-outline-primary" href="{{route('products.edit',$product)}}">  <i class="fas fa-pen-square"></i></a> </td>
                                               
                                                <td>
                                                
                                                <form method="post" action="{{route('products.destroy',$product)}}">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
                                                </form>

                                            </td>
                                            </tr>

                                                @empty
                                            <p>لا توجد حجوزات</p>
                                                @endforelse
                                    </tbody>
                            </table>

</div>

@endsection
