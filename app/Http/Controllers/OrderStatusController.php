<?php

namespace App\Http\Controllers;

use App\DataTables\OrderStatusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOrderStatusRequest;
use App\Http\Requests\UpdateOrderStatusRequest;
use App\Repositories\OrderStatusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OrderStatusController extends AppBaseController
{
    /** @var  OrderStatusRepository */
    private $orderStatusRepository;

    public function __construct(OrderStatusRepository $orderStatusRepo)
    {
        $this->orderStatusRepository = $orderStatusRepo;
    }

    /**
     * Display a listing of the OrderStatus.
     *
     * @param OrderStatusDataTable $orderStatusDataTable
     * @return Response
     */
    public function index(OrderStatusDataTable $orderStatusDataTable)
    {
        return $orderStatusDataTable->render('order_statuses.index');
    }

    /**
     * Show the form for creating a new OrderStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_statuses.create');
    }

    /**
     * Store a newly created OrderStatus in storage.
     *
     * @param CreateOrderStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderStatusRequest $request)
    {
        $input = $request->all();

        $orderStatus = $this->orderStatusRepository->create($input);

        Flash::success('Order Status saved successfully.');

        return redirect(route('orderStatuses.index'));
    }

    /**
     * Display the specified OrderStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            Flash::error('Order Status not found');

            return redirect(route('orderStatuses.index'));
        }

        return view('order_statuses.show')->with('orderStatus', $orderStatus);
    }

    /**
     * Show the form for editing the specified OrderStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            Flash::error('Order Status not found');

            return redirect(route('orderStatuses.index'));
        }

        return view('order_statuses.edit')->with('orderStatus', $orderStatus);
    }

    /**
     * Update the specified OrderStatus in storage.
     *
     * @param  int              $id
     * @param UpdateOrderStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderStatusRequest $request)
    {
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            Flash::error('Order Status not found');

            return redirect(route('orderStatuses.index'));
        }

        $orderStatus = $this->orderStatusRepository->update($request->all(), $id);

        Flash::success('Order Status updated successfully.');

        return redirect(route('orderStatuses.index'));
    }

    /**
     * Remove the specified OrderStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderStatus = $this->orderStatusRepository->find($id);

        if (empty($orderStatus)) {
            Flash::error('Order Status not found');

            return redirect(route('orderStatuses.index'));
        }

        $this->orderStatusRepository->delete($id);

        Flash::success('Order Status deleted successfully.');

        return redirect(route('orderStatuses.index'));
    }
}
