@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Symptome
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($symptome, ['route' => ['symptomes.update', $symptome->id], 'method' => 'patch']) !!}

                        @include('symptomes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection