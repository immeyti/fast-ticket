<?php

namespace Immeyti\FastTicket\Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Immeyti\FastTicket\Models\Ticket;
use Tests\TestCase;

class StoreTicketTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function a_customer_can_create_a_ticket()
    {
        $attr = [
            'title' => 'server problem',
            'description' => 'this is my desc for ticket',
            'priority' => 1,
        ];

        $response = $this->json('post', '/tickets', $attr);

        $this->assertDatabaseHas('tickets', $attr);
        $response->assertStatus(201)
            ->assertJson([
                'created' => true
            ]);
    }
}
