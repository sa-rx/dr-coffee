@extends('layouts.app')

@section('title', 'بيانات التوظيف')

@section('content')

<div class="container">
<h3  style=" color: #98a175; ">بيانات التوظيف</h3>
    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col"> رقم الجوال</th>
                <th scope="col"> العمر</th>
                <th scope="col">الجنس </th>

                <th scope="col">حذف</th>
            </tr>
        </thead> 

        <tbody>
            @forelse($jobs as $job)
                <tr>
                    <td><a class="text-dark" href="{{route('jobs.show',$job)}}"> {{$job->name}}</a></td>
                    <td>{{$job->number}}</td>
                    <td>{{$job->age}}</td>

                    @if($job->sex == 1)
                    <td>ذكر</td>
                    @else
                    <td>انثى</td>
                    @endif


                    <td>
                        <form method="post" action="{{route('jobs.destroy',$job)}}"href="">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>

            @empty
                <p>لا توجد بيانات</p>
            @endforelse
        </tbody>
        
    </table>

</div>

@endsection
