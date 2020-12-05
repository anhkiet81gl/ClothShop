<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCategoriesAPIRequest;
use App\Http\Requests\API\UpdateCategoriesAPIRequest;
use App\Models\Categories;
use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CategoriesController
 * @package App\Http\Controllers\API
 */

class CategoriesAPIController extends AppBaseController
{
    /** @var  CategoriesRepository */
    private $categoriesRepository;

    public function __construct(CategoriesRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the Categories.
     * GET|HEAD /categories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoriesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully');
    }

    /**
     * Store a newly created Categories in storage.
     * POST /categories
     *
     * @param CreateCategoriesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriesAPIRequest $request)
    {
        $input = $request->all();

        $categories = $this->categoriesRepository->create($input);

        return $this->sendResponse($categories->toArray(), 'Categories saved successfully');
    }

    /**
     * Display the specified Categories.
     * GET|HEAD /categories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Categories $categories */
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            return $this->sendError('Categories not found');
        }

        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully');
    }

    /**
     * Update the specified Categories in storage.
     * PUT/PATCH /categories/{id}
     *
     * @param int $id
     * @param UpdateCategoriesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Categories $categories */
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            return $this->sendError('Categories not found');
        }

        $categories = $this->categoriesRepository->update($input, $id);

        return $this->sendResponse($categories->toArray(), 'Categories updated successfully');
    }

    /**
     * Remove the specified Categories from storage.
     * DELETE /categories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Categories $categories */
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            return $this->sendError('Categories not found');
        }

        $categories->delete();

        return $this->sendSuccess('Categories deleted successfully');
    }
}
