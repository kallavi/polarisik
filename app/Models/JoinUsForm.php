<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUsForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_surname',
        'gender',
        'birthday',
        'phone_number',
        'e_mail',
        'height',
        'weight',
        'image',
        'language',
        'language_level',
        'driving_licence',
        'dwelling',
        'is_suit',
        'missing_piece',
        'district',
        'identity_number',
        'account_name',
        'iban',
        'created_at',
        'updated_at'
    ];
}
