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
				function cmp_common($a, $b)
				{
						return strcmp($a['start'], $b['start']);
				}

				function cmp_sessions($a, $b)
				{
						return strcmp($a['startTimestamp'], $b['startTimestamp']);
				}

				function cmp_data($a, $b)
				{
						return strcmp($a['key'], $b['key']);
				}
			
				function doponente($ses) {
					$html = '<br/>';
					$html .= '<small style="float:right">';
					foreach($ses['ponente'] as $p) {
						$html .= '<a href="#ponente_'.$p['id'].'">'.$p['name'].'</a> ';
					}
					$html .= '</small>';
					return $html;
				}

				function orderdata($jcommon, $jsessions) {
					$acommon = $jcommon['day'][0]['slot'];
					$asessions = $jsessions['sessions'];
					usort($acommon, "cmp_common");
					usort($asessions, "cmp_sessions");
					$offcom = 7;

					foreach($acommon as $com) {
						$temp1 = explode(":",$com['start']);
						$time1h = $temp1[0] + $offcom;
						$time1 = $time1h . ":" . $temp1[1];
						$key = $time1h . $temp1[1];
						$date1 = new DateTime($jcommon['day'][0]['date'] . $time1);

						$temp2 = explode(":",$com['end']);
						$time2h = $temp2[0] + $offcom;
						$time2 = $time2h . ":" . $temp2[1];
						$date2 = new DateTime($jcommon['day'][0]['date'] . $time2);

						$d['css'] = 'solouna';
						$d['title'] = $com['title'];
						$d['meta'] = $com['meta'];
						$d['startTimestamp'] = $date1->getTimestamp();
						$d['endTimestamp'] = $date2->getTimestamp();
						$d['start'] = $date1->format('H:i');
						$d['stop'] = $date2->format('H:i');
						$d['key'] = $key;

						$data[$key][] = $d;
					}

					$string = file_get_contents("_ponentes.json");
					$json_a=json_decode($string,true);

					foreach($asessions as $ses) {
						$date1 = new DateTime();
						$date1->setTimestamp($ses['startTimestamp']);

						$date2 = new DateTime();
						$date2->setTimestamp($ses['endTimestamp']);

						$d['ponente'] = null;
						// Buscar ponente
						foreach ($json_a['presenters'] as $p) {
							foreach($ses['presenterIds'] as $pid) {
								if ($pid == $p['id']) {
									$d['ponente'][] = $p;
								}
							}
						}

						if ($ses['location'] == "sala_tech") $d['css'] = "columna1";
						else if ($ses['location'] == "sala_hack") $d['css'] = "columna3";
						else if ($ses['location'] == "sala_group") $d['css'] = "columna4";
						else $d['css'] = "columna2";
						$d['title'] = $ses['title'];
						$d['meta'] = "desc";
						$d['startTimestamp'] = $date1->getTimestamp();
						$d['endTimestamp'] = $date2->getTimestamp();
						$d['start'] = $date1->format('H:i');
						$d['stop'] = $date2->format('H:i');
						$d['key'] = $date1->format('Hi');

						$data[$d['key']][] = $d;
					}

					ksort($data);

					return $data;
				}

				$string_common = file_get_contents("api/common.json");
				$json_common=json_decode($string_common,true);
				$string_sessions = file_get_contents("api/sessions.json");
				$json_sessions=json_decode($string_sessions,true);

				$data = orderdata($json_common, $json_sessions);
			?>

			<div id="tablaprograma" class="about">
				<div id="cabecera">
					<div class="row">
						<div class="col-md-2 cabecera columna0"><span>Hora</span></div>
						<div class="col-md-5 aligncenter2 cabecera columna1">
							<span>Track Tecnología</span>
						</div>
						<div class="col-md-5 aligncenter2 cabecera columna2">
							<span>Track Emprendedor</span>
						</div>
					</div>
				</div>
				<?php
					foreach($data as $adata) { ?>
						<div class="row">
							<div class="col-md-2"><?php echo $adata[0]['start'];?></div>
						<?php if ($adata[0]['css'] == 'solouna') { ?>
							<div class="col-md-10 solouna">
								<span><?php echo $adata[0]['title'];?> - <small><?php echo $adata[0]['meta'];?></small></span>
							</div>
						<?php } else { ?>
									<?php 
									$col1 == null; $col2 == null; $col3 == null; $col4 == null;
									foreach($adata as $ad) {
											if ($ad['css'] == "columna1") $col1 = $ad;
											else if ($ad['css'] == "columna2") $col2 = $ad;
											else if ($ad['css'] == "columna3") $col3 = $ad;
											else if ($ad['css'] == "columna4") $col4 = $ad;
										}
									?>
									<?php if ($col3 != null) {?>
									<div class="col-md-2 columna1"><span><?php echo $col3['title'];?></span><?php echo doponente($col3);?></div>
									<div class="col-md-1"></div>
									<div class="col-md-2 columna1"><span><?php echo $col4['title'];?></span><?php echo doponente($col4);?></div>
									<?php } else { ?>
									<div class="col-md-5 columna1"><span><?php echo $col1['title'];?></span><?php echo doponente($col1);?></div>
									<?php } ?>
									<div class="col-md-5 columna2"><span><?php echo $col2['title'];?></span><?php echo doponente($col2);?></div>
						<?php } ?>
						</div>
					<?php }
				?>
<!--
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
-->
			</div>
		</div>
	</div>
