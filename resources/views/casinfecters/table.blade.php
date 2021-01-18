<div class="table-responsive">
    <table class="table" id="casinfecters-table">
        <thead>
            <tr>
                <th>Patient Id</th>
        <th>Statut Id</th>
        <th>Symptome Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($casinfecters as $casinfecter)
            <tr>
                <td>{{ $casinfecter->patient_id }}</td>
            <td>{{ $casinfecter->statut_id }}</td>
            <td>{{ $casinfecter->symptome_id }}</td>
                <td>
                    {!! Form::open(['route' => ['casinfecters.destroy', $casinfecter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('casinfecters.show', [$casinfecter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('casinfecters.edit', [$casinfecter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
