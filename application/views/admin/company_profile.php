<?php include('incs/header_1.php'); ?>
<?php include('incs/side_1.php'); ?>
<?php include('incs/subheader.php'); ?>
	


<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">					

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<!--begin::Portlet-->
	

	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
											<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
</div>
<?php if ($das = $this->session->flashdata('massage')): ?>
	  <div class="alert alert-success fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                            <div class="alert-text"><?php echo $das;?></div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                  </div>
         <?php endif; ?>

            <?php if ($das = $this->session->flashdata('error')): ?>
      <div class="alert alert-danger fade show alert-danger" role="alert">
                            <div class="alert-icon"><i class="flaticon2-delete"></i></div>
                            <div class="alert-text"><?php echo $das;?></div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                  </div>
         <?php endif; ?>
<!-- end:: Content Head -->
<!-- begin:: Content -->
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1" role="tab">
                        <svg xmlns="" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"/>
        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Profile
                    </a>
</li>
 
        <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_3" role="tab">
                        <svg xmlns="" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"/>
        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"/>
        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Change Password
                    </a>
                </li>

                
  
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!-- <form action="#" method=""> -->
        	<?php echo form_open_multipart("admin/update_company_profile/{$comp_data->comp_id}"); ?>
            <div class="tab-content">
                <div class="tab-pane active" id="kt_apps_user_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Company Info:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                            	<?php if($comp_data->comp_logo == TRUE){ ?>
                                                <div class="kt-avatar__holder" style="background-image: url('<?php echo base_url().'assets/img/'.$comp_data->comp_logo; ?>');"></div>
                                            <?php }elseif($comp_data->comp_logo == FALSE){ ?>
                                          <div class="kt-avatar__holder" style="background-image: url('<?php echo base_url(); ?>assets/img/user.png');"></div>
                                            	<?php } ?>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="comp_logo" accept=".png, .jpg, .jpeg"  value="<?php echo $comp_data->comp_logo; ?>">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input readonly class="form-control" name="comp_name" type="text" value="<?php echo $comp_data->comp_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Registration No.</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input readonly class="form-control" name="comp_number" type="number" value="<?php echo $comp_data->comp_number; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input readonly class="form-control" name="adress" type="text" value="<?php echo $comp_data->adress; ?>">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Phone</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                <input type="text" name="comp_phone" class="form-control" value="<?php echo $comp_data->comp_phone; ?>" placeholder="Phone" aria-describedby="basic-addon1">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input readonly type="email" name="comp_email" class="form-control" value="<?php echo $comp_data->comp_email; ?>" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <br>
                                    <div class="text-center">
                                    	  <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <?php echo form_close(); ?>



             
                <div class="tab-pane" id="kt_apps_user_edit_tab_3" role="tabpanel">
                    <div class="kt-form kt-form--label-right">

                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Change Your Password:</h3>
                                        </div>
                                    </div>
                                    <?php echo form_open("admin/change_password"); ?>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" required name="oldpass" class="form-control" value="<?php echo set_value('oldpass') ?>" placeholder="******">
                                            <?php echo form_error("oldpass"); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" required name="newpass" class="form-control" value="<?php echo set_value('newpass') ?>" placeholder="******">
                                            <?php echo form_error("newpass"); ?>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-last row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" required class="form-control" name="passconf" value="<?php echo set_value('passconf') ?>" placeholder="******">
                                            <?php echo form_error("passconf"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                            
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-xl-3"></div>
                                <div class="col-lg-9 col-xl-6">
                                    <button type="submit" class="btn btn-label-brand btn-bold">Change Password</a>
                                    <button type="reset" class="btn btn-clean btn-bold">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        
    </div>
</div></div>
				
<!-- end:: Content -->
<!-- end:: Content -->
				</div>				
				
<?php include('incs/footer_1.php') ?>	