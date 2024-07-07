<?php

it('It belongs to an employer', function () {
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);



    expect($job->employer->is($employer))->toBeTrue();
});
