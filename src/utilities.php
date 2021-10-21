<?php

// disable some scripts while on the localhost
function ct_is_staging(){
  if($_SERVER['HTTP_HOST'] == 'localhost'){
    return true;
  }
  return false;
}
