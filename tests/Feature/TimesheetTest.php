<?php

namespace Tests\Feature;

use App\Models\Timesheet;
use App\Models\User;
use Database\Seeders\TimesheetSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TimesheetTest extends TestCase
{
    use RefreshDatabase;

    public function test_timesheet_page_is_displayed(): void
    {
        
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/timesheet');

        $response->assertOk();
    }
    public function test_timesheet_is_saved(): void{
        // $timesheet = Timesheet::factory()->create();

        // $timesheet = Timesheet::class()->create();

        // $response = $this->post('save-timesheet', [
        //     'week_beginning' => "2023-04-14 00:00:00",
        //     'mon_hours' => "8",
        //     'tue_hours' => "8",
        //     'wed_hours' => "8",
        //     'thurs_hours' => "8",
        //     'fri_hours' => "8",
        //     'sat_hours' => "8",
        //     'sun_hours' => "8",
            
        // ]);
       
        
            // $response->assertStatus(200);
            // ->assertRedirect('/timesheet');

        // $timesheet->refresh();

        // $this->assertSame('2023-09-29', $timesheet->week_beginning);
        // $this->assertSame(8, $timesheet->mon_hours);
        // $this->assertSame(8, $timesheet->tue_hours); 
        // $this->assertSame(8, $timesheet->wed_hours);
        // $this->assertSame(8, $timesheet->thurs_hours);
        // $this->assertSame(8, $timesheet->fri_hours); 
        // $this->assertSame(8, $timesheet->sat_hours);
        // $this->assertSame(8, $timesheet->sun_hours);
        
        $user = User::factory()->create();
        $timesheet = Timesheet::factory()->create();

            $response = $this->post('save-timesheet', [
            //create 10 users
            factory(User::class, 5)->create()->each(function ($user) {
                //create 5 posts for each user
                factory(Timesheet::class, 5)->create(['user_id'=>$user->id]);
            });
        ]);

        $response->assertStatus(200);


        // $this->seed(TimesheetSeeder::class);
        //     $this->assertDatabaseCount('timesheets', 4);

        }
    public function test_something(): void{
        //create 10 users
        factory(User::class, 10)->create()->each(function ($user) {
        //create 5 posts for each user
        factory(Post::class, 5)->create(['user_id'=>$user->id]);
});
    }

}