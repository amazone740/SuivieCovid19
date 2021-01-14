@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Questionnaire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($questionnaire, ['route' => ['questionnaires.update', $questionnaire->id], 'method' => 'patch']) !!}

                        @include('questionnaires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection