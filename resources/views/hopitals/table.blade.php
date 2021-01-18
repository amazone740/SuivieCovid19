<div class="table-responsive">
    <table class="table" id="hopitals-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Localisation</th>
        <th>Phonenumber</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hopitals as $hopital)
            <tr>
                <td>{{ $hopital->name }}</td>
            <td>{{ $hopital->localisation }}</td>
            <td>{{ $hopital->phonenumber }}</td>
                <td>
                    {!! Form::open(['route' => ['hopitals.destroy', $hopital->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hopitals.show', [$hopital->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('hopitals.edit', [$hopital->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
