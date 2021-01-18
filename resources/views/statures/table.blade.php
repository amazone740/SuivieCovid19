<div class="table-responsive">
    <table class="table" id="statures-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statures as $stature)
            <tr>
                <td>{{ $stature->name }}</td>
                <td>
                    {!! Form::open(['route' => ['statures.destroy', $stature->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statures.show', [$stature->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('statures.edit', [$stature->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
