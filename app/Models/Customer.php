<?php

namespace App\Models;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'status' => 1,
    ];

    function statusOptions()
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'Archived',
            3 => 'Deleted',
        ];
    }

    /**
     * Get the company that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
