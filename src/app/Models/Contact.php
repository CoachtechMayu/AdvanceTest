<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'option'
    ];

    public function getFullNameAttribute() {
        /* 姓+名 */
        return $this->first_name .' '. $this->last_name;

    }


}
