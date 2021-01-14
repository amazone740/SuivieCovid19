<div class="table-responsive">
    <table class="table" id="questionnaires-table">
        <thead>
            <tr>
                <th>Intituler</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($questionnaires as $questionnaire)
            <tr>
                <td>{{ $questionnaire->intituler }}</td>
                <td>
                    {!! Form::open(['route' => ['questionnaires.destroy', $questionnaire->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('questionnaires.show', [$questionnaire->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('questionnaires.edit', [$questionnaire->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
