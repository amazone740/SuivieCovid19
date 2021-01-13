<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Cni Agent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cni_agent', 'Cni Agent:') !!}
    {!! Form::text('cni_agent', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Residence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville_residence', 'Ville Residence:') !!}
    {!! Form::text('ville_residence', null, ['class' => 'form-control']) !!}
</div>

<!-- Centre Provenance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centre_provenance', 'Centre Provenance:') !!}
    {!! Form::text('centre_provenance', null, ['class' => 'form-control']) !!}
</div>

<!-- Debut Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debut_service', 'Debut Service:') !!}
    {!! Form::text('debut_service', null, ['class' => 'form-control','id'=>'debut_service']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#debut_service').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agentSanitaires.index') }}" class="btn btn-default">Cancel</a>
</div>
