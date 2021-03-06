<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/npm.php';

// Project name
set('application', 'MTU website');

// Project repository
set('repository', 'git@github.com:zawlinnnaing/siterepair.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', ['public/uploads', 'public/staff_photos']);

// Writable dirs by web server 
add('writable_dirs', ['public/uploads', 'public/staff_photos']);


// Hosts

host('157.230.125.155')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/laravel');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
after('deploy:update_code', 'npm:install', 'npm:run:dev');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

