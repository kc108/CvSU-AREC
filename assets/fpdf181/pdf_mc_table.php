<?php
//call main fpdf file
require('fpdf.php');

//create new class extending fpdf class
class PDF_MC_Table extends FPDF {
	// variable to store widths and aligns of cells, and line height
	var $widths;
	var $aligns;
	var $lineHeight;

	//Set the array of column widths
	function SetWidths($w){
		$this->widths=$w;
	}

	//Set the array of column alignments
	function SetAligns($a){
		$this->aligns=$a;
	}

	//Set line height
	function SetLineHeight($h){
		$this->lineHeight=$h;
	}

	//Calculate the height of the row
	function Row($data)
	{
		// number of line
		$nb=0;
		
		// loop each data to find out greatest line number in a row.
		for($i=0;$i<count($data);$i++){
			// NbLines will calculate how many lines needed to display text wrapped in specified width.
			// then max function will compare the result with current $nb. Returning the greatest one. And reassign the $nb.
			$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
		}
		
		//multiply number of line with line height. This will be the height of current row
		$h=$this->lineHeight * $nb;
		
		//Issue a page break first if needed
		$this->CheckPageBreak($h);
		
		//Draw the cells of current row
		for($i=0;$i<count($data);$i++)
		{
			// width of the current col
			$w=$this->widths[$i];
			
			// alignment of the current col. if unset, make it left.
			$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
			
			//Save the current position
			$x=$this->GetX();
			$y=$this->GetY();
			
			//Draw the border
			$this->Rect($x,$y,$w,$h);
			
			//Print the text
			$this->MultiCell($w,5,$data[$i],0,$a);
			
			//Put the position to the right of the cell
			$this->SetXY($x+$w,$y);
		}
		//Go to the next line
		$this->Ln($h);
	}

	function CheckPageBreak($h)
	{
		//If the height h would cause an overflow, add a new page immediately
		if($this->GetY()+$h>$this->PageBreakTrigger)
			$this->AddPage($this->CurOrientation);
	}

	function NbLines($w,$txt)
	{
		//calculate the number of lines a MultiCell of width w will take
		$cw=&$this->CurrentFont['cw'];
		if($w==0)
			$w=$this->w-$this->rMargin-$this->x;
		$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
		$s=str_replace("\r",'',$txt);
		$nb=strlen($s);
		if($nb>0 and $s[$nb-1]=="\n")
			$nb--;
		$sep=-1;
		$i=0;
		$j=0;
		$l=0;
		$nl=1;
		while($i<$nb)
		{
			$c=$s[$i];
			if($c=="\n")
			{
				$i++;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
				continue;
			}
			if($c==' ')
				$sep=$i;
			$l+=$cw[$c];
			if($l>$wmax)
			{
				if($sep==-1)
				{
					if($i==$j)
						$i++;
				}
				else
					$i=$sep+1;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
			}
			else
				$i++;
		}
		return $nl;
	}
	function Header()
{
    // Logo
		$con = mysqli_connect("localhost", "root", "","cvsu_arec");
    	
	
	if ($_REQUEST["report"] == "Account") {
		$this->Image('../images/cvsu_arec.png',10,16,15);
		$this->SetFont('Times','',16);
		$this->Cell(80);
		$this->Cell(30,10,'CvSU AREC',0,1,'C');
		$this->Cell(80);
		$this->Line(15, 45, 200, 45);
		$this->Cell(30,10,'LIST OF ACCOUNT',0,1,'C');
		$this->Cell(30,10,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,10,'',0,1,'C');
		$this->SetFont('Times','',8);
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Ln(10);
		$this->SetTextColor(0, 128, 0);
	}
	if ($_REQUEST["report"] == "News") {
		$this->Image('../images/cvsu_arec.png',10,16,15);
		$this->SetFont('Times','',16);
		$this->Cell(80);
		$this->Cell(30,10,'CvSU AREC',0,1,'C');
		$this->Cell(80);
		$this->Line(15, 45, 200, 45);
		$this->Cell(30,10,'LIST OF NEWS',0,1,'C');
		$this->Cell(30,10,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,10,'',0,1,'C');
		$this->SetFont('Times','',8);
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Ln(10);
		$this->SetTextColor(0, 128, 0);
	}
	if ($_REQUEST["report"] == "Suggestion") {
		$this->Image('../images/cvsu_arec.png',10,16,15);
		$this->SetFont('Times','',16);
		$this->Cell(80);
		$this->Cell(30,10,'CvSU AREC',0,1,'C');
		$this->Cell(80);
		$this->Line(15, 45, 200, 45);
		$this->Cell(30,10,'LIST OF SUGGESTION',0,1,'C');
		$this->Cell(30,10,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,10,'',0,1,'C');
		$this->SetFont('Times','',8);
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Ln(10);
		$this->SetTextColor(0, 128, 0);
	}
	if ($_REQUEST["report"] == "Research") {
		$this->Image('../images/cvsu_arec.png',10,16,15);
		$this->SetFont('Times','',16);
		$this->Cell(80);
		$this->Cell(30,10,'CvSU AREC',0,1,'C');
		$this->Cell(80);
		$this->Line(15, 45, 200, 45);
		$this->Cell(30,10,'LIST OF RESEARCH',0,1,'C');
		$this->Cell(30,10,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,10,'',0,1,'C');
		$this->SetFont('Times','',8);
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Ln(10);
		$this->SetTextColor(0, 128, 0);
	}

	if ($_REQUEST["report"] == "project") {
		$this->Image('../images/cvsu_arec.png',10,16,15);
		$this->SetFont('Times','',16);
		$this->Cell(80);
		$this->Cell(150,10,'CvSU AREC',0,1,'C');
		$this->Cell(80);
		$this->Cell(150,10,'LIST OF PROJECT',0,1,'C');
		$this->Cell(80);
		$this->SetFont('Times','B',8);
		if (isset($_REQUEST["location"])) {
		
		$this->Cell(150,10,'Fiter location:'.$_REQUEST["location"] ,0,1,'C');
		}
		if (isset($_REQUEST["status"])) {
			$status = $_REQUEST["status"];
			$query = "SELECT * FROM `status` WHERE status_ID = '$status' ";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result))
            {
            $status_Name = $row["status_Name"];
            }
				$this->Cell(80);
		$this->Cell(150,0,'Fiter Status:'.$status_Name,0,1,'C');
		}
		$this->Cell(30,10,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Cell(80);
		$this->Cell(30,10,'',0,1,'C');
		$this->SetFont('Times','',8);
		$this->Cell(80);
		$this->Cell(30,0,'',0,1,'C');
		$this->Ln(20);
		$this->SetTextColor(0, 128, 0);
		
		// $this->Line(0, 45, 600, 45);
		$this->Cell(10,-15,'ID',0,0,'C');
		$this->Cell(125,-15,'TITLE',0,0,'C');
		$this->Cell(80,-15,'OWNER',0,0,'C');
		$this->Cell(35,-15,'COSTING',0,0,'C');
		$this->Cell(25,-15,'STARTED',0,0,'C');
		$this->Cell(25,-15,'ENDED',0,0,'C');
		$this->Cell(25,-15,'STATUS',0,1,'C');
			$this->Line(0, 45, 600, 45);
		$this->Ln(10);
		
	}
		
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}
?>
