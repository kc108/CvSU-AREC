<?php
include('db.php');
include('function.php');
if(isset($_POST["proj_ID"]))
{
  $output = array();
  $statement = $connection->prepare(
    "SELECT * FROM `project_monitoring`
    WHERE proj_ID = '".$_POST["proj_ID"]."' 
    LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {

    $output["proj_Title"] = $row["proj_Title"];
    $output["proj_Owner"] = $row["proj_Owner"];
    $output["proj_Location"] = $row["proj_Location"];
    $output["proj_DateStarted"] = $row["proj_DateStarted"];
    $output["proj_DateEnded"] = $row["proj_DateEnded"];
    $output["proj_Scope"] = $row["proj_Scope"];
    $output["proj_Head"] = $row["proj_Head"];
    $output["status_ID"] = $row["status_ID"];

  
  }
   json_encode($output);
}
?>

     <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_title">Project Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title" value="<?php echo $output["proj_Title"] ?>" disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_owner">Project Owner</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_owner" name="project_owner" placeholder="Project Owner" value="<?php echo $output["proj_Owner"] ?>"  disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_location">Project Location</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_location" name="project_location" placeholder="Project Location" value="<?php echo $output["proj_Location"] ?>"  disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_start">Start Date</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7"  disabled="">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="date" class="form-control" id="project_start" name="project_start" value="<?php echo $output["proj_DateStarted"] ?>">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_end">End Date</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7"  disabled="">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="date" class="form-control" id="project_end" name="project_end" value="<?php echo $output["proj_DateEnded"] ?>"  disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Scope</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_scope" name="project_scope" placeholder="Project Scope" value="<?php echo $output["proj_Scope"] ?>"  disabled=""> 
                          </div>
                      </div>
                  </div>
              </div>
              <br>

              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_end">Project Head</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="project_head" name="project_head" placeholder="Name " value="<?php echo $output["proj_Head"] ?>"  disabled="">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="project_status">Project Status</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="project_status" id="project_status"  disabled="">
                                <option value="">~~SELECT~~</option>
                              <?php 
                               $statement = $connection->prepare(
                                  "SELECT * FROM `status`"
                                );
                                $statement->execute();
                                $result = $statement->fetchAll();
                                foreach($result as $row)
                                {
                                  if ($row['status_ID'] == $output["status_ID"]) {
                                        ?>
                                        <option value="<?php echo $row['status_ID']?>" selected="selected"><?php echo $row['status_Name']?></option>
                                        <?php
                                      }
                                      else{
                                        ?>
                                        <option value="<?php echo $row['status_ID']?>" ><?php echo $row['status_Name']?></option>
                                        <?php
                                      }
                                }
                                ?>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
  