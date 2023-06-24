<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SebastianBergmann\Diff\Diff;

class Timesheet extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

   protected $fillable = [
    'week_beginning',
    'mon_hours',
    'tue_hours',
    'wed_hours',
    'thurs_hours',
    'fri_hours',
    'sat_hours',
    'sun_hours'
   ];  

   public function user(): BelongsTo{
    return $this->belongsTo(User::class);
   }
   protected $dates = [
    'week_beginning',
   ];

//    protected $dates = [
//     'week_beginning',
//     'mon_start_time',
//     'mon_end_time',
//     'tue_start_time',
//     'tue_end_time',
//     'wed_start_time',
//     'wed_end_time',
//     'thurs_start_time',
//     'thurs_end_time',
//     'fri_start_time',
//     'fri_end_time',
//     'sat_start_time',
//     'sat_end_time',
//     'sun_start_time',
//     'sun_end_time',
//     'created_at',
//     'updated_at'
    
//    ];
//    $appends = ['diffInHours'];
//    $timesheet = App\Timesheet::(1);
//    $timesheet->week_beginning = now();
//    $timesheet->save();

//    public function setDateBeginningAttribute($value){
//     // $timesheet->week_beginning =
//     $this->attributes['week_beginning'] = $value;
//    }
//    * Set the user's first name.
//    *
//    * @param  string  $value
//    * @return void
//    */


//    public function getDiffInHoursMonAttribute(){
//         // $mondayHours = DiffInHours($startTime, $endTime);
//   //      $this->attributes['monday_hours'] = $mon_start_time->diff($mon_end_time);

//     if(!empty($this->mon_start_time) && !empty($this->mon_end_time)){
//         return $this->mon_end_time->diffInHours($this->mon_start_time);
//         }
//     }
//     public function getDiffInHoursTueAttribute(){
   
//     if(!empty($this->mon_start_time) && !empty($this->mon_end_time)){
//         return $this->mon_end_time->diffInHours($this->mon_start_time);
//         }
//     }

    public function getWeekHoursAttribute(){
        $weekHours = $this->mon_hours + $this->tue_hours + $this->wed_hours + $this->thurs_hours + $this->fri_hours + $this->sat_hours + $this->sun_hours; 

    }
    public static function boot(){
        parent::boot();

        // static::updating(function($model){
        //     $diffInHours = $model->mon_end_time->diffInHours($model->mon_start_time);
        //     $model->monday_hours = $diffInHours;

        // });
    }
    
}