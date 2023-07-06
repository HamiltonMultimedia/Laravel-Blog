<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:HamiltonMultimedia/Laravel-Blog.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('laravel-blog.terencehamilton.com')
    ->set('remote_user', 'terence_p_hamilton')
    ->set('deploy_path', '~/laravel-blog');

// Hooks

after('deploy:failed', 'deploy:unlock');
