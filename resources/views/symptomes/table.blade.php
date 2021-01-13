<div class="table-responsive">
    <table class="table" id="symptomes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Origine</th>
        <th>Cible</th>
        <th>Mesure De Riposte</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($symptomes as $symptome)
            <tr>
                <td>{{ $symptome->name }}</td>
            <td>{{ $symptome->description }}</td>
            <td>{{ $symptome->origine }}</td>
            <td>{{ $symptome->cible }}</td>
            <td>{{ $symptome->mesure_de_riposte }}</td>
                <td>
                    {!! Form::open(['route' => ['symptomes.destroy', $symptome->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('symptomes.show', [$symptome->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('symptomes.edit', [$symptome->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
