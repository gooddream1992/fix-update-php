<?
if($_GET['auth'] != '2112'){
        # Only the server itself can pull pages without auth
        if(($_SERVER['REMOTE_ADDR'] != '209.11.246.52') && ($_SERVER['REMOTE_ADDR'] != '208.70.116.25')) {
                die("Bye");
        }
}
$MySQL = new mysql_connection;
$MySQL2 = new mysql_connection;
if(isset($_POST['submitType'])){
	$submitType = $_POST['submitType'];
	if($submitType=='coupon'){
		$coupon_value = $_POST['couponValue'];
		$fileField = 'couponFile';
	}elseif($submitType=='redeemed'){
		$fileField = 'redeemedFile';
	}
        
	$target_path = $uploadDir;

	$now = time();

        $target_path = $target_path.basename( $_FILES[$fileField]['name']).date("Y-m-d_H_i_s",$now);

        if(move_uploaded_file($_FILES[$fileField]['tmp_name'], $target_path)) {
		echo "The file ".basename( $_FILES[$fileField]['name'])." has been uploaded.<BR><BR>";
		if($submitType == 'coupon'){
			// Parse file here
			$file = file($target_path);
			// Get last batch+1
		        $sql_last_import = "select max(batch_number) from ms_ad_center";
		        $MySQL->query($sql_last_import);
		        if($MySQL->next()){
		                $row = $MySQL->get_row();
		                $last_import = $row[0];
			}
			$batch_number = $last_import+1;
			foreach($file as $line){
				$line = trim($line);
				$sql = "insert into ms_ad_center (coupon,value,batch_number) values ('".$line."','".$coupon_value."','".$batch_number."')";
				#echo "sql: ".$sql."<br>\n";
				$MySQL->query($sql);
			}


		}elseif($submitType == 'redeemed'){
			// Parse file here
			$file = file($target_path);
			foreach($file as $line){
				$line = trim($line);
				$sql = "update ms_ad_center set date_redeemed = '".$now."' where coupon = '".$line."' and date_imported != 0 and date_issued != 0 limit 1";
				$MySQL->query($sql);
			}
		}
        } else{
            echo "There was an error uploading the file, please try again!<BR><BR>";
        }
	#echo "Target Path: ".$target_path."<BR>";
	#echo "fileField: ".$fileField."<BR>";
	#echo "batch_number: ".$batch_number."<BR>";
	echo "<BR>\n";
}

$sql = "select ms_ad_center.value, count(ms_ad_center.id) from ms_ad_center group by ms_ad_center.value";
$MySQL->query($sql);
echo "
<form name='form1' method='POST' action='".$form_target."' enctype='multipart/form-data'>
<input type='submit' style='height: 0px; display: none;'>
<input type='hidden' name='submitType' id='submitTypeId' value=''>
<input type='hidden' name='page' value='test'>
<table border='1' width='100%'>
	<tr>
		<td>Value</td>
		<td>Total Coupons</td>
		<td>Available</td>
		<td>Issued</td>
		<td>Redeemed</td>
		<td>Last Import<BR>Batch</td>
		<td># Imported</td>
	</tr>
";

while($MySQL->next()){
	$row = $MySQL->get_row();
	$value = $row['value'];
	$count = $row[1];

	$sql_available = "select count(id) from ms_ad_center where value='".$value."' and date_issued = 0 and date_redeemed = 0";
	$MySQL2->query($sql_available);
	if($MySQL2->next()){
		$row2 = $MySQL2->get_row();
		$available = $row2[0];
	}

	$sql_issued = "select count(id) from ms_ad_center where value='".$value."' and date_issued > 0";
	$MySQL2->query($sql_issued);
	if($MySQL2->next()){
		$row2 = $MySQL2->get_row();
		$issued = $row2[0];
	}

	$sql_redeemed = "select count(id) from ms_ad_center where value='".$value."' and date_redeemed > 0";
	$MySQL2->query($sql_redeemed);
	if($MySQL2->next()){
		$row2 = $MySQL2->get_row();
		$redeemed = $row2[0];
	}

	$sql_last_import = "select max(batch_number) from ms_ad_center";
	$MySQL2->query($sql_last_import);
	if($MySQL2->next()){
		$row2 = $MySQL2->get_row();
		$last_import = $row2[0];
		$sql_num_imported = "select count(id) from ms_ad_center where batch_number = '".$last_import."'";
		$MySQL2->query($sql_num_imported);
		if($MySQL2->next()){
			$row2 = $MySQL2->get_row();
			$num_imported = $row2[0];
		}
	}
	echo "	<tr>
			<td>".$value."</td>
			<td>".$count."</td>
			<td>".$available."</td>
			<td>".$issued."</td>
			<td>".$redeemed."</td>
			<td>".$last_import."</td>
			<td>".$num_imported."</td>
		</tr>
	";
}


echo "
</table>
<BR><BR><BR>
<table border='1' width='100%'>
	<tr>
	<td>Import Coupons:<BR>
	<table>
<tr><td>Value (in dollars):</td><td><input type='text' name='couponValue' id='couponValueId'></td></tr>
<tr><td>File:</td><td><input name='couponFile' type='file' id='couponFileId'></td></tr>
<tr><td colspan='2'><input type='button' name='submit_coupons' value='upload' onClick='validateCoupons();'></td></tr>
	</table>
	</td>
	<td>Import Redeemed:<br>
	<table>
<tr><td>File:</td><td><input name='redeemedFile' type='file' id='redeemedFileId'></td></tr>
<tr><td colspan='2'><input type='button' name='submit_redeemed' value='upload' onClick='validateRedeemed();'></td></tr>
	</table>
	</td>
	</tr>
";

echo "
</table>
</form>
<script src='includes/js/ms_ad_center_report.js'></script>
";
