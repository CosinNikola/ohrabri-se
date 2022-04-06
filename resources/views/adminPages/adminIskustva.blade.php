@extends('adminPages/adminNav')
@section('content')
<div class="w-100 mx-2">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">ID</th>
        <th scope="col">ID Autora</th>
        <th scope="col">Ime Autora</th>
        <th scope="col">Naslov</th>
        <th scope="col">Sadržaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach($iskustva as $iskustvo)
      <tr class="text-center">
      <th scope="row">{{$iskustvo->id}}</th>
      <td>{{$iskustvo->id_autora}}</td>
      <td>{{$iskustvo->ime_autora}}</td>
      <td>{{$iskustvo->naslov}}</td>
      <td>{{$iskustvo->sadrzaj}}</td>
        <td>{!!Form::open(['action'=>['App\Http\Controllers\AdminController@deleteIskustvo', $iskustvo->id], 'method'=>'POST'])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close()!!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection