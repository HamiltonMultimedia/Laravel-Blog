<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('default_stage', 'staging');
set('use_relative_symlinks', false);

add('shared_files', ['.env']);
add('shared_dirs', []);
add('writable_dirs', []);

set('repository', 'git@github.com:HamiltonMultimedia/Laravel-Blog.git');
set('branch', 'darkmode');

// Hosts

host('laravel-blog.terencehamilton.com')
    ->set('remote_user', 'terence_p_hamilton')
    ->set('deploy_path', '/var/www/laravel-blog');

// Hooks

after('deploy:failed', 'deploy:unlock');
