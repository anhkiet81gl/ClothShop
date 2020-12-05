<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\OrderStatus;

class OrderStatusApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/order_statuses', $orderStatus
        );

        $this->assertApiResponse($orderStatus);
    }

    /**
     * @test
     */
    public function test_read_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/order_statuses/'.$orderStatus->id
        );

        $this->assertApiResponse($orderStatus->toArray());
    }

    /**
     * @test
     */
    public function test_update_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();
        $editedOrderStatus = factory(OrderStatus::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/order_statuses/'.$orderStatus->id,
            $editedOrderStatus
        );

        $this->assertApiResponse($editedOrderStatus);
    }

    /**
     * @test
     */
    public function test_delete_order_status()
    {
        $orderStatus = factory(OrderStatus::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/order_statuses/'.$orderStatus->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/order_statuses/'.$orderStatus->id
        );

        $this->response->assertStatus(404);
    }
}
