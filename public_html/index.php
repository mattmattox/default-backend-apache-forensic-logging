<?php
echo "=====================\n";
echo "Headers\n";
foreach (getallheaders() as $name => $value) {
  echo "$name: $value\n";
}
$requestype = $_SERVER['REQUEST_METHOD'];
echo "=====================\n";
echo "Request type: $requestype\n";
echo "=====================\n";
echo "GET parameters\n";
foreach ($_GET as $param_name => $param_val) {
  echo "Param: $param_name; Value: $param_val\n";
}
echo "=====================\n";
echo "POST parameters\n";
foreach ($_POST as $param_name => $param_val) {
  echo "Param: $param_name; Value: $param_val\n";
}
echo "=====================\n";
echo "Done!\n";
