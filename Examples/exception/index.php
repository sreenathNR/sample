<?php
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

try {
  checkNum(5);
  echo 'If you see this, the number is 1 or below';
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?> 