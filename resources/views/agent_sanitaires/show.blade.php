@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agent Sanitaire
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('agent_sanitaires.show_fields')
                    <a href="{{ route('agentSanitaires.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
