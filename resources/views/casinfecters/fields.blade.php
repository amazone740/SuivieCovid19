<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::select('patient_id', $patientItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Statut Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut_id', 'Statut Id:') !!}
    {!! Form::select('statut_id', $statureItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Symptome Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('symptome_id', 'Symptome Id:') !!}
    {!! Form::select('symptome_id', $symptomeItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('casinfecters.index') }}" class="btn btn-default">Cancel</a>
</div>
