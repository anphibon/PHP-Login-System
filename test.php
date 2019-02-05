
<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

	ForceLogin();
?>

<!doctype html>
<html>
<head>
</head>
<body>
	<h2>Add Client</h2>

<div class="vds-builder">
<div class="row full_width club-blurb about-blurb" style="background-color:#fff;">
<div class="wrapper">
<div class="full " style="border-style:;">

<form class="js-add-client">
	<div class="gform_body"><ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below"><li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label gfield_label_before_complex" for="input_1_1_3">Name<span class="gfield_required">*</span></label><div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change" id="input_1_1">
	<span id="input_1_1_3_container" class="name_first">
		<label for="input_1_1_3">First</label>
		<input type="text" name="input_1.3" id="input_1_1_3" aria-label="First name" tabindex="2" aria-required="true" autocomplete="off" aria-invalid="false">
	</span>
	<span id="input_1_1_4_container" class="name_first">
		<label for="input_1_1_4">Middle</label>
		<input type="text" name="input_1.4" id="input_1_1_4" aria-label="Middle name" tabindex="3" aria-required="true" autocomplete="off" aria-invalid="false">
	</span>
	<span id="input_1_1_6_container" class="name_last">
		<label for="input_1_1_6">Last</label>
		<input type="text" name="input_1.6" id="input_1_1_6" aria-label="Last name" tabindex="4" aria-required="true" autocomplete="off" aria-invalid="false">
	</span>
	</div>
	</li>

	<li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
		<label class="gfield_label gfield_label_before_complex" for="input_1_4_1">Physical Address</label>    
		<div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change" id="input_1_4">
			<span class="ginput_full address_line_1" id="input_1_4_1_container">
				<input type="text" name="input_4.1" id="input_1_4_1" tabindex="5" autocomplete="off">
				<label for="input_1_4_1" id="input_1_4_1_label">Street Address</label>
			</span>
			<span class="ginput_left address_city" id="input_1_4_3_container">
				<input type="text" name="input_4.3" id="input_1_4_3" tabindex="6" autocomplete="off">
				<label for="input_1_4_3" id="input_1_4_3_label">City</label>
			</span>
			<span class="ginput_right address_state" id="input_1_4_4_container">
				<input type="text" name="input_4.4" id="input_1_4_4" tabindex="7" autocomplete="off"> 
				<label for="input_1_4_4" id="input_1_4_4_label">State / Province / Region</label>
			</span>
			<span class="ginput_left address_zip" id="input_1_4_5_container">
				<input type="text" name="input_4.5" id="input_1_4_5" tabindex="8" autocomplete="off">
				<label for="input_1_4_5" id="input_1_4_5_label">ZIP / Postal Code</label>
			</span>
			<span class="ginput_right address_country" id="input_1_4_6_container">
				<select name="input_4.6" id="input_1_4_6"  autocomplete="off" tabindex="9">
					<option value="" ></option>
					<option value="United States" selected="selected">United States</option>
					<option value="Mexico">Mexico</option>
				</select>
				<label for="input_1_4_6" id="input_1_4_6_label">Country</label>
			</span>
		</div>
	</li>

		<li>
			<div class="uk-margin" id="input_1_6_1_container">
		        <label class="uk-form-label" for="input_1_6_1">Client email</label>
		        <div class="uk-form-controls">
		            <input class="uk-input  uk-form-width-large" id="input_1_6_1" type="email"  placeholder="Client email" autocomplete="off" tabindex="10">
		        </div>
		    </div>
		</li>
		

		<li>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="input_1_7_1">Home Phone number</label>
		        <div class="uk-form-controls">
		            <input class="uk-input  uk-form-width-large" id="input_1_7_1" type="text"  placeholder="972-123-4567"autocomplete="off" tabindex="11">
		        </div>
		    </div>
		</li>
		<li>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="input_1_8_1">Cell Phone number</label>
		        <div class="uk-form-controls">
		            <input class="uk-input  uk-form-width-large" id="input_1_8_1" type="text"  placeholder="972-123-4567"autocomplete="off"tabindex="12">
		        </div>
		    </div>
		</li>
		<li>
		    <label for="DOB_m">DOB</label>
		    <div class="uk-margin" uk-margin="" style="margin:0 padding:0;">
	            <input class="uk-input uk-form-width-xsmall uk-first-column" id="DOB_m" type="text"  placeholder="MM" autocomplete="off"tabindex="13">


	            <input class="uk-input uk-form-width-xsmall" id="DOB_D" type="text" placeholder="DD" autocomplete="off" tabindex="14">

	            <input class="uk-input uk-form-width-xsmall" id="DOB_Y" type="text"  placeholder="YY" autocomplete="off" tabindex="15">
			</div>
		</li>
		<li>
			<div class="uk-margin">
		        <label class="uk-form-label" for="input_1_9_1">Drivers License</label>
		        <div class="uk-form-controls">
		            <input class="uk-input  uk-form-width-large" id="input_1_9_1" type="text"  placeholder="ex. '12345678'" autocomplete="off" tabindex="16">
		        </div>
		    </div>
		</li>
		<li>
		    <div class="uk-margin">
		        <label class="uk-form-label" for="input_1_10_1" >SSN</label>
		        <div class="uk-form-controls" >
		            <input class="uk-input  uk-form-width-large" id="input_1_10_1" placeholder="ex. '123-45-6789'" autocomplete="off" tabindex="17">
		        </div>
		    </div>
		</li>
		<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="18"> 
			<input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
			<input type="hidden" class="gform_hidden" name="gform_submit" value="1">
			<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
			<input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjQ1OGUyNmVlYjdjNDFiOGMzZjg2OTI0ZTExMzk0NzU0Il0=">
			<input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
			<input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
			<input type="hidden" name="gform_field_values" value="">
		</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<hr>
