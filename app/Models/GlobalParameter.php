<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalParameter extends Model
{
    use HasFactory;

    public $table = 'public.global_parameter';

    public $timestamps = true;

    protected $fillable = [
        'code', 'name', 'value', 'input_type', 'option_list', 'secret_value', 'description', 'status_id', 'created_by', 'updated_by'
    ];
}
