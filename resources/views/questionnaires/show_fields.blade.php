<!-- Intituler Field -->
<div class="form-group">
    {!! Form::label('intituler', 'Intituler:') !!}
    <p>{{ $questionnaire->intituler }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $questionnaire->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $questionnaire->updated_at }}</p>
</div>

