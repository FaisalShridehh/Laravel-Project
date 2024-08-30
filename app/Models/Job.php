<?php

namespace App\Models;

use App\JobSchedule;
use App\SalaryType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;



    protected $fillable = [
        'employer_id',
        'title',
        'salary',
        'salary_type',
        'location',
        'company',
        'description',
        'schedule',
        // 'url',
        'featured',
    ];

    protected $casts = [
        'schedule' => JobSchedule::class,
        'salary_type' => SalaryType::class,
        'featured' => 'boolean',
        // 'url' => 'string',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return $this->casts;
    }



    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => strtolower($name)]);

        $this->tags()->attach($tag);
    }

    /**
     * Get the employer that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        // jobs can have many tags and can belong to many tags
        return $this->belongsToMany(Tag::class);
    }

}
