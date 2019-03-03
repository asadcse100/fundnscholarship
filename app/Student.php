<?php

namespace App;

use App\Notifications\Student\StudentResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }

    public function std_apply_result(){
        return $this->hasMany(StudentApplyResult::class);
    }

    public function std_apply_project(){
        return $this->hasMany(StudentApplyProject::class);
    }

    public function std_apply_poorfund(){
        return $this->hasMany(StudentApplyPoorFund::class);
    }

    public function std_apply_issue(){
        return $this->hasMany(StudentApplyIssue::class);
    }

    public function std_apply_innovation(){
        return $this->hasMany(StudentApplyInnovation::class);
    }


}
