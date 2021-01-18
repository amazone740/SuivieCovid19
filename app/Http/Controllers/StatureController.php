<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatureRequest;
use App\Http\Requests\UpdateStatureRequest;
use App\Repositories\StatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StatureController extends AppBaseController
{
    /** @var  StatureRepository */
    private $statureRepository;

    public function __construct(StatureRepository $statureRepo)
    {
        $this->statureRepository = $statureRepo;
    }

    /**
     * Display a listing of the Stature.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statures = $this->statureRepository->all();

        return view('statures.index')
            ->with('statures', $statures);
    }

    /**
     * Show the form for creating a new Stature.
     *
     * @return Response
     */
    public function create()
    {
        return view('statures.create');
    }

    /**
     * Store a newly created Stature in storage.
     *
     * @param CreateStatureRequest $request
     *
     * @return Response
     */
    public function store(CreateStatureRequest $request)
    {
        $input = $request->all();

        $stature = $this->statureRepository->create($input);

        Flash::success('Stature saved successfully.');

        return redirect(route('statures.index'));
    }

    /**
     * Display the specified Stature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stature = $this->statureRepository->find($id);

        if (empty($stature)) {
            Flash::error('Stature not found');

            return redirect(route('statures.index'));
        }

        return view('statures.show')->with('stature', $stature);
    }

    /**
     * Show the form for editing the specified Stature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stature = $this->statureRepository->find($id);

        if (empty($stature)) {
            Flash::error('Stature not found');

            return redirect(route('statures.index'));
        }

        return view('statures.edit')->with('stature', $stature);
    }

    /**
     * Update the specified Stature in storage.
     *
     * @param int $id
     * @param UpdateStatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatureRequest $request)
    {
        $stature = $this->statureRepository->find($id);

        if (empty($stature)) {
            Flash::error('Stature not found');

            return redirect(route('statures.index'));
        }

        $stature = $this->statureRepository->update($request->all(), $id);

        Flash::success('Stature updated successfully.');

        return redirect(route('statures.index'));
    }

    /**
     * Remove the specified Stature from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stature = $this->statureRepository->find($id);

        if (empty($stature)) {
            Flash::error('Stature not found');

            return redirect(route('statures.index'));
        }

        $this->statureRepository->delete($id);

        Flash::success('Stature deleted successfully.');

        return redirect(route('statures.index'));
    }
}
