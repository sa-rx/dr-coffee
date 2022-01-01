@extends('layouts.app')
@section('title', ' ادارة المستخدمين')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div  style=" color: #122c14;" class="pull-left">
                <h2>ادارة المستخدمين</h2>
            </div>
            <div class="pull-right">
                @can('اضافة مستخدم')
                <a class="btn btn-success" href="{{ route('users.create') }}">انشاء مستخدم</a>
                @endcan 
            </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table  style=" color: #98a175; "  class="table table-light table-responsive-xl table-hover  ">
    <tr>
        <th>#</th>
        <th>الاسم</th>
        <th>الايميل</th>
        <th>نوع المستخدم</th>
        <th width="280px">Action</th>
    </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
                @endif
                </td>
                <td>
                 @can('اضافة مستخدم')
                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">عرض</a>
                 @endcan 
                 
                 @can('اضافة مستخدم')
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">تعديل</a>
                 @endcan

                 @can('اضافة مستخدم')
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 @endcan 
                </td>
            </tr>
        @endforeach
    </table>
</div>

{!! $data->render() !!}
@endsection