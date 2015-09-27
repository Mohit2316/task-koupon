<?php
				echo "<form id='block_koupon_form".$koupon['kpn_id']."' name='block_koupon_form' action='koupon_info.php' method='POST'>";
				echo "<input name='block_this_koupon' type='hidden' value='".$koupon['kpn_id']."'>";
				echo "</form>";		
				echo "<form id='active_koupon_form".$koupon['kpn_id']."' name='active_koupon_form' action='koupon_info.php' method='POST'>";
				echo "<input name='active_this_koupon' type='hidden' value='".$koupon['kpn_id']."'>";
				echo "</form>";
				echo "<div id='people_panel'>";
				echo "<li class='list-group-item'>";
				echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
				echo "<img src='".$koupon['image_small']."'alt='Koupon Image' class='img-circle'>";
				echo "</a>";
				echo "<a href='#' class='clear'>";
				echo "<small class='pull-right'><table width='100%' style=\"font-family:'Calibri';font-size:10pt;\">
						<tr data-toggle='tooltip' data-placement='bottom' data-title='Deal Start Date'><td><i class='icon-link'></i></td><td><small> &nbsp;".date("h:ia d/m/Y.",strtotime($koupon['deal_start_date']))."</small></td></tr><tr data-toggle='tooltip' data-placement='bottom' data-title='Deal End Date'><td><i class='icon-unlink'></i></td><td><small> &nbsp;".date("h:ia d/m/Y.",strtotime($koupon['deal_end_date']))."</small></td></tr><tr><td></td><td style='margin-top:10px;'>".get_koupon_status($koupon['kpn_id'])."</td></tr>
						</table></small>";
				echo "<strong class='block' style='color:#80c740;'>".$koupon['title']."</strong>";
				echo "<table width='80%' style=\"font-family:'Calibri';font-size:11pt;\">";
				echo "<tr style='color:NAVY'><td width='30%'><small data-toggle='tooltip' data-placement='bottom' data-title='Company Created'><i class='icon-cogs'></i> ".get_koupon_details($koupon['created_by'],'company_name')."</small></td><td><small  data-toggle='tooltip' data-placement='bottom' data-title='Item type'><i class='icon-folder-close-alt'></i> ".get_koupon_details($koupon['menu_id'],'name')."</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small  data-toggle='tooltip' data-placement='bottom' data-title='Followers'><i class='icon-eye-open'></i> ".$koupon['following']."</small></td></tr>";
				echo "<tr><td width='100%' colspan='2' style='font-size:11pt;'><i class='icon-edit'></i><small> Description : ".$koupon['short_desc']."</small></td></tr>";
				echo "</table></a>";
				echo "</li></div>";
				echo "<center>";
				echo "<div id='koupon_panel'><br>";
				echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
				echo "              <section class='panel'>";
				echo "                <div class='table-responsive'>";
				echo "                  <table class='table table-striped m-b-none' data-ride='datatables'>";
				echo "						<tr><th rowspan='8' width='20%'><center>Koupon Details<img src=".$koupon['image_large']." width='150px' height='150px'></center></th></tr>
												<tr><th width='20%'>Description</th><td>".$koupon['long_desc']."</td></tr>
												<tr><th width='20%'>Time Bound</th><td>".get_koupon_details($koupon['kpn_id'],"time_bound")."</td></tr>
												<tr><th width='20%'>Volume</th><td>".get_koupon_details($koupon['kpn_id'],"volume")."</td></tr>
												<tr><th width='20%'>Start Date</th><td>".date("h:i:sa l, d-F-Y.",strtotime($koupon['deal_start_date']))."</td></tr>
												<tr><th width='20%'>End Date</th><td>".date("h:i:sa l, d-F-Y.",strtotime($koupon['deal_end_date']))."</td></tr>
												<tr><th width='20%'>Created Date</th><td>".date("h:i:sa l, d-F-Y.",strtotime($koupon['creation_date']))."</td></tr>
												<tr><th width='20%'>Updated Date</th><td>".date("h:i:sa l, d-F-Y.",strtotime($koupon['last_update_date']))."</td></tr>";
				echo "                  </table>";
				echo "                </div>";
				echo "              </section>";
				//echo "		<i class='icon-chevron-left' style='cursor:pointer;'></i><i class='icon-chevron-right' style='cursor:pointer;'></i>";	
				echo "            </div>";
				echo "</div>";
				echo "</center>";
			?>