<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHopitalRequest;
use App\Http\Requests\UpdateHopitalRequest;
use App\Repositories\HopitalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HopitalController extends AppBaseController
{
    /** @var  HopitalRepository */
    private $hopitalRepository;

    public function __construct(HopitalRepository $hopitalRepo)
    {
        $this->hopitalRepository = $hopitalRepo;
    }

    /**
     * Display a listing of the Hopital.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hopitals = $this->hopitalRepository->all();

        return view('hopitals.index')
            ->with('hopitals', $hopitals);
    }

    /**
     * Show the form for creating a new Hopital.
     *
     * @return Response
     */
    public function create()
    {
        return view('hopitals.create');
    }

    /**
     * Store a newly created Hopital in storage.
     *
     * @param CreateHopitalRequest $request
     *
     * @return Response
     */
    public function store(CreateHopitalRequest $request)
    {
        $input = $request->all();

        $hopital = $this->hopitalRepository->create($input);

        Flash::success('Hopital saved successfully.');

        return redirect(route('hopitals.index'));
    }

    /**
     * Display the specified Hopital.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hopital = $this->hopitalRepository->find($id);

        if (empty($hopital)) {
            Flash::error('Hopital not found');

            return redirect(route('hopitals.index'));
        }

        return view('hopitals.show')->with('hopital', $hopital);
    }

    /**
     * Show the form for editing the specified Hopital.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hopital = $this->hopitalRepository->find($id);

        if (empty($hopital)) {
            Flash::error('Hopital not found');

            return redirect(route('hopitals.index'));
        }

        return view('hopitals.edit')->with('hopital', $hopital);
    }

    /**
     * Update the specified Hopital in storage.
     *
     * @param int $id
     * @param UpdateHopitalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHopitalRequest $request)
    {
        $hopital = $this->hopitalRepository->find($id);

        if (empty($hopital)) {
            Flash::error('Hopital not found');

            return redirect(route('hopitals.index'));
        }

        $hopital = $this->hopitalRepository->update($request->all(), $id);

        Flash::success('Hopital updated successfully.');

        return redirect(route('hopitals.index'));
    }

    /**
     * Remove the specified Hopital from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hopital = $this->hopitalRepository->find($id);

        if (empty($hopital)) {
            Flash::error('Hopital not found');

            return redirect(route('hopitals.index'));
        }

        $this->hopitalRepository->delete($id);

        Flash::success('Hopital deleted successfully.');

        return redirect(route('hopitals.index'));
    }
}
