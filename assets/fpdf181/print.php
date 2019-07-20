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
	if ($report == "Biogas") {
		$pdf->SetWidths(Array(55,60,65));
	}
	if ($report == "Project") {
		$pdf->SetWidths(Array(20,30,25,25,30,20,20,20));
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
		if ($_REQUEST["stats"] == "3") {

			$stat = "`rs`.`status_ID` = '3' ";
		}
			
	}
	

		$query = "";
		$query .= "SELECT `r`.research_Title,`r`.research_yrConduct,`r`.research_Content,`rs`.`status_Name`  `rssn`,`ua`.`user_Name` ";
		$query .= " FROM `research` as `r` 
		LEFT JOIN `research_status` as `rs` ON `r`.`status_ID` = `rs`.`status_ID`
		LEFT JOIN `user_accounts` `ua` ON `r`.user_ID = `ua`.`user_ID` ";

	$query .= " WHERE  $stat AND ";
	
	if(isset($_REQUEST["filter"]))
	{

	 	$query .= '(research_Title LIKE "%'.$_REQUEST["filter"].'%" ';
		$query .= 'OR status_Name LIKE "%'.$_REQUEST["filter"].'%") ';
	}
		$query .= 'ORDER BY research_ID DESC ';


	$sql = mysqli_query($con,$query);
}
if ($report == "Biogas") {
	$sql = mysqli_query($con,'SELECT * FROM `locations` WHERE title LIKE "%'.$_REQUEST["filter"].'%" ORDER BY `locations`.`date` DESC');
}
if ($report == "Project") {

	$query = '';

	$query .= "SELECT `pm`.*,`s`.`status_Name`";
	$query .= "FROM `project_monitoring` `pm` LEFT JOIN `status` `s` ON `pm`.`status_ID` = `s`.`status_ID` ";

	if(isset($_REQUEST["status"])) {
	$status = $_REQUEST["status"];
	 $query .= '  WHERE `pm`.`status_ID` = '.$status.' AND ';
	}
	else{
		 $query .= ' WHERE ';
	}
	if(isset($_REQUEST["filter"]))
	{
	 $query .= '(proj_Title LIKE "%'.$_REQUEST["filter"].'%" ';
	    $query .= 'OR proj_Owner LIKE "%'.$_REQUEST["filter"].'%" ';
	    $query .= 'OR proj_Location LIKE "%'.$_REQUEST["filter"].'%" ';
	    $query .= 'OR proj_Head LIKE "%'.$_REQUEST["filter"].'%" )';
	}
		$query .= 'ORDER BY date_added DESC ';

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

if ($report == "Account") {
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(15,5,"ID",1,0,'C');
	$pdf->Cell(45,5,"Level",1,0,'C');
	$pdf->Cell(45,5,"User",1,0,'C');
	$pdf->Cell(45,5,"Status",1,0,'C');
	$pdf->Cell(45,5,"Register",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

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
	$print_name = "Account_Report";
}
if ($report == "News") {
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(75,5,"Title",1,0,'C');
	$pdf->Cell(40,5,"Date",1,0,'C');
	$pdf->Cell(75,5,"Description",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

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
	$print_name = "News_Report";

}
if ($report == "Suggestion") {
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(75,5,"Title",1,0,'C');
	$pdf->Cell(40,5,"Date",1,0,'C');
	$pdf->Cell(75,5,"Description",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

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
	$print_name = "Suggestion_Report";

}
if ($report == "Research") {
	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(75,5,"Title",1,0,'C');
	$pdf->Cell(30,5,"Year",1,0,'C');
	$pdf->Cell(50,5,"Content",1,0,'C');
	$pdf->Cell(40,5,"Status",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

	


	    if ($if_has_content != 0) {
	    	if (is_array($data) || is_object($data))
			{
				//loop the data
				foreach($data as $item){
					//write data using Row() method containing array of values.
					$pdf->Row(Array(
						$item['research_Title'],
						$item['research_yrConduct'],
						$item['research_Content'],
						$item['rssn'],
					));
					
				}
			}
		}

	$print_name = "Research_Report";

}
if ($report == "Biogas") {
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(55,5,"Name",1,0,'C');
	$pdf->Cell(60,5,"Description",1,0,'C');
	$pdf->Cell(65,5,"Location",1,0,'C');
	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['title'],
				$item['description'],
				$item['address'],
			));
			
		}
	}
	$print_name = "Biogas_Report";
 
}
if ($report == "Project") {
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,5,"Title",1,0,'C');
	$pdf->Cell(30,5,"Owner/ Sponsor",1,0,'C');
	$pdf->Cell(25,5,"Started",1,0,'C');
	$pdf->Cell(25,5,"Ended",1,0,'C');
	$pdf->Cell(30,5,"Location",1,0,'C');
	$pdf->Cell(20,5,"Details",1,0,'C');
	$pdf->Cell(20,5,"Head",1,0,'C');
	$pdf->Cell(20,5,"Progress",1,0,'C');

	$pdf->Ln();
	//reset font
	$pdf->SetFont('Arial','',9);

	if ($if_has_content != 0) {
		//loop the data
		foreach($data as $item){
			//write data using Row() method containing array of values.
			$pdf->Row(Array(
				$item['proj_Title'],
				$item['proj_Owner'],
				$item['proj_DateStarted'],
				$item['proj_DateEnded'],
				$item['proj_Location'],
				$item['proj_Scope'],
				$item['proj_Head'],
				$item['status_Name'],
			));
			
		}
	}
 $print_name = "Project_Report";
}

//output the pdf
$pdf->Output('I',$print_name.'.pdf');






