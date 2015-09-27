<?php
				echo "<div id='people_panel'>";
				echo "<li class='list-group-item'>";
				echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
				echo "<img src='".$koupon['image_small']."'alt='Koupon Image' class='img-circle'>";
				echo "</a>";
				echo "<a href='#' class='clear'>";
				echo "<small class='pull-right'><table width='100%' style=\"font-family:'Calibri';font-size:10pt;\">
						<tr data-toggle='tooltip' data-placement='bottom' data-title='Created on'><td><i class='icon-link'></i></td><td><small> &nbsp;".date("h:ia d/m/Y.",strtotime($koupon['creation_date']))."</small></td></tr><tr data-toggle='tooltip' data-placement='bottom' data-title='Deal ended on'><td><i class='icon-unlink'></i></td><td><small> &nbsp;".date("h:ia d/m/Y.",strtotime($koupon['deal_end_date']))."</small></td></tr>
						</table></small>";
				echo "<strong class='block' style='color:#80c740;'>".$koupon['title']."</strong>";
				echo "<table width='80%' style=\"font-family:'Calibri';font-size:11pt;\">";
				echo "<tr style='color:NAVY'><td><small  data-toggle='tooltip' data-placement='bottom' data-title='Item type'><i class='icon-folder-close-alt'></i> ".get_koupon_details($koupon['menu_id'],'name')."</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small  data-toggle='tooltip' data-placement='bottom' data-title='Followers'><i class='icon-eye-open'></i> ".$koupon['following']."</small></td></tr>";
				echo "<tr><td width='100%' colspan='2' style='font-size:11pt;'><i class='icon-edit'></i><small> Description : ".$koupon['short_desc']."</small></td></tr>";
				echo "</table></a>";
				echo "</li></div>";
				echo "<center>";
				echo "<div id='koupon_panel'><br>";
				echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
				echo "              <section class='panel'>";
				echo "                <div class='table-responsive'>";
				echo "                  <table style='table-layout:fixed;text-align:center;' class='table table-striped m-b-none' data-ride='datatables'>";
				echo " <tr>";
				echo "                        <th width='20%'  style='text-align:center;'>Email</th>";
				echo "                        <th width='15%' style='text-align:center;'>Purchased On</th>";
				echo "                        <th width='6%' style='text-align:center;'>Volume</th>";
				echo "                        <th width='30%' style='text-align:center;'>Kopon Identifiers</th>";
				echo "                        <th width='10%' style='text-align:center;'>Mobile No.</th>";
				echo "                        <th width='10%' style='text-align:center;'>City</th>";
				echo "                        <th width='10%' style='text-align:center;'>Claimed</th>";
				echo "                      </tr>";
				echo "                    </thead>";
				echo "                    <tbody>";
				get_users_purchased($koupon['kpn_id']);
				echo "                   </tbody>";
				echo "                  </table>";
				echo "                </div>";
				echo "              </section>";
				echo "            </div>";
				echo "</div>";
				echo "</center>";
			?>