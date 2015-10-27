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


// These settings are the defaults used by shariff plugin

// Required by Shariff
c::set('language', 'en');                       // set locale code if page is not multilingual
c::set('page.uses_jquery', true);              // set true, if the page uses jquery (will be included otherwise)
c::set('page.uses_fa', true);                  // set true, if the page uses fontawesome (will be included otherwise)

// Shariff Config

c::set('shariff.url', 'assets/plugins/shariff');// path to shariff files
c::set('shariff.use_backend', true);
c::set('shariff.orientation', 'horizontal');    // horizontal, vertical
c::set('shariff.referrer_check', '');           // String to append to the shared url
// used service plugins: twitter, facebook, googleplus, linkedin, pinterest, xing, whatsapp, mail, info
c::set('shariff.services', array('twitter', 'facebook'));
c::set('shariff.theme', 'standard');            // standard, grey, white
//c::set('shariff.info', 'shariff');            // Information page about shariff. default: c't article about shariff
                                                // If set, it will be resolved using url(), so you can set it
                                                // to any kirby-internal page with own content




