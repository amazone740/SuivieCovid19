<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgentSanitaireRequest;
use App\Http\Requests\UpdateAgentSanitaireRequest;
use App\Repositories\AgentSanitaireRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\User;

class AgentSanitaireController extends AppBaseController
{
    /** @var  AgentSanitaireRepository */
    private $agentSanitaireRepository;

    public function __construct(AgentSanitaireRepository $agentSanitaireRepo)
    {
        $this->agentSanitaireRepository = $agentSanitaireRepo;
    }

    /**
     * Display a listing of the AgentSanitaire.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $agentSanitaires = $this->agentSanitaireRepository->all();
        foreach($agentSanitaires as $agentSanitaire){
            $user = User::select('users.*')->Where('id', '=',$agentSanitaire->user_id)->first();
            $agentSanitaire->user=$user;
        }
        

        return view('agent_sanitaires.index')
            ->with('agentSanitaires', $agentSanitaires);
    }

    /**
     * Show the form for creating a new AgentSanitaire.
     *
     * @return Response
     */
    public function create()
    {
        return view('agent_sanitaires.create');
    }

    /**
     * Store a newly created AgentSanitaire in storage.
     *
     * @param CreateAgentSanitaireRequest $request
     *
     * @return Response
     */
    public function store(CreateAgentSanitaireRequest $request)
    {
        $input = $request->all();

        $agentSanitaire = $this->agentSanitaireRepository->create($input);

        Flash::success('Agent Sanitaire saved successfully.');

        return redirect(route('agentSanitaires.index'));
    }

    /**
     * Display the specified AgentSanitaire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agentSanitaire = $this->agentSanitaireRepository->find($id);

        if (empty($agentSanitaire)) {
            Flash::error('Agent Sanitaire not found');

            return redirect(route('agentSanitaires.index'));
        }

        return view('agent_sanitaires.show')->with('agentSanitaire', $agentSanitaire);
    }

    /**
     * Show the form for editing the specified AgentSanitaire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agentSanitaire = $this->agentSanitaireRepository->find($id);

        if (empty($agentSanitaire)) {
            Flash::error('Agent Sanitaire not found');

            return redirect(route('agentSanitaires.index'));
        }

        return view('agent_sanitaires.edit')->with('agentSanitaire', $agentSanitaire);
    }

    /**
     * Update the specified AgentSanitaire in storage.
     *
     * @param int $id
     * @param UpdateAgentSanitaireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgentSanitaireRequest $request)
    {
        $agentSanitaire = $this->agentSanitaireRepository->find($id);

        if (empty($agentSanitaire)) {
            Flash::error('Agent Sanitaire not found');

            return redirect(route('agentSanitaires.index'));
        }

        $agentSanitaire = $this->agentSanitaireRepository->update($request->all(), $id);

        Flash::success('Agent Sanitaire updated successfully.');

        return redirect(route('agentSanitaires.index'));
    }

    /**
     * Remove the specified AgentSanitaire from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agentSanitaire = $this->agentSanitaireRepository->find($id);

        if (empty($agentSanitaire)) {
            Flash::error('Agent Sanitaire not found');

            return redirect(route('agentSanitaires.index'));
        }

        $this->agentSanitaireRepository->delete($id);

        Flash::success('Agent Sanitaire deleted successfully.');

        return redirect(route('agentSanitaires.index'));
    }
}
