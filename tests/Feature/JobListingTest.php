<?php

namespace Tests\Feature;

use App\Models\JobListing;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobListingTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_jobs_page_is_displayed(): void
    {
        // $user = User::factory()->create(
        //     ['id'=>2,
        //     'role'=>'employee']
        // );

        $response = $this
            // ->actingAs($user)
            ->get('/jobs');
            // $response->assertStatus(200);
            $response->assertSessionHasNoErrors();

    
    }
    public function test_enquiries_page_is_displayed(): void
    {
        // $user = User::factory()->create(
        //     ['id'=>1,
        //     'role'=>'admin']
        // );

        $response = $this
            // ->actingAs($user)
            ->get('/enquiries');
        // $response->assertStatus(200);
        $response->assertSessionHasNoErrors();
    
    }
    public function test_job_listing_is_saved(): void {
        // $user = User::factory()->create(
          
        //     ['id'=>2,]
        // );
        
        $response = $this->post('save-job', [
        // $response = $this->actingAs($user)->post('save-job', [
            'description'=> 'Test Job Description',
            'location' => 'Belfast',
            'licenses'=> 'Drivers',
            'hours'=>40,
        ]);
        // $response->assertStatus(200);
        $response
        ->assertSessionHasNoErrors();
    }
    public function test_job_listing_can_be_deleted(): void {
        $joblisting = JobListing::factory()->create([
            'description'=> 'Test Job Description',
            'location' => 'Belfast',
            'licenses'=> 'Drivers',
            'hours'=>40,
        ]);
        $response = $this
            ->delete('/deleteJob', [
                'description'=> 'Test Job Description',
                'location' => 'Belfast',
                'licenses'=> 'Drivers',
            '   hours'=>40,
            ]);
        $response->assertSessionHasNoErrors();
    }

    
}