<!--	<h2>Add business</h2>
<div class="vds-builder">
<div class="row full_width club-blurb about-blurb" style="background-color:#fff;">
<div class="wrapper">
<div class="full " style="border-style:;">
<div class="gf_browser_safari gf_browser_iphone gform_wrapper" id="gform_wrapper_1">
	<form class="js-add-business" method="post" enctype="multipart/form-data" id="gform_1" action="/careers/">
	<div class="gform_body">
		<ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
			<li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
				<label class="gfield_label gfield_label_before_complex" for="input_1_1_3">
					<span class="gfield_required">*</span>
				</label>
				<div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change" id="input_1_1">
					<span id="input_1_1_3_container" class="name_first">
						<input type="text" name="input_1.3" id="input_1_1_3" aria-label="First name" tabindex="2" aria-required="true" aria-invalid="false">
						<label for="input_1_1_3">Legal name</label>
					</span>
					<span id="input_1_1_6_container" class="name_last">
						<input type="text" name="input_1.6" id="input_1_1_6" aria-label="Last name" tabindex="4" aria-required="true" aria-invalid="false">
						<label for="input_1_1_6">DBA name</label>
					</span>
				</div>
			</li>
			<li id="field_1_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
				<label class="gfield_label" for="input_1_2">Phone</label>
				<div class="ginput_container ginput_container_phone">
					<input name="input_2" id="input_1_2" type="text" class="medium" tabindex="6" aria-invalid="false">
				</div>
			</li>
			<li id="field_1_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
				<label class="gfield_label" for="input_1_3">Email<span class="gfield_required">*</span>
				</label>
				<div class="ginput_container ginput_container_email">
					<input name="input_3" id="input_1_3" type="text" class="medium" tabindex="7" aria-required="true" aria-invalid="false">
				</div>
			</li>
			<li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
				<label class="gfield_label gfield_label_before_complex" for="input_1_4_1">Physical Address</label>    
				<div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change" id="input_1_4">
					<span class="ginput_full address_line_1" id="input_1_4_1_container">
						<input type="text" name="input_4.1" id="input_1_4_1" tabindex="8">
						<label for="input_1_4_1" id="input_1_4_1_label">Street Address</label>
					</span>
					<span class="ginput_full address_line_2" id="input_1_4_2_container">
						<input type="text" name="input_4.2" id="input_1_4_2" tabindex="9">
						<label for="input_1_4_2" id="input_1_4_2_label">Address Line 2</label>
					</span>
					<span class="ginput_left address_city" id="input_1_4_3_container">
						<input type="text" name="input_4.3" id="input_1_4_3" tabindex="10">
						<label for="input_1_4_3" id="input_1_4_3_label">City</label>
					</span>
					<span class="ginput_right address_state" id="input_1_4_4_container">
						<input type="text" name="input_4.4" id="input_1_4_4" tabindex="12">
						<label for="input_1_4_4" id="input_1_4_4_label">State / Province / Region</label>
					</span>
					<span class="ginput_left address_zip" id="input_1_4_5_container">
						<input type="text" name="input_4.5" id="input_1_4_5" tabindex="13">
						<label for="input_1_4_5" id="input_1_4_5_label">ZIP / Postal Code</label>
					</span>
					<span class="ginput_right address_country" id="input_1_4_6_container">
						<select name="input_4.6" id="input_1_4_6" tabindex="14">
							<option value="" selected="selected"></option>
							<option value="United States">United States</option>
							<option value="Mexico">Mexico</option>
						</select>
						<label for="input_1_4_6" id="input_1_4_6_label">Country</label>
					</span>
				</div>
			</li>
			<li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label gfield_label_before_complex" for="input_1_4_1">Mailing Address</label>    
				<div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change" id="input_1_4">
					<span class="ginput_full address_line_1" id="input_1_5_1_container">
						<input type="text" name="input_5.1" id="input_1_5_1" tabindex="14">
						<label for="input_1_5_1" id="input_1_5_1_label">Street Address</label>
					</span>
					<span class="ginput_full address_line_2" id="input_1_5_2_container">
