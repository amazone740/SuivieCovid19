<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSymptomeRequest;
use App\Http\Requests\UpdateSymptomeRequest;
use App\Repositories\SymptomeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SymptomeController extends AppBaseController
{
    /** @var  SymptomeRepository */
    private $symptomeRepository;

    public function __construct(SymptomeRepository $symptomeRepo)
    {
        $this->symptomeRepository = $symptomeRepo;
    }

    /**
     * Display a listing of the Symptome.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $symptomes = $this->symptomeRepository->all();

        return view('symptomes.index')
            ->with('symptomes', $symptomes);
    }

    /**
     * Show the form for creating a new Symptome.
     *
     * @return Response
     */
    public function create()
    {
        return view('symptomes.create');
    }

    /**
     * Store a newly created Symptome in storage.
     *
     * @param CreateSymptomeRequest $request
     *
     * @return Response
     */
    public function store(CreateSymptomeRequest $request)
    {
        $input = $request->all();

        $symptome = $this->symptomeRepository->create($input);

        Flash::success('Symptome saved successfully.');

        return redirect(route('symptomes.index'));
    }

    /**
     * Display the specified Symptome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $symptome = $this->symptomeRepository->find($id);

        if (empty($symptome)) {
            Flash::error('Symptome not found');

            return redirect(route('symptomes.index'));
        }

        return view('symptomes.show')->with('symptome', $symptome);
    }

    /**
     * Show the form for editing the specified Symptome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $symptome = $this->symptomeRepository->find($id);

        if (empty($symptome)) {
            Flash::error('Symptome not found');

            return redirect(route('symptomes.index'));
        }

        return view('symptomes.edit')->with('symptome', $symptome);
    }

    /**
     * Update the specified Symptome in storage.
     *
     * @param int $id
     * @param UpdateSymptomeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSymptomeRequest $request)
    {
        $symptome = $this->symptomeRepository->find($id);

        if (empty($symptome)) {
            Flash::error('Symptome not found');

            return redirect(route('symptomes.index'));
        }

        $symptome = $this->symptomeRepository->update($request->all(), $id);

        Flash::success('Symptome updated successfully.');

        return redirect(route('symptomes.index'));
    }

    /**
     * Remove the specified Symptome from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $symptome = $this->symptomeRepository->find($id);

        if (empty($symptome)) {
            Flash::error('Symptome not found');

            return redirect(route('symptomes.index'));
        }

        $this->symptomeRepository->delete($id);

        Flash::success('Symptome deleted successfully.');

        return redirect(route('symptomes.index'));
    }
}
