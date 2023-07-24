<?php

namespace Tests\Feature;

use App\Models\ContractorInvoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContractorinvoiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_contractor_invoice_page_is_displayed(): void
    {
        $response = $this->get('/contractorinvoice');

        $response->assertSessionHasNoErrors();
    }

    public function test_invoice_can_be_saved(): void {

        $response = $this->post('save-invoice', [
            'contractor_name' => 'Test name',
            'date' => "2023-04-14 00:00:00",
            'amount_paid' => 4678,
            'employee_count' => 5,
        ]);

        $response
            ->assertSessionHasNoErrors();
            // ->assertStatus(200);
        
    }
    public function test_invoice_can_be_updated(): void {
        $contractorinvoice = ContractorInvoice::factory()->create([
            'contractor_name' => 'Test name',
            'date' => '2023-04-15 00:00:00',
            'amount_paid' => 4678,
            'employee_count' => 5,
            ]);
        $response = $this->patch('/update-invoice', [
            'contractor_name' => 'Test name',
            'date' => '2023-04-15 00:00:00',
            'amount_paid' => 4678.0,
            'employee_count' => 5,
        ]);

        $response->assertSessionHasNoErrors();
        $contractorinvoice->refresh();

        $this->assertSame('Test name', $contractorinvoice->contractor_name);
        $this->assertSame('2023-04-15', $contractorinvoice->date);
        $this->assertSame(4678.0, $contractorinvoice->amount_paid);
        $this->assertSame(5, $contractorinvoice->employee_count);
    }

    public function test_invoice_can_be_deleted(): void {
        
        $contractorinvoice = ContractorInvoice::factory()->create([
            'contractor_name' => 'Test name',
            'date' => '2023-04-15 00:00:00',
            'amount_paid' => 4678.0,
            'employee_count' => 5,
            ]);
        $response = $this->delete('delete-invoice', [
            'contractor_name' => 'Test name',
            'date' => '2023-04-14 00:00:00',
            'amount_paid' => 4678.0,
            'employee_count' => 5,
        ]);
        $response->assertSessionHasNoErrors();
        // $response->assertStatus(200);
    }
}
