<li class="{{ Request::is('symptomes*') ? 'active' : '' }}">
    <a href="{{ route('symptomes.index') }}"><i class="fa fa-edit"></i><span>Symptomes</span></a>
</li>

<li class="{{ Request::is('agentSanitaires*') ? 'active' : '' }}">
    <a href="{{ route('agentSanitaires.index') }}"><i class="fa fa-edit"></i><span>Agent Sanitaires</span></a>
</li>




<li class="{{ Request::is('questionnaires*') ? 'active' : '' }}">
    <a href="{{ route('questionnaires.index') }}"><i class="fa fa-edit"></i><span>Questionnaires</span></a>
</li>




<li class="{{ Request::is('statures*') ? 'active' : '' }}">
    <a href="{{ route('statures.index') }}"><i class="fa fa-edit"></i><span>Statuts</span></a>
</li>

<li class="{{ Request::is('hopitals*') ? 'active' : '' }}">
    <a href="{{ route('hopitals.index') }}"><i class="fa fa-edit"></i><span>Hopitaux</span></a>
</li>

<li class="{{ Request::is('casinfecters*') ? 'active' : '' }}">
    <a href="{{ route('casinfecters.index') }}"><i class="fa fa-edit"></i><span>Casinfectés</span></a>
</li>

