@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cas infecté
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($casinfecter, ['route' => ['casinfecters.update', $casinfecter->id], 'method' => 'patch']) !!}

                        @include('casinfecters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection