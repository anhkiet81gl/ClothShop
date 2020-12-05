<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Categories;

class CategoriesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_categories()
    {
        $categories = factory(Categories::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/categories', $categories
        );

        $this->assertApiResponse($categories);
    }

    /**
     * @test
     */
    public function test_read_categories()
    {
        $categories = factory(Categories::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/categories/'.$categories->id
        );

        $this->assertApiResponse($categories->toArray());
    }

    /**
     * @test
     */
    public function test_update_categories()
    {
        $categories = factory(Categories::class)->create();
        $editedCategories = factory(Categories::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/categories/'.$categories->id,
            $editedCategories
        );

        $this->assertApiResponse($editedCategories);
    }

    /**
     * @test
     */
    public function test_delete_categories()
    {
        $categories = factory(Categories::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/categories/'.$categories->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/categories/'.$categories->id
        );

        $this->response->assertStatus(404);
    }
}
