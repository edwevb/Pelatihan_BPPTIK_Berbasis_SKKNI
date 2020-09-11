<?php

function faktorial ($n) {
  if ($n == 1) {
    return $n;
  } else {
    return $n * faktorial($n - 1);
  }
}

# lalu panggil fungsi faktorial
$nilai=3;
echo ("Nilai faktorial dari ".$nilai."! adalah ". faktorial($nilai));

?>