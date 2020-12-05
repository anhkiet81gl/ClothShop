<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOrderStatusAPIRequest;
use App\Http\Requests\API\UpdateOrderStatusAPIRequest;
use App\Models\OrderStatus;
use App\Repositories\OrderStatusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class OrderStatusController
 * @package App\Http\Controllers\API
 */

class OrderStatusAPIController extends AppBaseController
{
    /** @var  OrderStatusRepository */
    private $orderStatusRepository;

    public function __construct(OrderStatusRepository $orderStatusRepo)
    {
        $this->orderStatusRepository = $orderStatusRepo;
    }

    /**
     * Display a listing of the OrderStatus.
     * GET|HEAD /orderStatuses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $orderStatuses = $this->orderStatusRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($orderStatuses->toArray(), 'Order Statuses retrieved successfully');
    }

    /**
     * Store a newly created OrderStatus in storage.
     * POST /orderStatuses
     *
     * @param CreateOrderStatusAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderStatusAPIRequest $request)
    {
        $input = $request->all();

        $orderStatus = $this->orderStatusRepository->create($input);

        return $this->sendResponse($orderStatus->toArray(), 'Order Status saved successfully');
    }

    /**
     * Display the specified OrderStatus.
     * GET|HEAD /orderStatuses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var OrderStatus $orderStatus */
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            return $this->sendError('Order Status not found');
        }

        return $this->sendResponse($orderStatus->toArray(), 'Order Status retrieved successfully');
    }

    /**
     * Update the specified OrderStatus in storage.
     * PUT/PATCH /orderStatuses/{id}
     *
     * @param int $id
     * @param UpdateOrderStatusAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderStatusAPIRequest $request)
    {
        $input = $request->all();

        /** @var OrderStatus $orderStatus */
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            return $this->sendError('Order Status not found');
        }

        $orderStatus = $this->orderStatusRepository->update($input, $id);

        return $this->sendResponse($orderStatus->toArray(), 'OrderStatus updated successfully');
    }

    /**
     * Remove the specified OrderStatus from storage.
     * DELETE /orderStatuses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var OrderStatus $orderStatus */
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            return $this->sendError('Order Status not found');
        }

        $orderStatus->delete();

        return $this->sendSuccess('Order Status deleted successfully');
    }
}
