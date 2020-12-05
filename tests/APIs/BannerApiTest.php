<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Banner;

class BannerApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_banner()
    {
        $banner = factory(Banner::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/banners', $banner
        );

        $this->assertApiResponse($banner);
    }

    /**
     * @test
     */
    public function test_read_banner()
    {
        $banner = factory(Banner::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/banners/'.$banner->id
        );

        $this->assertApiResponse($banner->toArray());
    }

    /**
     * @test
     */
    public function test_update_banner()
    {
        $banner = factory(Banner::class)->create();
        $editedBanner = factory(Banner::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/banners/'.$banner->id,
            $editedBanner
        );

        $this->assertApiResponse($editedBanner);
    }

    /**
     * @test
     */
    public function test_delete_banner()
    {
        $banner = factory(Banner::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/banners/'.$banner->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/banners/'.$banner->id
        );

        $this->response->assertStatus(404);
    }
}
