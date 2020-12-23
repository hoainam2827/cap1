<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';
    public $timestamps = false;
    protected  $primaryKey = 'RowID';

    public function maps(){
        return $this->hasMany('App\Model\Patient', 'patient_id', 'RowID');
    }
}
