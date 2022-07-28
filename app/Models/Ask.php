<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ask extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'sex', 'email', 'postcode', 'address', 'building_name', 'opinion', 'created_at', 'updated_at'];
    
    public static $rules =  array([
            'fullname' => ['required_without:sex, email, postcode, address, opinion'],
            'sex' => ['max:1', 'regex:/^[男|女]+$/u', 'required_without:fullname, email, postcode, address, opinion'],
            'email' => ['required_without:fullname, sex, postcode, address, opinion'],
            'postcode' => ['required_without:fullname, sex, email, address, opinion'],
            'address' => ['required_without:fullname, sex, postcode, postcode, opinion'],
            'building_name' => ['string', 'max:255'],
            'opinion' => ['string', 'max:120', 'required_without:fullname, sex, postcode, postcode, address'],
            'created_at' => 'date_format:"Y-m-d /H:i:s.u"',
            'updated_at' => 'date_format:"Y-m-d /H:i:s.u"'
    ]);
}

