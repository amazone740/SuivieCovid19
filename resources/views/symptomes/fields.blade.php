<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Origine Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('origine', 'Origine:') !!}
    {!! Form::textarea('origine', null, ['class' => 'form-control']) !!}
</div>

<!-- Cible Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cible', 'Cible:') !!}
    {!! Form::text('cible', null, ['class' => 'form-control']) !!}
</div>

<!-- Mesure De Riposte Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mesure_de_riposte', 'Mesure De Riposte:') !!}
    {!! Form::textarea('mesure_de_riposte', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('symptomes.index') }}" class="btn btn-default">Cancel</a>
</div>
