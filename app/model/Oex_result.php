<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Oex_result extends Model
{
    protected $table="oex_results";
    protected $primaryKay = 'id';

    protected $fillable = ['exam_id','user_id','yes_ans','no_ans','total_question','result_json'];
}
