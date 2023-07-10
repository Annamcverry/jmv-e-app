<?php

namespace Tests\Feature;

use App\Models\Timesheet;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TimesheetTest extends TestCase
{
    use RefreshDatabase;

    public function test_timesheet_page_is_displayed(): void
    {
        $timesheet = Timesheet::class()->create();

        $response = $this
            // ->actingAs($user)
            ->get('/timesheet');

        $response->assertOk();
    }

}