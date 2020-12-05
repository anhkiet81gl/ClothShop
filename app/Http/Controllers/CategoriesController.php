<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Repositories\CategoriesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CategoriesController extends AppBaseController
{
    /** @var  CategoriesRepository */
    private $categoriesRepository;

    public function __construct(CategoriesRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the Categories.
     *
     * @param CategoriesDataTable $categoriesDataTable
     * @return Response
     */
    public function index(CategoriesDataTable $categoriesDataTable)
    {
        return $categoriesDataTable->render('categories.index');
    }

    /**
     * Show the form for creating a new Categories.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Categories in storage.
     *
     * @param CreateCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriesRequest $request)
    {
        $input = $request->all();

        $categories = $this->categoriesRepository->create($input);

        Flash::success('Categories saved successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categories = $this->categoriesRepository->find($id);

//        dd($categories);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified Categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified Categories in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriesRequest $request)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        $categories = $this->categoriesRepository->update($request->all(), $id);

        Flash::success('Categories updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Categories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        $this->categoriesRepository->delete($id);

        Flash::success('Categories deleted successfully.');

        return redirect(route('categories.index'));
    }
}
