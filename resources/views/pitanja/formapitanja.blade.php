<h2 class="mt-5 text-center">Postavite pitanje: </h2>
<hr class="w-60 mx-auto">
<div class="w-30 mx-auto mt-4">
    {!! Form::open(['action' => 'App\Http\Controllers\PitanjaController@store', 'method' 
        => 'POST']) !!}
        <div class="form-group mb-3">
            {{Form::label('naslov', 'NASLOV', ['class' => 'fs-5'])}}
            {{Form::text('naslov', '', ['class' =>'form-control polja'])}}
        </div>
        <div class="form-group">
            {{Form::label('sadrzaj', 'SADRŽAJ' , ['class' => 'fs-5'])}}
            {{Form::textarea('sadrzaj', '', ['class' =>'form-control polja'])}}
        </div>
        <div class="text-center mt-3">
        {{Form::submit('Postavi pitanje', ['class'=>'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
    </div>