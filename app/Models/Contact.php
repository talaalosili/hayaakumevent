<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            'Email' =>$this->Email,
            'Name' =>$this->Name, 
               'Message' =>$this->Message, 
                'Description' =>$this->Role,
        ];
}

}