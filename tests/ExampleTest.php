<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(SteveCreekmore\LaravelExample\Commands\LaravelExampleCommand::class)
        ->expectsOutput('All done')
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
