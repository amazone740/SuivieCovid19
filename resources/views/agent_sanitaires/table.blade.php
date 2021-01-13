
<div class="table-responsive">
    <table class="table" id="agentSanitaires-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Cni Agent</th>
        <th>Ville Residence</th>
        <th>Centre Provenance</th>
        <th>Debut Service</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agentSanitaires as $agentSanitaire)
            <tr>
                <td>{{$agentSanitaire->user->name }}</td>
            <td>{{ $agentSanitaire->cni_agent }}</td>
            <td>{{ $agentSanitaire->ville_residence }}</td>
            <td>{{ $agentSanitaire->centre_provenance }}</td>
            <td>{{ $agentSanitaire->debut_service }}</td>
                <td>
                    {!! Form::open(['route' => ['agentSanitaires.destroy', $agentSanitaire->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agentSanitaires.show', [$agentSanitaire->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agentSanitaires.edit', [$agentSanitaire->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
