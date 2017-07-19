<?php

namespace thomasmars\LaravelH5p\Eloquents;

use DB;
use Illuminate\Database\Eloquent\Model;

class H5pTmpfile extends Model {

    protected $primaryKey = 'id';
    protected $fillable = [
        'path',
        'created_at'
    ];

}