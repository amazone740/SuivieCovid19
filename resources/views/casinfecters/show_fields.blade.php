<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $casinfecter->patient_id }}</p>
</div>

<!-- Statut Id Field -->
<div class="form-group">
    {!! Form::label('statut_id', 'Statut Id:') !!}
    <p>{{ $casinfecter->statut_id }}</p>
</div>

<!-- Symptome Id Field -->
<div class="form-group">
    {!! Form::label('symptome_id', 'Symptome Id:') !!}
    <p>{{ $casinfecter->symptome_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $casinfecter->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $casinfecter->updated_at }}</p>
</div>

