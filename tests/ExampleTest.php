<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(\SteveCreekmore\LaravelExample\Commands\LaravelExampleCommand::class)
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);

    // dd(config('database'));
    // expect(true)->toBeTrue();
});
