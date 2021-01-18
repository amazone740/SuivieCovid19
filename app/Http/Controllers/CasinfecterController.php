<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCasinfecterRequest;
use App\Http\Requests\UpdateCasinfecterRequest;
use App\Repositories\CasinfecterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CasinfecterController extends AppBaseController
{
    /** @var  CasinfecterRepository */
    private $casinfecterRepository;

    public function __construct(CasinfecterRepository $casinfecterRepo)
    {
        $this->casinfecterRepository = $casinfecterRepo;
    }

    /**
     * Display a listing of the Casinfecter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $casinfecters = $this->casinfecterRepository->all();

        return view('casinfecters.index')
            ->with('casinfecters', $casinfecters);
    }

    /**
     * Show the form for creating a new Casinfecter.
     *
     * @return Response
     */
    public function create()
    {
        return view('casinfecters.create');
    }

    /**
     * Store a newly created Casinfecter in storage.
     *
     * @param CreateCasinfecterRequest $request
     *
     * @return Response
     */
    public function store(CreateCasinfecterRequest $request)
    {
        $input = $request->all();

        $casinfecter = $this->casinfecterRepository->create($input);

        Flash::success('Casinfecter saved successfully.');

        return redirect(route('casinfecters.index'));
    }

    /**
     * Display the specified Casinfecter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $casinfecter = $this->casinfecterRepository->find($id);

        if (empty($casinfecter)) {
            Flash::error('Casinfecter not found');

            return redirect(route('casinfecters.index'));
        }

        return view('casinfecters.show')->with('casinfecter', $casinfecter);
    }

    /**
     * Show the form for editing the specified Casinfecter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $casinfecter = $this->casinfecterRepository->find($id);

        if (empty($casinfecter)) {
            Flash::error('Casinfecter not found');

            return redirect(route('casinfecters.index'));
        }

        return view('casinfecters.edit')->with('casinfecter', $casinfecter);
    }

    /**
     * Update the specified Casinfecter in storage.
     *
     * @param int $id
     * @param UpdateCasinfecterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCasinfecterRequest $request)
    {
        $casinfecter = $this->casinfecterRepository->find($id);

        if (empty($casinfecter)) {
            Flash::error('Casinfecter not found');

            return redirect(route('casinfecters.index'));
        }

        $casinfecter = $this->casinfecterRepository->update($request->all(), $id);

        Flash::success('Casinfecter updated successfully.');

        return redirect(route('casinfecters.index'));
    }

    /**
     * Remove the specified Casinfecter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $casinfecter = $this->casinfecterRepository->find($id);

        if (empty($casinfecter)) {
            Flash::error('Casinfecter not found');

            return redirect(route('casinfecters.index'));
        }

        $this->casinfecterRepository->delete($id);

        Flash::success('Casinfecter deleted successfully.');

        return redirect(route('casinfecters.index'));
    }
}
