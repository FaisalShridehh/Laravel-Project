<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA (Arrange, Act, Assert)

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act
    $retrievedJob = Job::find($job->id);
    
    // Assert
    $this->assertInstanceOf(Employer::class, $retrievedJob->employer);
    $this->assertEquals($employer->id, $retrievedJob->employer->id);

});


it('can have tags', function () {
    // AAA

    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tags('Frontend');

    // Assert
    expect($job->tags)->toContain('Frontend');
});