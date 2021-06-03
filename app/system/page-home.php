<?php include("menu.php"); ?>
<div class="container">

	<div class="container-group">
		
		<div class="container-item" style="background: <?php echo $blocks_list[0]; ?>;" data-info-color="<?php echo $blocks_list[0]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad A</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>			
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[1]; ?>;" data-info-color="<?php echo $blocks_list[1]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad B</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>			
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[2]; ?>;" data-info-color="<?php echo $blocks_list[2]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad C</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>				
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[3]; ?>;" data-info-color="<?php echo $blocks_list[3]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad D</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>				
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[4]; ?>;" data-info-color="<?php echo $blocks_list[4]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title ">
					<div class="container-item-title-text">Notepad E</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>				
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[5]; ?>;" data-info-color="<?php echo $blocks_list[5]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad F</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>				
		</div>

		<div class="container-item" style="background: <?php echo $blocks_list[6]; ?>;" data-info-color="<?php echo $blocks_list[6]; ?>;">
			<div class="container-item-group">
				<div class="container-item-title">
					<div class="container-item-title-text">Notepad G</div>
				</div>
				<div class="container-item-icon"><span class="item-icon item-edite">&#9998;</span></div>
				<div class="container-item-icon"><span class="item-icon item-close">&#10006;</span></div>
			</div>
			<div class="container-item-context">
				A trum quam lorem quisque etiam ultrices tellus ut, leo tincidunt dictum turpis fames curabitur aliquam. hendrerit platea risus eleifend quam leo litora eleifend, iaculis qua...
			</div>				
		</div>

	</div>
</div>

<div class="itemedite" id="edite-painel">
	<form method="POST">
		<div class="itemedite-title">Edit Note</div>
        <div class="itemedite-description">Fill in the fields correctly</div>		
		<div class="itemedite-group">

			<label class="itemedite-label">Title</label>
			<input type="" name="" class="itemedite-input" id="edite-title">
			<label class="itemedite-label">Context</label>
			<textarea class="itemedite-area" id="edite-context"></textarea>
			<div class="itemedite-button-group">
				<div class="itemedite-close" id="close-painel">Close</div>
				<div></div>
				<button type="submit" class="itemedite-submit">Save</button>
			</div>
		</div>
	</form>	
</div>	


<div class="itemedite-background"></div>