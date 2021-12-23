@extends('layouts.app')
@section('title', ' ادوار المستخدمين')

@section('content')
<div class="container">

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>ادوار المستخدمين</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('roles.create') }}">انشاء صلاحيه</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>#</th>
<th>الاسم</th>
<th width="280px">Action</th>
</tr>
@foreach ($roles as $key => $role)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $role->name }}</td>
<td>
<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">عرض</a>
<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">تعديل</a>

{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
{!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</table>
</div>

{!! $roles->render() !!}
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
@endsection