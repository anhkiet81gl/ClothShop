<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Products;
use App\Models\OrderItems;
use Carbon\Carbon;
use Illuminate\Http\Request;

//DataTables

use App\DataTables\ProductsDataTable;
use App\DataTables\CategoriesDataTable;

//App\Http\Requests;
use App\Http\Requests;
use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Requests\CreateBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

//Repositories
use App\Repositories\ProductsRepository;
use App\Repositories\CategoriesRepository;
use App\Repositories\BannerRepository;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Repositories\CustomerRepository;
use App\DataTables\CustomerDataTable;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Repositories\OrderRepository;
use App\DataTables\OrderDataTable;

use Session;
use App\Cart;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PageController extends Controller
{

    protected $table = 'order_items';
    /** @var  OrderRepository */
    /** @var  CustomerRepository */
    /** @var  CategoriesRepository */
    /** @var  ProductsRepository */
    private $productsRepository;
    private $categoriesRepository;
    private $customerRepository;
    private $orderRepository;

    public function __construct(ProductsRepository $productsRepo, CategoriesRepository $categoriesRepo,BannerRepository $bannerRepo,OrderRepository $orderRepo)
    {
        $this->productsRepository = $productsRepo;
        $this->categoriesRepository = $categoriesRepo;
        $this->bannerRepository = $bannerRepo;
        $this->orderRepository = $orderRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $product = $this->productsRepository->all();
        $products = $this->productsRepository->all();
        $categories = $this->categoriesRepository->all();
        $banner =  $this->bannerRepository->all();
        // dd($categories);
        return view('clothshop.index', compact('product', 'products', 'categories','banner' ));

    }

    public function getProduct()
    {
        $products = $this->productsRepository->all();
        $categories = $this->categoriesRepository->all();

        return view('clothshop.products', compact('products' ));
    }

    public function productDetail($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('clothshop.index'));
        }
        return view('clothshop.singleproduct')->with('products', $products);
    }

    public function getProductCategories($id)
    {
        $products = Products::where('category_id',$id)->get();
        $categories = $this->categoriesRepository->all();
//        dd($productsCategories);
        return view('clothshop.products', compact('products','categories' ));
    }

    public function getAddToCart(Request $req, $id)
    {
        $product = Products::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        // dd($req);
        return redirect()->back();
    }

    public function getDelItemsCart($id)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('trangchu');
        }
        return redirect()->back();
    }

    public function getCheckout()
    {
        return view('clothshop.cart');
    }

    public function postCheckout(Request $req)
    {

        // dd($req);

        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->note;
//        dd($customer);
        $customer->save();



        $bill = new Order;
        $bill->customer_id = $customer->id;
        $bill->delivery_id = $req->delivery;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        $bill->note = $req->note;
//        dd($bill);
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new OrderItems;
            $bill_detail->order_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['qty'];
            if ($value['pro_price'] == 0)
                $bill_detail->unit_price = $value['price'] / $value['qty'];
            else {
                $bill_detail->unit_price = $value['pro_price'];
            }
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->route('trangchu')->with('thongbao', 'Đặt hàng thành công');
    }

    public function dashboard(){
        $categories = Categories::all();
//        $toMonth = Carbon::now()->month()->toDateString();
        $today = Carbon::now()->toDateString();
        $orderItems = OrderItems::where('product_id', 2)->whereDate('created_at', $today)->sum('quantity');
        $todalQtyToday = Order::whereDate('created_at', $today)->sum('total');
//        $todalQtyMonth= OrderItems::whereDate('created_at', $toMonth)->sum('total');
        $todalOrder = Order::whereDate('created_at', $today)->count('id');

//        dd($todalQtyMonth);

        return view('dashboard', compact('todalQtyToday' ,'orderItems','todalOrder'));
    }
}
