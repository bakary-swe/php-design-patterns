<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */
require 'vendor/autoload.php';
include_once 'posts.php';

Post::create(['id' => 1, 'title' => 'Sample Title', 'body' => 'This is the body', 'create_date' => '2015-01-27']);