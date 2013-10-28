	<a name="programa" id="programa"></a>
	<div class="border"></div>

	<div class="programa">
		<div class="container">
			<div class="row">
			 <div class="col-md-12">
				<div class="head">
				   <h2>Programa</h2>
				   <div class="bor"></div>
				</div>
			 </div>
			</div>

			<?php
				function orderdata($jcommon, $jsessions) {
					foreach($jcommon as $jc) {
						
					}
				}

				$string_common = file_get_contents("api/common.json");
				$json_common=json_decode($string,true);
				$string_sessions = file_get_contents("api/sessions.json");
				$json_sessions=json_decode($string,true);

				$data = orderdata($json_common, $json_sessions);
			?>

			<div id="tablaprograma" class="about">
				<div id="cabecera">
					<div class="row">
						<div class="col6 aligncenter2 cabecera columna1">
							<span>Track Tecnología</span>
						</div>
						<div class="col6 aligncenter2 cabecera columna2">
							<span>Track Emprendedor</span>
						</div>
					</div>
				</div>
				<div class="row solouna">
					<div class="col2"><span>09:30</div>
					<div class="col10"><span>Acreditaciones, desayuno y recepci&oacute;n de asistentes</span></div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>10:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>10:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>10:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>10:55</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row solouna">
					<div class="col2"><span>11:30</div>
					<div class="col10"><span>Descanso para caf&eacute; y networking</span></div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>12:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>12:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>12:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>12:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>13:30</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>13:30</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
			   <div class="row solouna">
					<div class="col2"><span>14:15</div>
					<div class="col10"><span>Descanso para comer y coger fuerzas</span></div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>16:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>16:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>16:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>16:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row solouna">
					<div class="col2"><span>17:30</div>
					<div class="col10"><span>Descanso para caf&eacute; y networking</span></div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>18:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>18:00</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col6 columna1">
						<div class="col2"><span>18:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
					<div class="col6 columna2">
						<div class="col2"><span>18:45</span></div>
						<div class="col4"><span>Ponencia</span></div>
					</div>
				</div>
				<div class="row solouna">
					<div class="col2"><span>19:30</div>
					<div class="col10"><span>After Party</span></div>
				</div>
			</div>
		</div>
	</div>
