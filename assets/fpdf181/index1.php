<?php

$con = mysqli_connect("localhost", "root", "","cvsu_arec");
require('html_table.php');


$query ="";
$query .= "SELECT `pm`.*,`s`.`status_Name`";
$query .= "FROM `project_monitoring` `pm` LEFT JOIN `status` `s` ON `pm`.`status_ID` = `s`.`status_ID` ";

if (isset($_REQUEST['status'])) {
	$proj_status = $_REQUEST['status'];
 $query .= '  WHERE `pm`.`status_ID` = '.$proj_status.' AND ';
}
else{
	 $query .= ' WHERE ';
}
if(isset($_REQUEST["filter_search"]))
{
 	$query .= '(proj_Title LIKE "%'.$_REQUEST["filter_search"].'%" ';
    $query .= 'OR proj_Owner LIKE "%'.$_REQUEST["filter_search"].'%" ';
    $query .= 'OR proj_Location LIKE "%'.$_REQUEST["filter_search"].'%" ';
    $query .= 'OR proj_Head LIKE "%'.$_REQUEST["filter_search"].'%" )';
}
	$query .= 'ORDER BY date_added DESC ';



// <tr>
// <td>ID</td>
// <td>TITLE</td>
// <td>OWNER</td>
// <td>COSTING</td>
// <td>STARTED</td>
// <td>ENDED</td>
// <td>STATUS</td>
// </tr>

$htmlTable='
<table>
  <tr  style=\'background-color: #607d8b;\'>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>';

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->WriteHTML("Start of the HTML table.<b>BOLD</b>$query<br>$htmlTable<br>End of the table.");
$pdf->Output();
?>