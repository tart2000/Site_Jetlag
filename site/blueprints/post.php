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
  date:
    label: Datum
    type: date
    default: today
    width: 1/2
  coverimage:
    label: Cover Image
    type:  selector
    mode:  single
    types:
      - image
  text:
    label: Text
    type: textarea
    requiered: true


