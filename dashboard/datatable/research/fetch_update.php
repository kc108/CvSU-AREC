<?php
include('db.php');
include('function.php');
if(isset($_POST["research_ID"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM `research`
		WHERE research_ID = '".$_POST["research_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["research_Title"] = $row["research_Title"];
		$output["research_Content"] = $row["research_Content"];
		$output["research_Attachment"] = 'datatable/research/uploads/'.$row["research_Attachment"];
		$output["research_Status"] = $row["status_ID"];
		$output["research_Created"] = $row["research_Created"];

	
	}
	 json_encode($output);
}
?>
  <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Title">Research Title</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="research_Title" name="research_Title" placeholder="Research Title" value="<?php echo $output["research_Title"]?>">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Content">Content</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                            <textarea  class="form-control " id="research_Content" name="research_Content" placeholder="Content" style="width: 482px;height: 237px;"><?php echo $output["research_Content"]?></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_Status">Status</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="research_Status" id="research_Status" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Pending</option>
                                <option value="2">Approve</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
               <br>
              (<b>Optional :</b> <i> 1 Attachment Per Research </i>)
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="research_attachment">Attachment</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="file" name="research_Attachment"  id="research_Attachment" class="form-control" value="<?php echo $output["research_Attachment"]?>">
                          </div>
                      </div>
                  </div>
              </div>
  