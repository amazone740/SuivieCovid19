<div class="table-responsive">
    <table class="table" id="agents-table">
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
        @foreach($agents as $agent)
            <tr>
                <td>{{ $agent->user_id }}</td>
            <td>{{ $agent->cni_agent }}</td>
            <td>{{ $agent->ville_residence }}</td>
            <td>{{ $agent->centre_provenance }}</td>
            <td>{{ $agent->debut_service }}</td>
                <td>
                    {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agents.show', [$agent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agents.edit', [$agent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
