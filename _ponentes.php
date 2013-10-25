	<a name="ponentes" id="ponentes"></a>
	<div class="border"></div>

	<div class="ponentes">
		<div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="head">
               <h2>Ponentes</h2>
               <div class="bor"></div>
            </div>
         </div>
				</div>

				
<?php
	$string = file_get_contents("_ponentes.json");
	$json_a=json_decode($string,true);
	foreach($json_a['presenters'] as $ponente) { ?>
		<div class=row">
      <div class="span12">
         <div class="about">
            <!-- Groom details with photo -->
						<div class="rrss">
							<?php if ($ponente['linkedin'] != "") { ?>
								<a href="<?php echo $ponente['linkedin'];?>"><img src="img/rrss/LinkedIn.png"></a>
							<?php } ?>
							<?php if ($ponente['twitter'] != "") { ?>			
								<a href="<?php echo $ponente['twitter'];?>"><img src="img/rrss/Twitter.png"></a>
							<?php } ?>
							<?php if ($ponente['plusoneUrl'] != "") { ?>
								<a href="<?php echo $ponente['plusoneUrl'];?>"><img src="img/rrss/Google.png"></a>
							<?php } ?>
						</div>
            <h3><?php echo $ponente['name'];?> <span class="ameta"><?php echo $ponente['cargo'];?></span></h3>
            <p> <img src="<?php echo $ponente['thumbnailUrl'];?>" alt="" class="img-circle"/><?php echo $ponente['bio'];?></p>
						<div style="clear:both"></div>
         </div>
      </div>
		</div>
	<?php }
?>           
		
		</div>
	</div>
