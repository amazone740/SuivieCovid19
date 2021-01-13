@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agent Sanitaire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agentSanitaire, ['route' => ['agentSanitaires.update', $agentSanitaire->id], 'method' => 'patch']) !!}

                        @include('agent_sanitaires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection