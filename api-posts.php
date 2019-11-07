<?php
/**
 * 
 * Template Name: API-Posts
 *
 * @package jd
 *
 */

header('Content-Type: application/json');

echo posts_home($_GET['offset']);

