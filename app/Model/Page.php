<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';
    public $timestamps = false;
    protected  $primaryKey = 'RowID';
}
