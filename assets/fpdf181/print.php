<?php
//include pdf_mc_table.php, not fpdf17/fpdf.php

$con = mysqli_connect("localhost", "root", "","cvsu_arec");
include('pdf_mc_table.php');


//make new object
$pdf = new PDF_MC_Table();

//add page, set font
$pdf->AddPage();

$pdf->SetFont('Arial','',14);

//set width for each column (6 columns)
if (isset($_REQUEST["report"])) 
{
	$report = $_REQUEST["report"];
	
	if ($report == "Account") {
		$pdf->SetWidths(Array(15,45,45,45,45));
	}
	if ($report == "News") {
		$pdf->SetWidths(Array(75,40,75));
	}
	if ($report == "Suggestion") {
		$pdf->SetWidths(Array(75,40,75));
	}
	if ($report == "Research") {
		$pdf->SetWidths(Array(75,30,50,40));
	}
	

}

//set alignment
//$pdf->SetAligns(Array('','R','C','','',''));

//set line height. This is the height of each lines, not rows.
$pdf->SetLineHeight(5);

//load json data
if (isset($_REQUEST["filter"])) 
{
	$filter = $_REQUEST["filter"];
}







if ($report == "Account") {

	$sql = mysqli_query($con,"SELECT ua.user_ID,ul.level_Name,ua.user_Name,us.status_Name,ua.user_Registered FROM `user_accounts` ua
INNER JOIN `user_level` `ul` ON `ua`.`level_ID` = `ul`.`level_ID`
INNER JOIN `user_status` `us` ON `ua`.`user_status` = `us`.`status_ID`
	");
}
if ($report == "News") {
	$sql = mysqli_query($con,"SELECT * FROM `news` WHERE news_Title LIKE '%$filter%' ORDER BY `news_Pub` DESC");
}
if ($report == "Suggestion") {
	$sql = mysqli_query($con,"SELECT * FROM `suggestion` WHERE subject LIKE '%$filter%' ORDER BY `suggestion`.`date` DESC");
}
if ($report == "Research") {
	if(isset($_REQUEST["stats"]))
	{
		if ($_REQUEST["stats"] == "1_2") {
			$stat = "`rs`.`status_ID` = '1' OR `rs`.`status_ID` = '2'";
		}
		else{

			$stat = "`rs`.`status_ID` = '3'";
		}
			
	}
	

		$query = "";
		$query .= "SELECT `r`.*,`rs`.`status_Name`  `rssn`,`ua`.`user_Name`";
		$query .= " FROM `research` as `r` 
		LEFT JOIN `research_status` as `rs` ON `r`.`status_ID` = `rs`.`status_ID`
		LEFT JOIN `user_accounts` `ua` ON `r`.user_ID = `ua`.`user_ID`";

	$query .= " WHERE  $stat AND";
	
	if(isset($_REQUEST["filter"]))
	{

	 	$query .= '(research_Title LIKE "%'.$_REQUEST["filter"].'%" ';
		$query .= 'OR status_Name LIKE "%'.$_REQUEST["filter"].'%") ';
	}
		$query .= 'ORDER BY research_ID DESC ';


	$sql = mysqli_query($con,$query);
}



 while($row = $sql->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
if(empty($myArray)) {
	$if_has_content = 0;
}
else{
	// $json = file_get_contents('MOCK_DATA.json');
	$json = json_encode($myArray);
	$data = json_decode($json,true);
	$if_has_content = 1;
}




//add table heading using standard cells
//set font to bold
$pdf->SetFont('Arial','B',14);
if ($report == "Account") {

	$pdf->Cell(15,5,"ID",1,0,'C');
	$pdf->Cell(45,5,"LEVEL",1,0,'C');
	$pdf->Cell(45,5,"USER",1,0,'C');
	$pdf->Cell(45,5,"STATUS",1,0,'C');
	$pdf->Cell(45,5,"REGISTER",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',14);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['user_ID'],
				$item['level_Name'],
				$item['user_Name'],
				$item['status_Name'],
				$item['user_Registered'],
			));
			
		}
	}
}
if ($report == "News") {
	$pdf->Cell(75,5,"TITLE",1,0,'C');
	$pdf->Cell(40,5,"DATE",1,0,'C');
	$pdf->Cell(75,5,"DESCRIPTION",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',14);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['news_Title'],
				$item['news_Pub'],
				$item['news_Content'],
			));
			
		}
	}

}
if ($report == "Suggestion") {
	$pdf->Cell(75,5,"TITLE",1,0,'C');
	$pdf->Cell(40,5,"DATE",1,0,'C');
	$pdf->Cell(75,5,"DESCRIPTION",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',14);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['fname'].' '.$item['lname'],
				$item['subject'],
				$item['date'],
			));
			
		}
	}

}
if ($report == "Research") {
	$pdf->Cell(75,5,"Title",1,0,'C');
	$pdf->Cell(30,5,"Year",1,0,'C');
	$pdf->Cell(50,5,"Content",1,0,'C');
	$pdf->Cell(40,5,"Status",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',14);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['research_Title'],
				$item['research_Created'],
				$item['research_Content'],
				$item['rssn'],
			));
			
		}
	}

}

//output the pdf
$pdf->Output();






