<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Registration
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $initials
 * @property string $postal_code
 * @property int $house_number
 * @property string $house_number_extension
 * @property string $street_name
 * @property string $city
 * @property string $province
 * @property string $email_address
 * @property string $phone_number
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereHouseNumberExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereInitials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereStreetName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'initials',
        'postal_code',
        'house_number',
        'house_number_extension',
        'street_name',
        'city',
        'province',
        'email_address',
        'phone_number',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