<input type="text" name="input_5.2" id="input_1_5_2" tabindex="15">
<label for="input_1_5_2" id="input_1_5_2_label">Address Line 2</label>
</span><span class="ginput_left address_city" id="input_1_5_3_container">
<input type="text" name="input_5.3" id="input_1_5_3" tabindex="16">
<label for="input_1_5_3" id="input_1_4_3_label">City</label>
</span><span class="ginput_right address_state" id="input_1_4_4_container">
<input type="text" name="input_5.4" id="input_1_5_4" tabindex="17">
<label for="input_1_5_4" id="input_1_4_4_label">State / Province / Region</label>
</span><span class="ginput_left address_zip" id="input_1_5_5_container">
<input type="text" name="input_5.5" id="input_1_4_5" tabindex="18">
<label for="input_1_5_5" id="input_1_5_5_label">ZIP / Postal Code</label>
</span><span class="ginput_right address_country" id="input_1_4_6_container">
<select name="input_5.6" id="input_1_5_6" tabindex="19"><option value="" selected="selected"></option><option value="United States">United States</option><option value="Mexico">Mexico</option></select>
<label for="input_1_5_6" id="input_1_5_6_label">Country</label>
</span>
<div class="gf_clear gf_clear_complex"></div>
<li id="field_1_7" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_7">Upload Resume</label><div class="ginput_container ginput_container_fileupload"><input type="hidden" name="MAX_FILE_SIZE" value="104857600"><input name="input_7" id="input_1_7" type="file" class="medium" aria-describedby="extensions_message_1_7" onchange="javascript:gformValidateFileSize( this, 104857600 );" tabindex="20"><span id="extensions_message_1_7" class="screen-reader-text"></span><div class="validation_message"></div></div></li><li id="field_1_8" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_8">Upload Photo<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_fileupload"><input type="hidden" name="MAX_FILE_SIZE" value="104857600"><input name="input_8" id="input_1_8" type="file" class="medium" aria-describedby="extensions_message_1_8" onchange="javascript:gformValidateFileSize( this, 104857600 );" tabindex="21"></div></div></li><div></div></div></li>
</ul></div>
<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="22" onclick='if(window["gf_submitting_1"]){return false;}  window["gf_submitting_1"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} window["gf_submitting_1"]=true;  jQuery("#gform_1").trigger("submit",[true]); }'> 
<input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
<input type="hidden" class="gform_hidden" name="gform_submit" value="1">
<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
<input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjQ1OGUyNmVlYjdjNDFiOGMzZjg2OTI0ZTExMzk0NzU0Il0=">
<input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
<input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
<input type="hidden" name="gform_field_values" value="">
</div>

</form>
</div>

</div>

</div>

</div>

</div>-->
<hr>
  	<?php
  		require_once "inc/footer.php"; 

  	?>
</body>
</html>
