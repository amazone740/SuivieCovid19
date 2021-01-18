<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $hopital->name }}</p>
</div>

<!-- Localisation Field -->
<div class="form-group">
    {!! Form::label('localisation', 'Localisation:') !!}
    <p>{{ $hopital->localisation }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    <p>{{ $hopital->phonenumber }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $hopital->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $hopital->updated_at }}</p>
</div>

