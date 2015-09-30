<?php if(!defined('KIRBY')) exit ?>

title: Day
pages: post
files: false
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    default: today
    width: 1/2
  thecolor: 
  	label: Color
  	type: color
  	width: 1/2
