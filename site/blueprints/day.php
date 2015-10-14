<?php if(!defined('KIRBY')) exit ?>

title: Day
pages: post
files: true
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
  mtlcover:
    label: Team from Montreal - cover image
    type: selector
    mode:  single
    types:
      - image
    width: 1/2
  mxcover: 
    label: Team from Mexico - cover image
    type: selector
    mode:  single
    types:
      - image
    width: 1/2


