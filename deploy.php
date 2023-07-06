<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('default_stage', 'staging');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

set('repository', 'git@github.com:HamiltonMultimedia/Laravel-Blog.git');
set('branch', 'dev');

// Hosts

host('laravel-blog.terencehamilton.com')
    ->set('remote_user', 'terence_p_hamilton')
    ->set('deploy_path', '~/laravel-blog');

// Hooks

after('deploy:failed', 'deploy:unlock');
