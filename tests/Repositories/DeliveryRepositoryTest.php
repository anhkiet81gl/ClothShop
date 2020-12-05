<?php namespace Tests\Repositories;

use App\Models\Delivery;
use App\Repositories\DeliveryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class DeliveryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->deliveryRepo = \App::make(DeliveryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_delivery()
    {
        $delivery = factory(Delivery::class)->make()->toArray();

        $createdDelivery = $this->deliveryRepo->create($delivery);

        $createdDelivery = $createdDelivery->toArray();
        $this->assertArrayHasKey('id', $createdDelivery);
        $this->assertNotNull($createdDelivery['id'], 'Created Delivery must have id specified');
        $this->assertNotNull(Delivery::find($createdDelivery['id']), 'Delivery with given id must be in DB');
        $this->assertModelData($delivery, $createdDelivery);
    }

    /**
     * @test read
     */
    public function test_read_delivery()
    {
        $delivery = factory(Delivery::class)->create();

        $dbDelivery = $this->deliveryRepo->find($delivery->id);

        $dbDelivery = $dbDelivery->toArray();
        $this->assertModelData($delivery->toArray(), $dbDelivery);
    }

    /**
     * @test update
     */
    public function test_update_delivery()
    {
        $delivery = factory(Delivery::class)->create();
        $fakeDelivery = factory(Delivery::class)->make()->toArray();

        $updatedDelivery = $this->deliveryRepo->update($fakeDelivery, $delivery->id);

        $this->assertModelData($fakeDelivery, $updatedDelivery->toArray());
        $dbDelivery = $this->deliveryRepo->find($delivery->id);
        $this->assertModelData($fakeDelivery, $dbDelivery->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_delivery()
    {
        $delivery = factory(Delivery::class)->create();

        $resp = $this->deliveryRepo->delete($delivery->id);

        $this->assertTrue($resp);
        $this->assertNull(Delivery::find($delivery->id), 'Delivery should not exist in DB');
    }
}
