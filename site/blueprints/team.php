<?php if(!defined('KIRBY')) exit ?>

title: Team
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  from: 
  	label: From
  	type: text 
  coverimage:
 	  label: Cover Image
    type:  selector
    mode:  single
    types:
    	- image
  text:
    label: Text
    type:  textarea
