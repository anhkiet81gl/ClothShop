<?php

namespace App\Http\Controllers;

use App\DataTables\DeliveryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDeliveryRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use App\Repositories\DeliveryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DeliveryController extends AppBaseController
{
    /** @var  DeliveryRepository */
    private $deliveryRepository;

    public function __construct(DeliveryRepository $deliveryRepo)
    {
        $this->deliveryRepository = $deliveryRepo;
    }

    /**
     * Display a listing of the Delivery.
     *
     * @param DeliveryDataTable $deliveryDataTable
     * @return Response
     */
    public function index(DeliveryDataTable $deliveryDataTable)
    {
        return $deliveryDataTable->render('deliveries.index');
    }

    /**
     * Show the form for creating a new Delivery.
     *
     * @return Response
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created Delivery in storage.
     *
     * @param CreateDeliveryRequest $request
     *
     * @return Response
     */
    public function store(CreateDeliveryRequest $request)
    {
        $input = $request->all();

        $delivery = $this->deliveryRepository->create($input);

        Flash::success('Delivery saved successfully.');

        return redirect(route('deliveries.index'));
    }

    /**
     * Display the specified Delivery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        return view('deliveries.show')->with('delivery', $delivery);
    }

    /**
     * Show the form for editing the specified Delivery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        return view('deliveries.edit')->with('delivery', $delivery);
    }

    /**
     * Update the specified Delivery in storage.
     *
     * @param  int              $id
     * @param UpdateDeliveryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeliveryRequest $request)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        $delivery = $this->deliveryRepository->update($request->all(), $id);

        Flash::success('Delivery updated successfully.');

        return redirect(route('deliveries.index'));
    }

    /**
     * Remove the specified Delivery from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        $this->deliveryRepository->delete($id);

        Flash::success('Delivery deleted successfully.');

        return redirect(route('deliveries.index'));
    }
}
