<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Repositories\ProductsRepository;
use App\Repositories\CategoriesRepository;
use App\DataTables\CategoriesDataTable;
use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;


use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductsController extends AppBaseController
{
    protected $table = 'order_items';
    /** @var  CategoriesRepository */
    /** @var  ProductsRepository */
    private $productsRepository;
    private $categoriesRepository;

    public function __construct(ProductsRepository $productsRepo, CategoriesRepository $categoriesRepo)
    {
        $this->productsRepository = $productsRepo;
        $this->categoriesRepository = $categoriesRepo;
    }


    /**
     * Display a listing of the Products.
     *
     * @param ProductsDataTable $productsDataTable
     * @return Response
     */
    public function index(ProductsDataTable $productsDataTable)
    {
        return $productsDataTable->render('products.index');
    }

    /**
     * Show the form for creating a new Products.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Products in storage.
     *
     * @param CreateProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateProductsRequest $request)
    {
        $input = $request->all();

        $products = $this->productsRepository->create($input);

        Flash::success('Products saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified Products in storage.
     *
     * @param  int              $id
     * @param UpdateProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsRequest $request)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update($request->all(), $id);

        Flash::success('Products updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Products from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }
}
