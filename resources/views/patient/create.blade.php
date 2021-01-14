
@section('content')
    <section class="content-header">
        <h1>
            patient
        </h1>
    </section>
    <div class="content">
       
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                   
                <form action="{{route('patient.store')}}" method="POST">
    
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom du Patient : </strong>
                <input type="text" name="name" class="form-control" placeholder="Nom du patient"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom du Patient: </strong>
                <input type="text" name="prenom" class="form-control" placeholder=" prenom"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Ville de Residence: </strong>
                <input type="text" name="Ville_Residence" class="form-control" placeholder="ville de residence"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Telephone: </strong>
                <input type="text" name="telephone" class="form-control" placeholder="numero de telephone"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de naissance: </strong>
                <input type="text" name="dateNais" class="form-control" placeholder="votre dete de naissance ici"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                <input type="text" name="email" class="form-control" placeholder="votre email ici"> 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mot de passe: </strong>
                <input type="text" name="password" class="form-control" placeholder="votre mot de passe ici"> 
            </div>
        </div>


        <div class="col-xs-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
