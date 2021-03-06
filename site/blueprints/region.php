<?php if(!defined('KIRBY')) exit ?>

title: Region
pages: true
fields:
  title:
    label: Title
    type: text
    required: true
  country:
    label: Country
    type: select
    required: true
    default: England
    options:
      Channel Islands: Channel Islands
      England: England
      Ireland: Ireland
      Principality of Wales: Principality of Wales
      Scotland: Scotland
  text:
    label: Text
    type: textarea
