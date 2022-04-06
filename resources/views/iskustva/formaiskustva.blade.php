<h2 class="mt-5 text-center">Podelite iskustvo: </h2>
<hr class="w-60 mx-auto">
<div class="w-30 mx-auto mt-4">
    {!! Form::open(['action' => 'App\Http\Controllers\IskustvaController@store', 'method' 
        => 'POST']) !!}
        <div class="form-group mb-3">
            {{Form::label('naslov', 'NASLOV', ['class' => 'fs-5'])}}
            {{Form::text('naslov', '', ['class' =>'form-control polja'])}}
            @error('naslov')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('sadrzaj', 'SADRŽAJ', ['class' => 'fs-5'])}}
            {{Form::textarea('sadrzaj', '', ['class' =>'form-control polja'])}}
            @error('sadrzaj')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="text-center mt-3">
        {{Form::submit('Podeli iskustvo', ['class'=>'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
</div>