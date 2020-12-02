<?

//exit;
// last modified
// 2011-01-14

include('functions/functions.php');
$avg = 0;
$processes = 0;

$data_raw = `top -n 1 -b -d 1`;
$data = explode("\n", $data_raw);

foreach ($data as $line) {
	if(str_replace('load average', '', $line) !== $line) {
		$avg = floatval(preg_replace("/.*load average: (.*), (.*), (.*)/", "\\1", $line));
	}
	if(str_replace('Tasks', '', $line) !== $line) {
		$processes = (int)preg_replace("/Tasks: (.*) total.*/", "\\1", $line);
	}
}

echo "Load average: ".$avg."\n";
echo "Processes: ".$processes."\n";

//if ($avg == 0) {
//	echo "Error: Load average\n";
//}
if ($avg > 15) {
	echo "Error: Load average HIGH\n";
}
if ($processes == 0) {
	echo "Error: Processes\n";
}
if ($processes > 290) {
	echo "Error: Processes HIGH\n";
}

