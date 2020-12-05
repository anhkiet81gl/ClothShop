<?php namespace Tests\Repositories;

use App\Models\OrderStatus;
use App\Repositories\OrderStatusRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class OrderStatusRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var OrderStatusRepository
     */
    protected $orderStatusRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->orderStatusRepo = \App::make(OrderStatusRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->make()->toArray();

        $createdOrderStatus = $this->orderStatusRepo->create($orderStatus);

        $createdOrderStatus = $createdOrderStatus->toArray();
        $this->assertArrayHasKey('id', $createdOrderStatus);
        $this->assertNotNull($createdOrderStatus['id'], 'Created OrderStatus must have id specified');
        $this->assertNotNull(OrderStatus::find($createdOrderStatus['id']), 'OrderStatus with given id must be in DB');
        $this->assertModelData($orderStatus, $createdOrderStatus);
    }

    /**
     * @test read
     */
    public function test_read_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();

        $dbOrderStatus = $this->orderStatusRepo->find($orderStatus->id);

        $dbOrderStatus = $dbOrderStatus->toArray();
        $this->assertModelData($orderStatus->toArray(), $dbOrderStatus);
    }

    /**
     * @test update
     */
    public function test_update_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();
        $fakeOrderStatus = factory(OrderStatus::class)->make()->toArray();

        $updatedOrderStatus = $this->orderStatusRepo->update($fakeOrderStatus, $orderStatus->id);

        $this->assertModelData($fakeOrderStatus, $updatedOrderStatus->toArray());
        $dbOrderStatus = $this->orderStatusRepo->find($orderStatus->id);
        $this->assertModelData($fakeOrderStatus, $dbOrderStatus->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();

        $resp = $this->orderStatusRepo->delete($orderStatus->id);

        $this->assertTrue($resp);
        $this->assertNull(OrderStatus::find($orderStatus->id), 'OrderStatus should not exist in DB');
    }
}
