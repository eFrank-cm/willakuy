<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'last_names',
        'email',
        'mobile_num',
        'edu_level',
        'profession',
        'specialty',
        'degree',
        'study_center',
        'mention'
    ];

    protected function name():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    // protected function last_name():Attribute{
    //     return new Attribute(
    //         get: fn($value) => ucwords($value),
    //         set: fn($value) => strtolower($value)
    //     );
    // }

    // protected function edu_level():Attribute{
    //     return new Attribute(
    //         get: fn($value) => ucwords($value),
    //         set: fn($value) => strtolower($value)
    //     );
    // }

    protected function profession():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    protected function specialty():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    protected function degree():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    // protected function study_center():Attribute{
    //     return new Attribute(
    //         get: fn($value) => ucwords($value),
    //         set: fn($value) => strtolower($value)
    //     );
    // }

    public function full_name(){
        return ucwords($this->name." ".$this->last_names);
    }
}
