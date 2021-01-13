<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $agent->user_id }}</p>
</div>

<!-- Cni Agent Field -->
<div class="form-group">
    {!! Form::label('cni_agent', 'Cni Agent:') !!}
    <p>{{ $agent->cni_agent }}</p>
</div>

<!-- Ville Residence Field -->
<div class="form-group">
    {!! Form::label('ville_residence', 'Ville Residence:') !!}
    <p>{{ $agent->ville_residence }}</p>
</div>

<!-- Centre Provenance Field -->
<div class="form-group">
    {!! Form::label('centre_provenance', 'Centre Provenance:') !!}
    <p>{{ $agent->centre_provenance }}</p>
</div>

<!-- Debut Service Field -->
<div class="form-group">
    {!! Form::label('debut_service', 'Debut Service:') !!}
    <p>{{ $agent->debut_service }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $agent->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $agent->updated_at }}</p>
</div>

