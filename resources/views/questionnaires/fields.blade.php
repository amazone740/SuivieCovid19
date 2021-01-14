<!-- Intituler Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intituler', 'Intituler:') !!}
    {!! Form::textarea('intituler', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('questionnaires.index') }}" class="btn btn-default">Cancel</a>
</div>
