<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDeliveryAPIRequest;
use App\Http\Requests\API\UpdateDeliveryAPIRequest;
use App\Models\Delivery;
use App\Repositories\DeliveryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DeliveryController
 * @package App\Http\Controllers\API
 */

class DeliveryAPIController extends AppBaseController
{
    /** @var  DeliveryRepository */
    private $deliveryRepository;

    public function __construct(DeliveryRepository $deliveryRepo)
    {
        $this->deliveryRepository = $deliveryRepo;
    }

    /**
     * Display a listing of the Delivery.
     * GET|HEAD /deliveries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $deliveries = $this->deliveryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($deliveries->toArray(), 'Deliveries retrieved successfully');
    }

    /**
     * Store a newly created Delivery in storage.
     * POST /deliveries
     *
     * @param CreateDeliveryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDeliveryAPIRequest $request)
    {
        $input = $request->all();

        $delivery = $this->deliveryRepository->create($input);

        return $this->sendResponse($delivery->toArray(), 'Delivery saved successfully');
    }

    /**
     * Display the specified Delivery.
     * GET|HEAD /deliveries/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        return $this->sendResponse($delivery->toArray(), 'Delivery retrieved successfully');
    }

    /**
     * Update the specified Delivery in storage.
     * PUT/PATCH /deliveries/{id}
     *
     * @param int $id
     * @param UpdateDeliveryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeliveryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        $delivery = $this->deliveryRepository->update($input, $id);

        return $this->sendResponse($delivery->toArray(), 'Delivery updated successfully');
    }

    /**
     * Remove the specified Delivery from storage.
     * DELETE /deliveries/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        $delivery->delete();

        return $this->sendSuccess('Delivery deleted successfully');
    }
}
