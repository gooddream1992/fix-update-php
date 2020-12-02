<?php 

global $strRange;
global $strTrend;
global $strPeriod;
global $User;
global $objSession;
global $arrCkStats;
global $arrCmStats;

?>
<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="GET" id="mainform">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

		
	    <h2><?php echo ucfirst($strRange);?>ly Performance Trend
		<br><span>Stats are updated live. Refresh to see updated numbers.</span>
		</h2>
	    
				<p>Trend By 
<select name="trend" id="trend" onchange="document.getElementById('mainform').submit();">
<option value="">Select...</option>
<option value="commission"  <?php echo ($strTrend=='commission')?'selected="selected"':''; ?>>Commissions</option>
<option value="sales"  <?php echo ($strTrend=='sales')?'selected="selected"':''; ?>># Sales</option>
<option value="clicks"  <?php echo ($strTrend=='clicks')?'selected="selected"':''; ?>># Clicks</option>
</select> for 

<select name="period" id="period" onchange="document.getElementById('mainform').submit();">
<option value="">Select...</option>
<option value="last_days"  <?php echo ($strPeriod=='last_days')?'selected="selected"':''; ?>>Last <?php echo ($strRange=='week')?7:30;?> Days</option>
<option value="this_period"  <?php echo ($strPeriod=='this_period')?'selected="selected"':''; ?>>This <?php echo ucfirst($strRange);?></option>
<option value="last_period"  <?php echo ($strPeriod=='last_period')?'selected="selected"':''; ?>>Last <?php echo ucfirst($strRange);?></option>
<option value="hourly_trends"  <?php echo ($strPeriod=='hourly_trends')?'selected="selected"':''; ?>>Hourly Trends Last <?php echo ($strRange=='week')?7:30;?> Days</option>
</select>
</p>

<img height="200" width="600" src="<?php 
	printf("/%s-stats-graphs.htm?trend=%s&range=%s&period=%s"
		, str_replace('/', '-', PAGE_C)
		, urlencode($strTrend)
		, urlencode($strRange)
		, urlencode($strPeriod)
	); 
?>" id="trendimg" border="0"/>
	
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="report">
<tr>
    <td class="reportButton" colspan="9.0">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td><p>Performance by
			<select name="range" id="range" onchange="document.getElementById('mainform').submit();">

<option value="month" <?php echo ($strRange=='month')?'selected="selected"':''; ?>>Month</option>
<option value="week" <?php echo ($strRange=='week')?'selected="selected"':''; ?>>Week</option>
</select>
		</p>
            </td>
        </tr>
        </table>
    </td>

</tr>
<tr>
            <th  width="1%" rowspan="1">
                &nbsp;
            </th>
            <th   rowspan="1">
                Report&nbsp;Period
            </th>
            <th   rowspan="1">
                Commissions&nbsp;(USD)
            </th>

            <th   rowspan="1">
                Sale Amount&nbsp;(USD)
            </th>
            <th   rowspan="1">
                Sales
            </th>
            <th   rowspan="1">

                Clicks
            </th>
            <th   rowspan="1">
                CR
            </th>
            <th   rowspan="1">
                EPC&nbsp;(USD)
            </th>
</tr>
<tr class="reportOddRow">
            <td id="row1-1"  
                ></td>
            <td id="row1-2"  
                >This <?php echo ucfirst($strRange);?></td>
            <td id="row1-3"  
                class="curr">$<?php printf("%.02f", $arrCmStats['this_period']['total_commission']);?></td>
            <td id="row1-4"  
                class="curr">$<?php printf("%.02f", $arrCmStats['this_period']['total_sale']);?></td>
                
            <td id="row1-5"  
                class="nb"><?php printf("%d", $arrCmStats['this_period']['total_count']);?></td>
            <td id="row1-7"  
                class="nb"><?php echo number_format($arrCkStats['this_period']['total']);?></td>

            <td id="row1-8"  
                class="curr"><?php printf("%.02f", $arrCkStats['this_period']['total']>0?(100/$arrCkStats['this_period']['total'])*$arrCmStats['this_period']['total_count']:0);?>%</td>
            <td id="row1-9"  
                class="curr">$<?php printf("%.02f", ($arrCkStats['this_period']['total']==0)?0:($arrCmStats['this_period']['total_commission']/$arrCkStats['this_period']['total'])*100);?></td>
</tr>
<tr class="reportEvenRow">
            <td id="row2-1"  
                ></td>
            <td id="row2-2"  
                >Last <?php echo ucfirst($strRange);?></td>
            <td id="row2-3"  
                class="curr">$<?php printf("%.02f", $arrCmStats['last_period']['total_commission']);?></td>
            <td id="row2-4"  
                class="curr">$<?php printf("%.02f", $arrCmStats['last_period']['total_sale']);?></td>

            <td id="row2-5"  
                class="nb"><?php printf("%d", $arrCmStats['last_period']['total_count']);?></td>
            <td id="row2-7"  
                class="nb"><?php echo number_format($arrCkStats['last_period']['total']);?></td>
                
            <td id="row2-8"  
                class="curr"><?php printf("%.02f", $arrCkStats['last_period']['total']>0?(100/$arrCkStats['last_period']['total'])*$arrCmStats['last_period']['total_count']:0);?>%</td>
            <td id="row2-9"  
                class="curr">$<?php printf("%.02f", ($arrCkStats['last_period']['total']==0)?0:($arrCmStats['last_period']['total_commission']/$arrCkStats['last_period']['total'])*100);?></td>
</tr>
<tr class="reportOddRow">

            <td id="row3-1"  
                ></td>
            <td id="row3-2"  
                >Last <?php echo ($strRange=='week')?7:30;?> Days</td>
            <td id="row3-3"  
                class="curr">$<?php printf("%.02f", $arrCmStats['last_days']['total_commission']);?></td>
            <td id="row3-4"  
                class="curr">$<?php printf("%.02f", $arrCmStats['last_days']['total_sale']);?></td>
                
            <td id="row3-5"  
                class="nb"><?php printf("%d", $arrCmStats['last_days']['total_count']);?></td>
            <td id="row3-7"  
                class="nb"><?php echo number_format($arrCkStats['last_days']['total']);?></td>
                
            <td id="row3-8"  
                class="curr"><?php printf("%.02f", $arrCkStats['last_days']['total']>0?(100/$arrCkStats['last_days']['total'])*$arrCmStats['last_days']['total_count']:0);?>%</td>
            <td id="row3-9"  
                class="curr">$<?php printf("%.02f", ($arrCkStats['last_days']['total']==0)?0:($arrCmStats['last_days']['total_commission']/$arrCkStats['last_days']['total'])*100);?></td>
</tr>
</table>


</div>


</form>

