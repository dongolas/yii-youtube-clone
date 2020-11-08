$(function (){
  'use strict';
  $('#videoFile').change(ev => {
    $(ev.target).closest('input').trigger('submit');
  })
});