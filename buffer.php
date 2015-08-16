<?php

// file_put_contents("index.sthml", "1111111");
ob_start();
echo "222";
file_put_contents("index.shtml", ob_get_clean());
// ob_clean();
