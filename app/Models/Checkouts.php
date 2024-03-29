<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkouts extends Model
{
    use HasFactory, SoftDeletes;

    protected $filable=['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
