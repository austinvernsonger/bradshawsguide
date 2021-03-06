<?php if(!defined('KIRBY')) exit ?>

title: Route
pages: false
fields:
  title:
    label: Title
    type: text
    required: true
  section:
    label: Section
    type: radio
    required: true
    columns: 4
    options:
      1: Section 1
      2: Section 2
      3: Section 3
      4: Section 4
  destination:
    label: Destination
    type: text
    required: true
  company:
    label: Company
    type: checkboxes
    columns: 3
    options: query
    query:
      fetch: pages
      template: company
  text:
    label: Text
    type: textarea
