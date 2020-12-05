<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Delivery;

class DeliveryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_delivery()
    {
        $delivery = factory(Delivery::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/deliveries', $delivery
        );

        $this->assertApiResponse($delivery);
    }

    /**
     * @test
     */
    public function test_read_delivery()
    {
        $delivery = factory(Delivery::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/deliveries/'.$delivery->id
        );

        $this->assertApiResponse($delivery->toArray());
    }

    /**
     * @test
     */
    public function test_update_delivery()
    {
        $delivery = factory(Delivery::class)->create();
        $editedDelivery = factory(Delivery::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/deliveries/'.$delivery->id,
            $editedDelivery
        );

        $this->assertApiResponse($editedDelivery);
    }

    /**
     * @test
     */
    public function test_delete_delivery()
    {
        $delivery = factory(Delivery::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/deliveries/'.$delivery->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/deliveries/'.$delivery->id
        );

        $this->response->assertStatus(404);
    }
}
