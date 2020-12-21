<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRolesAPIRequest;
use App\Http\Requests\API\UpdateRolesAPIRequest;
use App\Models\Roles;
use App\Repositories\RolesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RolesController
 * @package App\Http\Controllers\API
 */

class RolesAPIController extends AppBaseController
{
    /** @var  RolesRepository */
    private $rolesRepository;

    public function __construct(RolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the Roles.
     * GET|HEAD /roles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $roles = $this->rolesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($roles->toArray(), 'Roles retrieved successfully');
    }

    /**
     * Store a newly created Roles in storage.
     * POST /roles
     *
     * @param CreateRolesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRolesAPIRequest $request)
    {
        $input = $request->all();

        $roles = $this->rolesRepository->create($input);

        return $this->sendResponse($roles->toArray(), 'Roles saved successfully');
    }

    /**
     * Display the specified Roles.
     * GET|HEAD /roles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Roles $roles */
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            return $this->sendError('Roles not found');
        }

        return $this->sendResponse($roles->toArray(), 'Roles retrieved successfully');
    }

    /**
     * Update the specified Roles in storage.
     * PUT/PATCH /roles/{id}
     *
     * @param int $id
     * @param UpdateRolesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRolesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Roles $roles */
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            return $this->sendError('Roles not found');
        }

        $roles = $this->rolesRepository->update($input, $id);

        return $this->sendResponse($roles->toArray(), 'Roles updated successfully');
    }

    /**
     * Remove the specified Roles from storage.
     * DELETE /roles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Roles $roles */
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            return $this->sendError('Roles not found');
        }

        $roles->delete();

        return $this->sendSuccess('Roles deleted successfully');
    }
}
