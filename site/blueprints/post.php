<?php if(!defined('KIRBY')) exit ?>

title: Post
pages:false
files:
  sortable:true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Team from...
    type: select
    options:
      montreal : Montreal 
      mexico : Mexico
    width: 1/2
  hour: 
    label: Time
    type: time
    default: now
    width: 1/2
  text:
    label: Text
    type: textarea
    requiered: true


