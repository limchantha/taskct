<?php $this->load->view('admin/common/header.php'); ?>
<?php $this->load->view('admin/common/sidebar.php'); 
if(!empty(unserialize($previllage))){extract(unserialize($previllage));}?>
<div id="content">

<!--breadcrumbs-->
  <div id="content-header">
  <?php if($this->session->flashdata('error_type')!='' && $this->session->flashdata('alert_message')!='' ){?>
<div class="alert <?php if(($this->session->flashdata('error_type')=='error')){?>alert-danger<?php }else{ echo "alert-success";}?>">
											<a class="close" data-dismiss="alert" href="javascript:void(0);">×</a>

											<?php echo( $this->session->flashdata('alert_message'));?>
											<br>
</div>
	<?php } ?>	
    <div id="breadcrumb"> <a href="javascript:void(0);" title="<?php echo $heading;?>" class="tip-bottom"><i class="icon-home"></i> <?php echo $heading;?></a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
 <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5><?php echo $heading;?></h5>
          </div>
          <div class="widget-content nopadding">
			<table id="dynamic-table" class="table table-bordered data-table">
													<thead>
														<tr>
															
															<th>Sno</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Email</th>
															<th>Mobile</th>
															<th>Zipcode</th>
															<th>Status</th>
															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<?php foreach($user->result() as $user_list){?>
														<tr>															
															<td><?php echo $user_list->id;?></td>
															<td><?php echo ucfirst($user_list->first_name);?></td>
															<td><?php echo $user_list->last_name;?></td>
															<td><?php echo $user_list->email;?></td>
															<td><?php echo $user_list->phone;?></td>
															<td><?php echo $user_list->zipcode;?></td>
															<td><a class="btn btn-<?php echo $user_list->status=='Active'?'success':'danger';?>" href="<?php echo base_url();?>admin/user/change_status/<?php echo $user_list->id;?>/<?php echo $user_list->status=='Active'?0:1;?>">
																<?php echo $user_list->status=="Active"?"Active":"Inactive";?></a></td>
															<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<?php if($prev==1 || (!empty($Users) && in_array('2',$Users))){?>												
																<a class="btn btn-success" href="<?php echo base_url();?>admin/user/add_user/<?php echo $user_list->id;?>">
																	Edit
																</a> 
																<?php } ?>	
																<?php if($prev==1 || (!empty($Users) && in_array('3',$Users))){?>
																
																<a class="btn btn-danger" onclick="return confirm('Once deleted cant be recover again...');" href="<?php echo base_url();?>admin/user/delete_user/<?php echo $user_list->id;?>">
																	Delete
																</a>
																<?php } ?>	
															</div>													
														</td>
														</tr>
														<?php } ?>														
													</tbody>
											</table>
		  </div>
        </div>
      </div>
    </div>
  </div>


</div>
<?php $this->load->view('admin/common/footer');?>
