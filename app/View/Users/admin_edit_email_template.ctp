<?php  echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js'); ?>


<script type="text/javascript">
$(document).ready(function() {
	$("#submit").click(function() {
         tinyMCE.triggerSave();
         var status;
         status = $("#register").valid(); //Validate again
         if(status==true) { 
             //Carry on
         }
         else { }
});
var validator = $("#register").click(function(){
	  tinyMCE.triggerSave();
          }).validate({
        ignore: "",	
		rules:
		{
			"data[EmailTemplate][title]":
			{
				required:true
			},
			"data[EmailTemplate][subject]":
			{
				required:true
			},
			"data[EmailTemplate][description]":
			{
				required:true
			}
		},
		messages:
		{
			
			"data[EmailTemplate][description]":
			{
				required:'Description is required.'
			}
			
		},

		errorPlacement: function(label, element) {
        // position error label after generated textarea
        if (element.is("textarea")) {
             label.insertAfter(element.next());
           } else {
           label.insertAfter(element)
            }
          }

	  });
	  $('#submit').click(function(){
	  	var sub = $('#elm4_textarea').val();
	  	
	  	if(sub=="")
	  	{
	  		$("#req").show();
	  	}
	  	else
	  	{
	  		$("#req").hide();	
	  	}
	  	//return false;
	  });
			
	});
	
	
</script>

<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});
</script>


	
<div id="sub-nav">
	<div class="page-title">
		<h1>EDIT EMAIL TEMPLATE</h1>
		<span></span>
	</div>
		<div id="top-buttons">

		</div>

</div>

		
<div id="page-layout">
	<div id="page-content">
		<div id="page-content-wrapper">
			<a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
			<div class="inner-page-title">
				<h2>Edit Email Template</h2>
				<span></span>
			</div>
			
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							Edit Email Template
						</div>
						
						<div class="content-box-wrapper">

							<form class="forms" id="register"  method="post"  enctype="multipart/form-data" action="<?php echo HTTP_ROOT;?>admin/Users/edit_email_template" >
                              
							 <input type="hidden" name="data[EmailTemplate][id]" value="<?php echo $email['EmailTemplate']['id']?>"/>             
                           
         <fieldset>
									<ul> 										 
          <li>
											   <label class="desc" for="firstname">Title<em style="color:red;">*</em></label>
											    <div><input  class="field text full" name="data[EmailTemplate][title]" type="text" value="<?php echo $email['EmailTemplate']['title']?>" /></div>
									</li>
									<li>
											   <label class="desc" for="firstname">Subject<em style="color:red;">*</em></label>
											    <div><input  class="field text full" name="data[EmailTemplate][subject]" type="text" value="<?php echo $email['EmailTemplate']['subject']?>"/></div>
									</li>									
									<li>
											<label class="desc" for="firstname"> Description <em style="color:red;">*( Please Do not Change data under these {[]} braces)</em></label>
											<div><textarea id="elm4_textarea" name="data[EmailTemplate][description]" class="mceEditor mce_editor" style="width:136.5%;height:300px;"><?php echo $email['EmailTemplate']['description']?></textarea></div>
									  <p id="req" style="display:none;"><em style="color:red;">This field is required.</em></p>
									</li>
									<li>
											<input type="submit" value="Save" id="submit">
									</li>
										
									</ul>
									</ul>
								</fieldset>
							</form>
						</div>
                        

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>
