<li class="{{ Request::is('symptomes*') ? 'active' : '' }}">
    <a href="{{ route('symptomes.index') }}"><i class="fa fa-edit"></i><span>Symptomes</span></a>
</li>



<li class="{{ Request::is('agents*') ? 'active' : '' }}">
    <a href="{{ route('agents.index') }}"><i class="fa fa-edit"></i><span>Agents</span></a>
</li>

<li class="{{ Request::is('agentSanitaires*') ? 'active' : '' }}">
    <a href="{{ route('agentSanitaires.index') }}"><i class="fa fa-edit"></i><span>Agent Sanitaires</span></a>
</li>

