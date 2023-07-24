<?php

namespace Tests\Feature;

use App\Models\Contractor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContractorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_contractor_page_is_displayed(): void
    {
        $response = $this->get('/contractors');

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
    }

    public function test_contractor_can_be_saved(): void {
        $response = $this->post('save-contractor',[
            'name'=> 'Test name',
            'email_address' => 'test@example.com',
            'contact_no' => '09765432',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(200);
    }

    public function test_contractor_can_be_updated(): void {
        $contractor = Contractor::factory()->create([
            'name'=> 'Test',
            'email_address' => 'test@example.com',
            'contact_no' => '09765432',
        ]);

        $response = $this
            ->patch('/update-contractor', [
                'name' => 'Test',
                'email_address' => 'test@example.com',
                'contact_no' => '09765432',
            ]);
            $response->assertSessionHasNoErrors();
            $contractor->refresh();

            $this->assertSame('Test', $contractor->name);
            $this->assertSame('test@example.com', $contractor->email_address);
            $this->assertSame('09765432', $contractor->contact_no);
    }

    public function test_contractor_can_be_deleted(): void{
        $contractor = Contractor::factory()->create([
            'name'=> 'Test name',
            'email_address' => 'test@example.com',
            'contact_no' => '09765432',
        ]);
        $response = $this
            ->delete('/delete-contractor', [
                'name'=> 'Test name',
                'email_address' => 'test@example.com',
                'contact_no' => '09765432',
            ]);
            $response->assertSessionHasNoErrors();
    }
}
