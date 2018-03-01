<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
	protected $keyType = 'string';
	public $incrementing = false;
    public $timestamps = false;

	protected $fillable = ['id','isOnline','salary','age','position','name','gender','email','phone','address'];

	function skills() {
        return $this->hasMany('App\Skill');
    }
}
