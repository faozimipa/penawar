<?php

namespace App\Http\Controllers\Demand;

use App\Http\Requests\CreateDemandRequest;
use App\Http\Requests\UpdateDemandRequest;
use App\Repositories\DemandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DemandController extends AppBaseController
{
    /** @var  DemandRepository */
    private $demandRepository;

    public function __construct(DemandRepository $demandRepo)
    {
        $this->demandRepository = $demandRepo;
    }

    /**
     * Display a listing of the Demand.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->demandRepository->pushCriteria(new RequestCriteria($request));
        $demands = $this->demandRepository->all();

        return view('demands.index')
            ->with('demands', $demands);
    }

    /**
     * Show the form for creating a new Demand.
     *
     * @return Response
     */
    public function create()
    {
        return view('demands.create');
    }

    /**
     * Store a newly created Demand in storage.
     *
     * @param CreateDemandRequest $request
     *
     * @return Response
     */
    public function store(CreateDemandRequest $request)
    {
        $input = $request->all();

        $demand = $this->demandRepository->create($input);

        Flash::success('Demand saved successfully.');

        return redirect(route('demands.index'));
    }

    /**
     * Display the specified Demand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demand = $this->demandRepository->findWithoutFail($id);

        if (empty($demand)) {
            Flash::error('Demand not found');

            return redirect(route('demands.index'));
        }

        return view('demands.show')->with('demand', $demand);
    }

    /**
     * Show the form for editing the specified Demand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $demand = $this->demandRepository->findWithoutFail($id);

        if (empty($demand)) {
            Flash::error('Demand not found');

            return redirect(route('demands.index'));
        }

        return view('demands.edit')->with('demand', $demand);
    }

    /**
     * Update the specified Demand in storage.
     *
     * @param  int              $id
     * @param UpdateDemandRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemandRequest $request)
    {
        $demand = $this->demandRepository->findWithoutFail($id);

        if (empty($demand)) {
            Flash::error('Demand not found');

            return redirect(route('demands.index'));
        }

        $demand = $this->demandRepository->update($request->all(), $id);

        Flash::success('Demand updated successfully.');

        return redirect(route('demands.index'));
    }

    /**
     * Remove the specified Demand from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demand = $this->demandRepository->findWithoutFail($id);

        if (empty($demand)) {
            Flash::error('Demand not found');

            return redirect(route('demands.index'));
        }

        $this->demandRepository->delete($id);

        Flash::success('Demand deleted successfully.');

        return redirect(route('demands.index'));
    }

    public function permintaan()
    {
        return view('demands.permintaan');
    }

    public function permintaan_post(CreateDemandRequest $request)
    {
         //return $request->all();

         $input = $request->all();
         $input['status'] =0;

        $this->demandRepository->create($input);

        Flash::success('Permintaan berhasil di buat');

        return redirect('/');

        //return view('demands.permintaan');
    }
}
