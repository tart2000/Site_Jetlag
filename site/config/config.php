<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

Language configuration 

*/ 

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'French',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  ),
  array(
    'code'    =>  'es',
    'name'    =>  'Spanish',
    'locale'  =>  'es_ES',
    'url'     =>  '/es',
  )
));

c::set('language.detect', true);

/*


---------------------------------------
Blogprint Configuration
---------------------------------------

*/

// pagination
// c::set('pagination-posts', 10);
// c::set('pagination-archive', 30);
// c::set('pagination-search', 30);

// reading
c::set('posts-page', 'blog');
c::set('posts-templates', array('post', 'posts', 'archive', 'search'));
c::set('posts-date-format', 'd-m-Y');
c::set('excerpt-length', 55); // words
c::set('categories-page', 'categories');

// comments
// c::set('comments', true);
// c::set('disqus-shortname', 'yourshortname');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('markdown.extra', true);
c::set('home', 'home');
c::set('debug', 'true');


