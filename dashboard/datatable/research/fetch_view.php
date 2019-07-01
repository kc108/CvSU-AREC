<?php
include('db.php');
include('function.php');
if(isset($_POST["research_ID"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM `research` r
INNER JOIN research_status rs ON r.status_ID = rs.status_ID
WHERE research_ID = '".$_POST["research_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["research_Title"] = $row["research_Title"];
		$output["research_Content"] = $row["research_Content"];
    $output["research_yrConduct"] = $row["research_yrConduct"];
		$output["research_Attachment"] = 'datatable/research/uploads/'.$row["research_Attachment"];
		$output["research_Status"] = $row["status_ID"];
		$output["research_Created"] = $row["research_Created"];

	
	}
	
}
?>

  <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Research Title</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_Title" name="research_Title" placeholder="Research Title" value="<?php echo $output["research_Title"] ;?>" disabled>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Content">Content</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                            <textarea  class="form-control " id="research_Content" name="research_Content" placeholder="Content" style="max-width: 482px;height: 237px;" disabled=""> <?php echo $output["research_Content"] ;?></textarea>
                          </div>
                      </div>
                  </div>
              </div>

                <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_yrconduct">Year Conduct</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_yrconduct" name="research_yrconduct" value="<?php echo $output["research_yrConduct"] ;?>" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Status">Status</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                               <?php echo $row["status_Name"] ;?>
                      
                      </div>
                  </div>
              </div>
               <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment:</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <?php 
                        if (empty($row["research_Attachment"])) {
                          ?>No Attachment Available<?php
                        } else {
                         
                         ?>
                         <a class="btn btn-primary" href="<?php echo $output["research_Attachment"] ;?>" download>DOWNLOAD</a>
                         <?php
                        }
                        
                        ?>
                         
                         
                      </div>
                  </div>
              </div>