<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $symptome->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $symptome->description }}</p>
</div>

<!-- Origine Field -->
<div class="form-group">
    {!! Form::label('origine', 'Origine:') !!}
    <p>{{ $symptome->origine }}</p>
</div>

<!-- Cible Field -->
<div class="form-group">
    {!! Form::label('cible', 'Cible:') !!}
    <p>{{ $symptome->cible }}</p>
</div>

<!-- Mesure De Riposte Field -->
<div class="form-group">
    {!! Form::label('mesure_de_riposte', 'Mesure De Riposte:') !!}
    <p>{{ $symptome->mesure_de_riposte }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $symptome->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $symptome->updated_at }}</p>
</div>

