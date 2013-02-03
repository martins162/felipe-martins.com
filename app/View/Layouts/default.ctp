<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->element('head'); ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#download').click(function() {
					$.post("<?php echo $this->Html->url(array('controller' => 'download')); ?>",
						{id: $(this).attr('id')},
						function(data) {
							
						}
					);
				});
			});
		</script>
	</head>

	<body class="backgrounded dark" data-spy="scroll" data-target=".sidebar-nav">
		
		<?php echo $this->element('phone-navbar'); ?>

		<div class="container">
		    <div class="row" id="content">
		      	<!-- If you want the sidebar placed on the left, place it just after this and change the sbright class by sbleft -->

		        <!-- MAIN CONTENT -->
		        <div class="span9 equal" id="main-content">
		        
		        	<div class="tools noprint visible-desktop">
						<a href="javascript:if(window.print)window.print()" title="Print" data-placement="bottom" class="tips glyphicons print"><i></i></a>
						<a href="download" title="Download" id="download" data-placement="bottom" class="tips glyphicons file_import"><i></i></a>
					</div>
		        
			        <!-- ABOUT ME -->
			        <?php echo $this->element('pages/about-me') ?>
					<span class="clear"></span>    
					  	
					<!-- PERSONAL INFORMATION -->
					<?php echo $this->element('pages/personal-information') ?>
					<span class="clear"></span>

					<!-- EMPLOYMENT -->
					<?php echo $this->element('pages/employment') ?>
					<span class="clear"></span>

					<!-- EDUCATION -->
					<?php echo $this->element('pages/education') ?>
					<span class="clear"></span>   	
					  	
					<!-- SKILLS -->
					<?php echo $this->element('pages/skills') ?>
					<span class="clear"></span>  	
					
					<!-- TESTIMONIALS -->
					<?php //echo $this->element('pages/testimonials') ?>
					<!--<span class="clear"></span>-->

					<!-- HOBBIES -->
					<?php echo $this->element('pages/hobbies') ?>
					<span class="clear"></span> 
						
					<!-- POETFOLIO -->
					<?php echo $this->element('pages/portfolio') ?>
					<span class="clear"></span>	
					
					<!-- BLOG -->
					<?php echo $this->element('pages/blog'); ?>
					<span class="clear"></span>
						  
					<!-- CONTACT -->
					<?php echo $this->element('pages/contact'); ?>
		        </div><!--/span9-->
		        <!-- END OF THE MAIN CONTENT -->
		        
		        <!-- Sidebar placed on the RIGHT of the screen -->
		        <?php echo $this->element('sidebar'); ?>
			</div><!--/row-->
		      	<!-- FOOTER -->
				<?php echo $this->element('footer'); ?>
		</div><!--/.container-->
	</body>
</html>