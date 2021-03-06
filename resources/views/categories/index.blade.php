@extends('layouts.app')

@section('title', 'الفئات ')

@section('content')

<div class="container">
       <a  style=" color: #98a175; "  class="btn btn-outline-light mx-auto mb-2" href="{{route('categories.create')}}"><i class="fas fa-plus-square"></i>  اضافة فئه </a>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="cta-inner bg-faded text-center rounded">
                <table  style=" color: #98a175; "  class="table table-light table-striped  table-hover  ">

                    <thead  class="">
                        <tr>
                            <th scope="col">الاسم</th>
                            <th scope="col">تعديل</th>
                            <th scope="col">حذف</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td><a class="text-dark" href="{{route('categories.show',$category)}}">{{$category->name}}</a></td>
                                <td> <a class="btn btn-outline-primary" href="{{route('categories.edit',$category)}}"><i class="fas fa-pen-square"></i>  </a> </td>
                               
                                <td>
                                    <form method="post" action="{{route('categories.destroy',$category)}}"href="">
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
        </div>
    </div>
</div>

@endsection
