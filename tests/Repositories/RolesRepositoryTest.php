<?php namespace Tests\Repositories;

use App\Models\Roles;
use App\Repositories\RolesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RolesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RolesRepository
     */
    protected $rolesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->rolesRepo = \App::make(RolesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_roles()
    {
        $roles = factory(Roles::class)->make()->toArray();

        $createdRoles = $this->rolesRepo->create($roles);

        $createdRoles = $createdRoles->toArray();
        $this->assertArrayHasKey('id', $createdRoles);
        $this->assertNotNull($createdRoles['id'], 'Created Roles must have id specified');
        $this->assertNotNull(Roles::find($createdRoles['id']), 'Roles with given id must be in DB');
        $this->assertModelData($roles, $createdRoles);
    }

    /**
     * @test read
     */
    public function test_read_roles()
    {
        $roles = factory(Roles::class)->create();

        $dbRoles = $this->rolesRepo->find($roles->id);

        $dbRoles = $dbRoles->toArray();
        $this->assertModelData($roles->toArray(), $dbRoles);
    }

    /**
     * @test update
     */
    public function test_update_roles()
    {
        $roles = factory(Roles::class)->create();
        $fakeRoles = factory(Roles::class)->make()->toArray();

        $updatedRoles = $this->rolesRepo->update($fakeRoles, $roles->id);

        $this->assertModelData($fakeRoles, $updatedRoles->toArray());
        $dbRoles = $this->rolesRepo->find($roles->id);
        $this->assertModelData($fakeRoles, $dbRoles->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_roles()
    {
        $roles = factory(Roles::class)->create();

        $resp = $this->rolesRepo->delete($roles->id);

        $this->assertTrue($resp);
        $this->assertNull(Roles::find($roles->id), 'Roles should not exist in DB');
    }
}
