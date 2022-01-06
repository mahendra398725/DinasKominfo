<?php
function showDateTime($carbon, $format = "d M Y"){
    return $carbon->translatedFormat($format);
}
?>