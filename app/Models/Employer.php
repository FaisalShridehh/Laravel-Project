<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'logo',

    ];
  /**
 ** This method defines a one-to-many relationship between the Employer model
 ** and the Job model. It specifies that each Employer instance can have multiple
 ** Job instances associated with it.
 *
 ** In this scenario, an Employer represents a company or organization that
 ** can post multiple job openings or listings. Each Job instance is associated
 ** with a specific Employer.
 *
 ** This relationship allows you to access all the Job instances related to
 ** a particular Employer, and vice versa (from a Job instance, you can access
 ** the associated Employer details).
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function jobs()
{
    return $this->hasMany(Job::class);
}


    /**
 ** This method defines a one-to-one relationship between the Employer model
 ** and the User model. It specifies that each Employer instance belongs to
 ** a single User instance.
 *
 ** In a typical scenario, an Employer record represents a company or organization,
 ** while the User record represents the individual user who manages or represents
 ** that Employer. This relationship allows you to access the User details from
 ** an Employer instance, and vice versa.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user() : BelongsTo
{
    return $this->belongsTo(User::class);
}

}
