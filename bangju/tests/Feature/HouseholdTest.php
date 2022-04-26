<?php

namespace Tests\Feature;

use App\Models\Household;
use App\Models\User;
use App\Http\Controllers\Api\HouseholdController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;


class HouseholdTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetHosueholdMembersReturnsCorrectMembers()
    {
        $ids = [];
        $households = Household::factory()->count(2)->create();

        $members = User::factory()->count(2)->create([
            'household_id' => $households->first()->id,
        ]);
        User::factory()->create([
            'household_id' => $households->skip(1)->first()->id,
        ]);

        $response = $this->get('/webapi/household/members/' . $households->first()->id);
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $members->first()->id]);
        $response->assertJsonFragment(['id' => $members->skip(1)->first()->id]);
    }
}
