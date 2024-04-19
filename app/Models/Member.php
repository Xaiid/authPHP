<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'members';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'email', 'gender', 'ip_address', '_token', '_method'];
}
