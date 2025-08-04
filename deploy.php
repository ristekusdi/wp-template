<?php

namespace Deployer;

require 'contrib/rsync.php';
require 'recipe/wordpress.php';

// Config
set('application', '<example.com>');
set('keep_releases', 5); // Keep 5 releases
set('http_user', 'www-data');
set('http_group', 'www-data');

/**
 * NOTE:
 * The __DIR__ value means that the source of rsync comes from GitLab CI build
 * (assumes deploy.php is in project root)
 */
set('rsync_src', __DIR__);

// Hosts
host('<example.com>') // Name of the server
    ->set('hostname', '<ip-address-or-hostname>') // Hostname or IP address
    ->set('remote_user', 'deployer') // SSH user
    ->set('deploy_path', '/var/www/html'); // Deploy path

// Hooks
task('wp:download', function () {
    run('cd {{release_path}} && wp core download');
});

task('deploy:update_code')->disable();
after('deploy:update_code', 'rsync');
task('deploy', [
    'deploy:prepare',
    'wp:download',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');
