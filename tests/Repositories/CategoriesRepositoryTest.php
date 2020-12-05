<?php namespace Tests\Repositories;

use App\Models\Categories;
use App\Repositories\CategoriesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CategoriesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CategoriesRepository
     */
    protected $categoriesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->categoriesRepo = \App::make(CategoriesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_categories()
    {
        $categories = factory(Categories::class)->make()->toArray();

        $createdCategories = $this->categoriesRepo->create($categories);

        $createdCategories = $createdCategories->toArray();
        $this->assertArrayHasKey('id', $createdCategories);
        $this->assertNotNull($createdCategories['id'], 'Created Categories must have id specified');
        $this->assertNotNull(Categories::find($createdCategories['id']), 'Categories with given id must be in DB');
        $this->assertModelData($categories, $createdCategories);
    }

    /**
     * @test read
     */
    public function test_read_categories()
    {
        $categories = factory(Categories::class)->create();

        $dbCategories = $this->categoriesRepo->find($categories->id);

        $dbCategories = $dbCategories->toArray();
        $this->assertModelData($categories->toArray(), $dbCategories);
    }

    /**
     * @test update
     */
    public function test_update_categories()
    {
        $categories = factory(Categories::class)->create();
        $fakeCategories = factory(Categories::class)->make()->toArray();

        $updatedCategories = $this->categoriesRepo->update($fakeCategories, $categories->id);

        $this->assertModelData($fakeCategories, $updatedCategories->toArray());
        $dbCategories = $this->categoriesRepo->find($categories->id);
        $this->assertModelData($fakeCategories, $dbCategories->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_categories()
    {
        $categories = factory(Categories::class)->create();

        $resp = $this->categoriesRepo->delete($categories->id);

        $this->assertTrue($resp);
        $this->assertNull(Categories::find($categories->id), 'Categories should not exist in DB');
    }
}
