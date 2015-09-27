<?php
require_once 'lib/swift_required.php';
function merchantMail($company_name,$image,$email,$password,$mobile){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $company_name
	));
	$message->setSubject("Registration On Kouponize Successful.");
	$message->setBody(
	"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'> 
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>

	<!-- Define Charset -->
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<!-- Responsive Meta Tag -->
	<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />

	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	
    <title>Kouponize - Registratoin</title><!-- Responsive Styles and Valid Styles -->

    <style type='text/css'>
    
	    body{
            width: 100%; 
            background-color: #ffffff; 
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;
        }
        
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        
        span.preheader{display: none; font-size: 1px;}
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
		
		 /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
			/*------ top header ------ */	
            body[yahoo] .show{display: block !important;}
            body[yahoo] .hide{display: none !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 440px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 440px !important;}
			
			/*--------- banner ----------*/
			body[yahoo] .banner img{width: 440px !important; height: auto !important;}
			/*-------- container --------*/			
			body[yahoo] .container590{width: 440px !important;}
			body[yahoo] .container580{width: 400px !important;}
			body[yahoo] .container1{width: 420px !important;}
			body[yahoo] .container2{width: 400px !important;}
			body[yahoo] .container3{width: 380px !important;}
           
			/*-------- secions ----------*/
			body[yahoo] .section-item{width: 440px !important;}
            body[yahoo] .section-img img{width: 440px !important; height: auto !important;}        
        }

		@media only screen and (max-width: 479px){
			/*------ top header ------ */
			body[yahoo] .main-header{font-size: 24px !important;}
            body[yahoo] .resize-text{font-size: 14px !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 280px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 280px !important;}
			body[yahoo] .align-center{text-align: center !important;}
			
			
			/*-------- container --------*/			
			body[yahoo] .container590{width: 280px !important;}
			body[yahoo] .container580{width: 240px !important;}
            body[yahoo] .container1{width: 260px !important;}
			body[yahoo] .container2{width: 240px !important;}
			body[yahoo] .container3{width: 220px !important;}
			
            /*------- CTA -------------*/
			body[yahoo] .cta-button{width: 240px !important;}
			body[yahoo] .cta-text{font-size: 16px !important;}
		}
		
</style>
</head>

<body yahoo='fix' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
	
	<!-- ======= main section ======= -->
	<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='2b2e34' style='background-image: url(".$message->embed(Swift_Image::fromPath('./img/bg.png'))."); background-size: 100% 100%; background-position: top center;' background='".$message->embed(Swift_Image::fromPath('./img/bg.png'))."'>
		
		<tr><td height='90' style='font-size: 90px; line-height: 90px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' align='center' width='450' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container3 bodybg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px;'>
					
					<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='470' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container2 bodybg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px;'>
					
					<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='490' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container1 bodybg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px;'>
					
					<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='510' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container590 bodybg_color' style='border-radius: 4px;'>
					
					<tr><td height='40' style='font-size: 40px; line-height: 40px;'>&nbsp;</td></tr>
					
					<tr>
						<!-- ======= logo ======= -->
						<td align='center'>
							<a href='' style='display: block; border-style: none !important; border: 0 !important;'><img width='43px' border='0' style='display: block; width: 100px;' src='".$message->embed(Swift_Image::fromPath('./img/Logo.png'))."' alt='logo' /></a>
						</td>			
					</tr>
					
					<tr><td height='45' style='font-size: 45px; line-height: 45px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #181c27; font-size: 30px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='title_color main-header'>
							
							<!-- ======= section header ======= -->
							
							<div style='line-height: 30px;'>
	        					
	        						Registration Successful
	        					
							</div>
        				</td>
					</tr>
					
					<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td>
							<table border='0' width='440' align='center' cellpadding='0' cellspacing='0' class='container580'>				
								<tr>
									<td align='center' style='color: #8d94a3; font-size: 16px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 24px;' class='resize-text text_color'>
										<div style='line-height: 24px'>
											
											<!-- ======= section text ======= -->
											
				        					
				        						You are successfully registered on Kouponize.<br>
												Your details are listed below.<br>
												We need to make sure you are human. Please verify your email and get started using your account.
				        					
										</div>
			        				</td>	
								</tr>
							</table>
						</td>
					</tr>
					
					<tr><td height='35' style='font-size: 35px; line-height: 35px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='background-image: url(img/divider-bg.png); background-size: 100% 100%; background-position: top center;' background='/img/divider-bg.png'>
							
							<table border='0' align='center' width='300' cellpadding='0' cellspacing='0' bgcolor='2dabcb' style='border-radius: 50px; box-shadow: 0 2px 0 2px #239bb9;' class='cta-button main_color'>
								
								<tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
								
								<tr>
									
	                				<td align='center' style='color: #ffffff; font-size: 18px; font-family: 'Questrial', sans-serif;' class='cta-text'>
	                					<!-- ======= main section button ======= -->
	                					
		                    			<div style='line-height: 24px;'>
			                    			<a href='' style='color: #ffffff; text-decoration: none;'>Activate</a> 
		                    			</div>
		                    		</td>
		                    		
	                			</tr>
								
								<tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
							
							</table>
						</td>
					</tr>
					
					<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #8d94a3; font-size: 14px; font-family: 'Questrial', sans-serif; line-height: 22px;' class='text_color'>
							<!-- ======= section subtitle ====== -->
							
							<div style='line-height: 22px;'>
	        					
	        						
										<a href='' style='color: #8d94a3; text-decoration: none;'>Unsubscribe</a>
            						
	        					
							</div>
        				</td>
					</tr>
					
					<tr><td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td></tr>
					
					<tr>
    					<td align='center'>
    					
                			<table border='0' align='center' cellpadding='0' cellspacing='0' width='75'>
                				<tr><td height='5' style='font-size: 5px; line-height: 5px;'>&nbsp;</td></tr>
	                			<tr>
	                				<td align='center'>
	                					<table border='0' align='center' cellpadding='0' cellspacing='0'>
	                						<tr>
												<td>
			        								<a style='display: block; width: 12px; height: 12px; border-style: none !important; border: 0 !important;' href='#'><img width='12' height='12' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('./img/instagram.png'))."' alt='instagram' /></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 8px; height: 13px; border-style: none !important; border: 0 !important;' href='#'><img width='8' height='13' border='0' style='display: block; width: 8px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('./img/facebook.png'))."' alt='facebook' /></a>			
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 13px; border-style: none !important; border: 0 !important;' href='#'><img width='13' height='13' border='0' style='display: block; width: 13px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('./img/google.png'))."' alt='google' /></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 10px; border-style: none !important; border: 0 !important;' href='#'><img width='13' height='10' border='0' style='display: block; width: 13px; height: 10px;' src='".$message->embed(Swift_Image::fromPath('./img/twitter.png'))."' alt='twitter' /></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 12px; height: 12px; border-style: none !important; border: 0 !important;' href='#'><img width='12' height='12' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('./img/linkden.png'))."' alt='linkden' /></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 12px; height: 13px; border-style: none !important; border: 0 !important;' href='#'><img width='12' height='13' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('./img/dribbble.png'))."' alt='dribbble' /></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 12px; height: 12px; border-style: none !important; border: 0 !important;' href='#'><img width='12' height='12' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('./img/pinterest.png'))."' alt='pinterest' /></a>		
			        							</td>
											</tr>		
	                					</table>				
	                				</td>
	                			</tr>
							</table>
    					</td>
    				</tr>
					
					<tr><td height='40' style='font-size: 40px; line-height: 40px;'>&nbsp;</td></tr>
														
				</table>
			</td>
		</tr>
		
		<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' width='540' align='center' cellpadding='0' cellspacing='0' class='container580'>
					<tr>
						
						<td align='center' style='color: #ffffff; font-size: 14px; font-family: 'Questrial', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='text_color'>
							<div style='line-height: 30px'>
								
								<!-- ======= section text ======= -->
								
	        					
	        						© 2014 kouponize.com. All Rights Reserved.
	        					
							</div>
        				</td>	
					</tr>
				</table>
			</td>
		</tr>
		
		<tr><td height='50' style='font-size: 50px; line-height: 50px;'>&nbsp;</td></tr>
		
	</table>
	<!-- ======= end header ======= -->
	
	
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function forgotMerchant($company_name,$image,$email,$password,$mobile){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $company_name
	));
	$message->setSubject("Password Reset.");
	$message->setBody(
	"
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' />
   <title>Flick</title>
   <style type='text/css'>
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #07bb36; text-decoration: none; font-weight: bold; }
.hide { max-height: 0px; font-size: 0; display: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class='table600'] { width: 450px !important; text-align: center !important; }
table[class='table550'] { width: 87% !important; float: none !important; }
table[class='table2-2'] { width: 47% !important; }
img[class='img1'] { width: 100% !important; height: auto !important; }
img[class='img2'] { width: 60% !important; height: auto !important; }
table[class='social'] { width: 100px !important; }
table[class='table1-3'] { width: 30% !important; }
table[class='table3-1'] { width: 64% !important; }
td[class='clear_pad'] { padding: 0px !important; }
/*space*/
table[class='space'] { display: none !important; }
}
@media only screen and (max-width: 479px) {
body { width: auto !important; }
img[class='top_fold'] { display: none !important; }
table[class='table600'] { width: 290px !important; }
table[class='table550'] { float: none !important; }
table[class='table2-2'] { width: 100% !important; text-align: center !important; }
img[class='img1'] { width: 100% !important; }
img[class='img2'] { width: 40% !important; height: auto !important; }
table[class='table1-3'] { width: 100% !important; }
table[class='table3-1'] { width: 100% !important; }
.hide { max-height: 26px !important; font-size: 0px !important; display: block !important; }
/*space*/
table[class='space'] { display: none !important; }
}
</style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>

<body>
   <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ecf0f1'>
      <tr>
         <td valign='top'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>

               <!--Header Bar-->

               <tr>
                  <td valign='top'>
                     <table width='100%' height='5' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td valign='top' style='border-top:5px solid #ffffff;'>
                              <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>

                                 <!--Link Browser-->

                                 <tr>
                                    <td align='right' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#bdc3c7; font-style: italic; padding-top:15px;'>
                                       Having trouble viewing?
                                       <a href='http://www.kouponize.com/' style='font-weight: normal;'>Kouponize.</a>
                                    </td>
                                 </tr>

                                 <!--End Link Browser-->

                                 <tr>
                                    <td height='20'></td>
                                 </tr>
                                 <tr>
                                    <td align='left' valign='top'>
                                       <table width='600' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='table600'>
                                          <tr>
                                             <td style='padding-left:0px; padding-right:0px;'>
                                                <!--Logo-->

                                                <table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='17' align='right' valign='top'>
                                                         <div class='hide'>
                                                            <img class='hide' src=''  width='15' height='26' />
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </table>
												<table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												   <tr>
                                                         <td align='center' width='183'><img src='".$message->embed(Swift_Image::fromPath('./images/logob.png'))."'  style='margin-left:25px;' width='160' height='54' alt='logo' /></td>
                                                    </tr>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												</table>

                                                <!--End Logo-->

                                                <!--Navigation-->

                                                <table border='0' align='right' cellpadding='0' cellspacing='0' class='table3-1'>
                                                   <tr>
                                                      <td height='27' align='right' valign='top'>
                                                         <img class='top_fold' src='".$message->embed(Swift_Image::fromPath('./images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' />
                                                      </td>
                                                   </tr>
                                                </table>

                                                <!--End Navigation--> </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Bar-->

               <!--Header Image-->

               <!--End Header Image-->

               <!--Quote-->

               <tr>
                  <td valign='top'>
                     <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'>Forgot your password?</td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>
                                     You have requested for your password. Please find your account details below.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' valign='top'>
                              <img src='".$message->embed(Swift_Image::fromPath('./images/img_point.png'))."'  width='15' height='6' />
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Quote-->

               <!--1:3 Date Panel-->

               <tr>
                  <td valign='top'>
                    <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-top:-5px;'>
                     <tr>
                        <td align='right' valign='top' bgcolor='#FFFFFF' height='30'></td>
                     </tr>
                     <tr>
                        <td bgcolor='#FFFFFF'><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
							  <td width='25px'>
							  </td>
                                 <td valign='top'><!--image-->
                                    
                                    <table class='table2-2' width='130' border='0' align='left' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td style='border-right:4px solid #07bb36;'><img class='img1' src='".$message->embed(Swift_Image::fromPath($image))."'  width='120' height='133' alt='188' /></td>
                                          <td align='left' valign='middle'><img src='".$message->embed(Swift_Image::fromPath('./images/img_point_right.png'))."'  width='6' height='15' /></td>
                                       </tr>
                                       <tr></tr>
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                          <td></td>
                                       </tr>
                                    </table>
                                    
                                    <!--End image-->
                                    
                                    <table width='350' border='0' align='right' cellpadding='0' cellspacing='0' class='table2-2'>
                                       <tr></tr>
                                       <!--Article Title-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px; color:#34495e;'>Account Details</td>
                                       </tr>
                                       <!--End Article Title-->
                                       <tr>
                                          <td height='10' align='left' valign='top'></td>
                                       </tr>
                                       <!--Content-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>Email: ".$email."
										 <br>Password : ".$password."<br></td>
                                       </tr>
                                       <!--End Content-->
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                  </table>	
                  </td>
               </tr>

               <!--End 1:3 Date Panel-->
               <!--1:3 Date Panel-->


               <!--End 1:3 Date Panel-->
               <!--Footer-->	
				 <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='25'></td>
                     </tr>
                     <tr>
                        <td height='50' bgcolor='#FFFFFF'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                       <tr>
                                 <td align='center' style='font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: bold; color:#0ae042;'>Thank you for using <a href='http://www.kouponize.com'>kouponize.com</a></td>
                              </tr>
                           </table></td>
                     </tr>
            <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td bgcolor='#34495e'><table class='table600' bgcolor='#3c5063' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                       
                                       <!--info-->
                                       
                                        <tr>
                                          <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#ecf0f1; line-height:22px;'> You are currently subscribed to receive email updates from <a href='http://www.kouponize.com'>kouponize.com .</a><br>If you have any trouble, please mail us on <a href='#'>reachout@kouponize.com</a>. </td>
                                       </tr>
                                       
                                       <!--End info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='20'></td>
                                       </tr>
                                       
                                       <!--Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                   <td><a href='https://www.facebook.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/facebook.png'))."'  width='32' height='32' alt='facebook' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://twitter.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/twitter.png'))."'  width='32' height='32' alt='twitter' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://plus.google.com/109987298262776094176'><img src='".$message->embed(Swift_Image::fromPath('./images/googleplus.png'))."'  width='32' height='32' /></a></td>
                                                </tr>
                                             </table></td>
                                       </tr>
                                       
                                       <!--End Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                     <tr>
                        <td bgcolor='#2c3e50'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td height='10' bgcolor='#344656'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
         </table></td>
   </tr>
   <!--End Footer-->
</table>
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function kouponMail($company_name,$image,$email,$mobile,$title,$long_desc){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $company_name
	));
	$message->setSubject($title." Koupon created successfully.");
	$message->setBody(
	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' />
   <title>Flick</title>
   <style type='text/css'>
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #07bb36; text-decoration: none; font-weight: bold; }
.hide { max-height: 0px; font-size: 0; display: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class='table600'] { width: 450px !important; text-align: center !important; }
table[class='table550'] { width: 87% !important; float: none !important; }
table[class='table2-2'] { width: 47% !important; }
img[class='img1'] { width: 100% !important; height: auto !important; }
img[class='img2'] { width: 60% !important; height: auto !important; }
table[class='social'] { width: 100px !important; }
table[class='table1-3'] { width: 30% !important; }
table[class='table3-1'] { width: 64% !important; }
td[class='clear_pad'] { padding: 0px !important; }
/*space*/
table[class='space'] { display: none !important; }
}
@media only screen and (max-width: 479px) {
body { width: auto !important; }
img[class='top_fold'] { display: none !important; }
table[class='table600'] { width: 290px !important; }
table[class='table550'] { float: none !important; }
table[class='table2-2'] { width: 100% !important; text-align: center !important; }
img[class='img1'] { width: 100% !important; }
img[class='img2'] { width: 40% !important; height: auto !important; }
table[class='table1-3'] { width: 100% !important; }
table[class='table3-1'] { width: 100% !important; }
.hide { max-height: 26px !important; font-size: 0px !important; display: block !important; }
/*space*/
table[class='space'] { display: none !important; }
}
</style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>

<body>
   <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ecf0f1'>
      <tr>
         <td valign='top'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>

               <!--Header Bar-->


               <tr>
                  <td valign='top'>
                     <table width='100%' height='5' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td valign='top' style='border-top:5px solid #ffffff;'>
                              <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>

                                 <!--Link Browser-->

                                 <tr>
                                    <td align='right' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#bdc3c7; font-style: italic; padding-top:15px;'>
                                       Having trouble viewing?
                                       <a href='http://www.kouponize.com/' style='font-weight: normal;'>Kouponize.</a>
                                    </td>
                                 </tr>

                                 <!--End Link Browser-->

                                 <tr>
                                    <td height='20'></td>
                                 </tr>
                                 <tr>
                                    <td align='left' valign='top'>
                                       <table width='600' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='table600'>
                                          <tr>
                                             <td style='padding-left:0px; padding-right:0px;'>
                                                <!--Logo-->

                                                <table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='17' align='right' valign='top'>
                                                         <div class='hide'>
                                                            <img class='hide' src=''  width='15' height='26' />
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </table>
												<table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												   <tr>
                                                         <td align='center' width='183'><img src='".$message->embed(Swift_Image::fromPath('./images/logob.png'))."'  width='160' height='54' alt='logo' /></td>
                                                    </tr>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												</table>

                                                <!--End Logo-->

                                                <!--Navigation-->

                                                <table border='0' align='right' cellpadding='0' cellspacing='0' class='table3-1'>
                                                   <tr>
                                                      <td height='27' align='right' valign='top'>
                                                         <img class='top_fold' src='".$message->embed(Swift_Image::fromPath('./images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' />
                                                      </td>
                                                   </tr>
                                                </table>

                                                <!--End Navigation--> </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Bar-->

               <!--Header Image-->

               <tr>
                  <td valign='top'>
                     <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                           <td bgcolor='#07bb36'>
                              <table class='table600' bgcolor='#31c3a6' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                                 <tr>
                                    <td align='center'>
                                       <img class='img1' src='".$message->embed(Swift_Image::fromPath('./images/header_img.jpg'))."'  width='600' height='265' alt='header_img' />
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Image-->
               <!--Quote-->

               <tr>
                  <td valign='top'>
                     <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'>Koupon Created Successfully</td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>
                                      You have created koupon '".$title."' successfully on Kouponize.<br>
									  Koupon details are listed below.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' valign='top'>
                              <img src='".$message->embed(Swift_Image::fromPath('./images/img_point.png'))."'  width='15' height='6' />
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Quote-->

               <!--1:3 Date Panel-->

               <tr>
                  <td valign='top'>
                    <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-top:-5px;'>
                     <tr>
                        <td align='right' valign='top' bgcolor='#FFFFFF' height='20'></td>
                     </tr>
                      <tr>
                        <td valign='top' bgcolor='#FFFFFF'><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td style='border-bottom:4px solid #07bb36;'><img class='img1' src='".$message->embed(Swift_Image::fromPath($image))."'  width='550' height='250' alt='550' /></td>
                              </tr>
                              <tr>
                                 <td height='25' align='center' valign='top'><img src='".$message->embed(Swift_Image::fromPath('./images/img_point.png'))."'  width='15' height='6' /></td>
                              </tr>
                              
                              <!--Article Title-->
                              
                              <tr>
                                 <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px; color:#34495e;'>Koupon Title</td>
                              </tr>
                              
                              <!--End Article Title-->
                              
                              <tr>
                                 <td height='10' align='left' valign='top'></td>
                              </tr>
                              
                              <!--Content-->
                              
                              <tr>
                                 <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>".$long_desc."<a href='#'> more...</a></td>
                              </tr>
                              
                              <!--End Content-->
                              
                              <tr>
                                 <td align='left' valign='top' height='15'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
                  </table>	
                  </td>
               </tr>

               <!--End 1:3 Date Panel-->
               <!--1:3 Date Panel-->


               <!--End 1:3 Date Panel-->
               <!--Footer-->	
				 <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='15'></td>
                     </tr>
                     <tr>
                        <td height='50' bgcolor='#FFFFFF'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                            <tr>
                                 <td align='center' style='font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: bold; color:#0ae042;'>Thank you for using <a href='http://www.kouponize.com'>kouponize.com</a></td>
                              </tr>
                           </table></td>
                     </tr>
            <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td bgcolor='#34495e'><table class='table600' bgcolor='#3c5063' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                       
                                       <!--info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#ecf0f1; line-height:22px;'> You are currently subscribed to receive email updates from <a href='http://www.kouponize.com'>kouponize.com .</a><br>If you have any trouble, please mail us on <a href='#'>reachout@kouponize.com</a>. </td>
                                       </tr>
                                       
                                       <!--End info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='20'></td>
                                       </tr>
                                       
                                       <!--Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                   <td><a href='https://www.facebook.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/facebook.png'))."'  width='32' height='32' alt='facebook' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://twitter.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/twitter.png'))."'  width='32' height='32' alt='twitter' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://plus.google.com/109987298262776094176'><img src='".$message->embed(Swift_Image::fromPath('./images/googleplus.png'))."'  width='32' height='32' /></a></td>
                                                </tr>
                                             </table></td>
                                       </tr>
                                       
                                       <!--End Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                     <tr>
                        <td bgcolor='#2c3e50'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td height='10' bgcolor='#344656'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
         </table></td>
   </tr>
   <!--End Footer-->
</table>
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}


function loyaltyUser($company_name,$image,$email,$mobile,$title,$short_desc){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => "Kouponize User"
	));
	$message->setSubject($company_name." created a koupon for you.");
	$message->setBody(
	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' />
   <title>Flick</title>
   <style type='text/css'>
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #07bb36; text-decoration: none; font-weight: bold; }
.hide { max-height: 0px; font-size: 0; display: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class='table600'] { width: 450px !important; text-align: center !important; }
table[class='table550'] { width: 87% !important; float: none !important; }
table[class='table2-2'] { width: 47% !important; }
img[class='img1'] { width: 100% !important; height: auto !important; }
img[class='img2'] { width: 60% !important; height: auto !important; }
table[class='social'] { width: 100px !important; }
table[class='table1-3'] { width: 30% !important; }
table[class='table3-1'] { width: 64% !important; }
td[class='clear_pad'] { padding: 0px !important; }
/*space*/
table[class='space'] { display: none !important; }
}
@media only screen and (max-width: 479px) {
body { width: auto !important; }
img[class='top_fold'] { display: none !important; }
table[class='table600'] { width: 290px !important; }
table[class='table550'] { float: none !important; }
table[class='table2-2'] { width: 100% !important; text-align: center !important; }
img[class='img1'] { width: 100% !important; }
img[class='img2'] { width: 40% !important; height: auto !important; }
table[class='table1-3'] { width: 100% !important; }
table[class='table3-1'] { width: 100% !important; }
.hide { max-height: 26px !important; font-size: 0px !important; display: block !important; }
/*space*/
table[class='space'] { display: none !important; }
}
</style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>

<body>
   <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ecf0f1'>
      <tr>
         <td valign='top'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>

               <!--Header Bar-->


               <tr>
                  <td valign='top'>
                     <table width='100%' height='5' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td valign='top' style='border-top:5px solid #ffffff;'>
                              <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>

                                 <!--Link Browser-->

                                 <tr>
                                    <td align='right' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#bdc3c7; font-style: italic; padding-top:15px;'>
                                       Having trouble viewing?
                                       <a href='http://www.kouponize.com/' style='font-weight: normal;'>Kouponize.</a>
                                    </td>
                                 </tr>

                                 <!--End Link Browser-->

                                 <tr>
                                    <td height='20'></td>
                                 </tr>
                                 <tr>
                                    <td align='left' valign='top'>
                                       <table width='600' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='table600'>
                                          <tr>
                                             <td style='padding-left:0px; padding-right:0px;'>
                                                <!--Logo-->

                                                <table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='17' align='right' valign='top'>
                                                         <div class='hide'>
                                                            <img class='hide' src=''  width='15' height='26' />
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </table>
												<table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												   <tr>
                                                         <td align='center' width='183'><img src='".$message->embed(Swift_Image::fromPath('./images/logob.png'))."'  width='160' height='54' alt='logo' /></td>
                                                    </tr>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												</table>

                                                <!--End Logo-->

                                                <!--Navigation-->

                                                <table border='0' align='right' cellpadding='0' cellspacing='0' class='table3-1'>
                                                   <tr>
                                                      <td height='27' align='right' valign='top'>
                                                         <img class='top_fold' src='".$message->embed(Swift_Image::fromPath('./images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' />
                                                      </td>
                                                   </tr>
                                                </table>

                                                <!--End Navigation--> </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Bar-->

               <!--Header Image-->

               <!--End Header Image-->
               <!--Quote-->

               <tr>
                  <td valign='top'>
                     <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'>Koupon Created by ".$company_name." Bussiness Just For You</td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>
                                     '".$company_name."' created a koupon for you. You can claim koupon by logging in to kouponize.com and you can find your loyalty koupons in 'My Koupon Feed' section.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' valign='top'>
                              <img src='".$message->embed(Swift_Image::fromPath('./images/img_point.png'))."'  width='15' height='6' />
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Quote-->

               <!--1:3 Date Panel-->

               <tr>
                  <td valign='top'>
                    <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-top:-5px;'>
                     <tr>
                        <td align='right' valign='top' bgcolor='#FFFFFF' height='20'></td>
                     </tr>
                      <tr>
                        <td valign='top' bgcolor='#FFFFFF'><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td style='border-bottom:4px solid #07bb36;'><img class='img1' src='".$message->embed(Swift_Image::fromPath($image))."'  width='550' height='250' alt='550' /></td>
                              </tr>
                              <tr>
                                 <td height='25' align='center' valign='top'><img src='".$message->embed(Swift_Image::fromPath('./images/img_point.png'))."'  width='15' height='6' /></td>
                              </tr>
                              
                              <!--Article Title-->
                              
                              <tr>
                                 <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px; color:#34495e;'>Koupon Title</td>
                              </tr>
                              
                              <!--End Article Title-->
                              
                              <tr>
                                 <td height='10' align='left' valign='top'></td>
                              </tr>
                              
                              <!--Content-->
                              
                              <tr>
                                 <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>Short Description : ".$short_desc."<br></td>
                              </tr>
                              
                              <!--End Content-->
                              
                              <tr>
                                 <td align='left' valign='top' height='15'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
                  </table>	
                  </td>
               </tr>

               <!--End 1:3 Date Panel-->
               <!--1:3 Date Panel-->


               <!--End 1:3 Date Panel-->
               <!--Footer-->	
				 <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='15'></td>
                     </tr>
                     <tr>
                        <td height='50' bgcolor='#FFFFFF'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                            <tr>
                                 <td align='center' style='font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: bold; color:#0ae042;'>Thank you for using <a href='http://www.kouponize.com'>kouponize.com</a></td>
                              </tr>
                           </table></td>
                     </tr>
            <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td bgcolor='#34495e'><table class='table600' bgcolor='#3c5063' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                       
                                       <!--info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#ecf0f1; line-height:22px;'> You are currently subscribed to receive email updates from <a href='http://www.kouponize.com'>kouponize.com .</a><br>If you have any trouble, please mail us on <a href='#'>reachout@kouponize.com</a>. </td>
                                       </tr>
                                       
                                       <!--End info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='20'></td>
                                       </tr>
                                       
                                       <!--Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                   <td><a href='https://www.facebook.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/facebook.png'))."'  width='32' height='32' alt='facebook' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://twitter.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('./images/twitter.png'))."'  width='32' height='32' alt='twitter' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://plus.google.com/109987298262776094176'><img src='".$message->embed(Swift_Image::fromPath('./images/googleplus.png'))."'  width='32' height='32' /></a></td>
                                                </tr>
                                             </table></td>
                                       </tr>
                                       
                                       <!--End Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                     <tr>
                        <td bgcolor='#2c3e50'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td height='10' bgcolor='#344656'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
         </table></td>
   </tr>
   <!--End Footer-->
</table>
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}


function availedMerchant($company_name,$image,$email,$mobile,$title,$volume,$kpn_id,$uemail,$umobile){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $company_name
	));
	$message->setSubject($title." Koupon availed.");
	$message->setBody(
	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' />
   <title>Flick</title>
   <style type='text/css'>
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #07bb36; text-decoration: none; font-weight: bold; }
.hide { max-height: 0px; font-size: 0; display: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class='table600'] { width: 450px !important; text-align: center !important; }
table[class='table550'] { width: 87% !important; float: none !important; }
table[class='table2-2'] { width: 47% !important; }
img[class='img1'] { width: 100% !important; height: auto !important; }
img[class='img2'] { width: 60% !important; height: auto !important; }
table[class='social'] { width: 100px !important; }
table[class='table1-3'] { width: 30% !important; }
table[class='table3-1'] { width: 64% !important; }
td[class='clear_pad'] { padding: 0px !important; }
/*space*/
table[class='space'] { display: none !important; }
}
@media only screen and (max-width: 479px) {
body { width: auto !important; }
img[class='top_fold'] { display: none !important; }
table[class='table600'] { width: 290px !important; }
table[class='table550'] { float: none !important; }
table[class='table2-2'] { width: 100% !important; text-align: center !important; }
img[class='img1'] { width: 100% !important; }
img[class='img2'] { width: 40% !important; height: auto !important; }
table[class='table1-3'] { width: 100% !important; }
table[class='table3-1'] { width: 100% !important; }
.hide { max-height: 26px !important; font-size: 0px !important; display: block !important; }
/*space*/
table[class='space'] { display: none !important; }
}
</style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>

<body>
   <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ecf0f1'>
      <tr>
         <td valign='top'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>

               <!--Header Bar-->


               <tr>
                  <td valign='top'>
                     <table width='100%' height='5' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td valign='top' style='border-top:5px solid #ffffff;'>
                              <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>

                                 <!--Link Browser-->

                                 <tr>
                                    <td align='right' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#bdc3c7; font-style: italic; padding-top:15px;'>
                                       Having trouble viewing?
                                       <a href='http://www.kouponize.com/' style='font-weight: normal;'>Kouponize.</a>
                                    </td>
                                 </tr>

                                 <!--End Link Browser-->

                                 <tr>
                                    <td height='20'></td>
                                 </tr>
                                 <tr>
                                    <td align='left' valign='top'>
                                       <table width='600' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='table600'>
                                          <tr>
                                             <td style='padding-left:0px; padding-right:0px;'>
                                                <!--Logo-->

                                                <table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='17' align='right' valign='top'>
                                                         <div class='hide'>
                                                            <img class='hide' src=''  width='15' height='26' />
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </table>
												<table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												   <tr>
                                                         <td align='center' width='183'><img src='".$message->embed(Swift_Image::fromPath('../images/logob.png'))."'  width='160' height='54' alt='logo' /></td>
                                                    </tr>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												</table>

                                                <!--End Logo-->

                                                <!--Navigation-->

                                                <table border='0' align='right' cellpadding='0' cellspacing='0' class='table3-1'>
                                                   <tr>
                                                      <td height='27' align='right' valign='top'>
                                                         <img class='top_fold' src='".$message->embed(Swift_Image::fromPath('../images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' />
                                                      </td>
                                                   </tr>
                                                </table>

                                                <!--End Navigation--> </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Bar-->

               <!--Header Image-->

               <tr>
                  <td valign='top'>
                     <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                           <td bgcolor='#07bb36'>
                              <table class='table600' bgcolor='#31c3a6' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                                 <tr>
                                    <td align='center'>
                                       <img class='img1' src='".$message->embed(Swift_Image::fromPath('../images/header_img.jpg'))."'  width='600' height='265' alt='header_img' />
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Image-->
               <!--Quote-->

               <tr>
                  <td valign='top'>
                     <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'>Koupon availed</td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>
                                    Your koupon <b>'".$title."'</b> is availed by '".$uemail."'.<br>
									Koupon Codes are :<b>
									".$kpn_id."</b><br>* You can contact the customer by his/her phone. Customer may visit your store soon.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' valign='top'>
                              <img src='".$message->embed(Swift_Image::fromPath('../images/img_point.png'))."'  width='15' height='6' />
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Quote-->

               <!--1:3 Date Panel-->

               <tr>
                  <td valign='top'>
                    <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='10'></td>
                     </tr>
                     <tr>
                        <td align='right' valign='top' bgcolor='#FFFFFF'><img src='".$message->embed(Swift_Image::fromPath('../images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' /></td>
                     </tr>
                     <tr>
                        <td bgcolor='#FFFFFF'><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
							  <td width='25px'>
							  </td>
                                 <td valign='top'><!--image-->
                                    
                                    <table class='table2-2' width='130' border='0' align='left' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td><img class='img1' src='".$message->embed(Swift_Image::fromPath('../images/icon_user.png'))."'  alt='188' /></td>
                                       </tr>
                                       <tr></tr>
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                          <td></td>
                                       </tr>
                                    </table>
                                    
                                    <!--End image-->
                                    
                                    <table width='350' border='0' align='right' cellpadding='0' cellspacing='0' class='table2-2'>
                                       <tr></tr>
                                       <!--Article Title-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px; color:#34495e;'>Availed User Account Details</td>
                                       </tr>
                                       <!--End Article Title-->
                                       <tr>
                                          <td height='10' align='left' valign='top'></td>
                                       </tr>
                                       <!--Content-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>Email: ".$uemail."
										 <br>Phone : ".$umobile."</td>
                                       </tr>
                                       <!--End Content-->
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                  </table>	
                  </td>
               </tr>

               <!--End 1:3 Date Panel-->
               <!--1:3 Date Panel-->


               <!--End 1:3 Date Panel-->
               <!--Footer-->	
				 <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='25'></td>
                     </tr>
                     <tr>
                        <td height='50' bgcolor='#FFFFFF'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                             <tr>
                                 <td align='center' style='font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: bold; color:#0ae042;'>Thank you for using <a href='http://www.kouponize.com'>kouponize.com</a></td>
                              </tr>
                           </table></td>
                     </tr>
            <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td bgcolor='#34495e'><table class='table600' bgcolor='#3c5063' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                       
                                       <!--info-->
                                       
                                         <tr>
                                          <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#ecf0f1; line-height:22px;'> You are currently subscribed to receive email updates from <a href='http://www.kouponize.com'>kouponize.com .</a><br>If you have any trouble, please mail us on <a href='#'>reachout@kouponize.com</a>. </td>
                                       </tr>
                                       <!--End info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='20'></td>
                                       </tr>
                                       
                                       <!--Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                   <td><a href='https://www.facebook.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('../images/facebook.png'))."'  width='32' height='32' alt='facebook' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://twitter.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('../images/twitter.png'))."'  width='32' height='32' alt='twitter' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://plus.google.com/109987298262776094176'><img src='".$message->embed(Swift_Image::fromPath('../images/googleplus.png'))."'  width='32' height='32' /></a></td>
                                                </tr>
                                             </table></td>
                                       </tr>
                                       
                                       <!--End Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                     <tr>
                        <td bgcolor='#2c3e50'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td height='10' bgcolor='#344656'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
         </table></td>
   </tr>
   <!--End Footer-->
</table>
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function userMail($email,$password,$mobile,$activation){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $email
	));
	$message->setSubject("Registration On Kouponize Successful.");
	$message->setBody(
	"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'> 
<html xmlns:v='urn:schemas-microsoft-com:vml'>
<head>

	<!-- Define Charset -->
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<!-- Responsive Meta Tag -->
	<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />

	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	
    <title>Notification 5 - Responsive Email Template</title><!-- Responsive Styles and Valid Styles -->

    <style type='text/css'>
    
	    body{
            width: 100%; 
            background-color: #ffffff; 
			font-family: 'Oxygen', sans-serif;
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;
			
        }
        
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        
        span.preheader{display: none; font-size: 1px;}
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
		
		 /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
			/*------ top header ------ */	
            body[yahoo] .show{display: block !important;}
            body[yahoo] .hide{display: none !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 440px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 440px !important;}
			
			/*--------- banner ----------*/
			body[yahoo] .banner img{width: 440px !important; height: auto !important;}
			/*-------- container --------*/			
			body[yahoo] .container590{width: 440px !important;}
			body[yahoo] .container580{width: 400px !important;}
			body[yahoo] .container1{width: 420px !important;}
			body[yahoo] .container2{width: 400px !important;}
			body[yahoo] .container3{width: 380px !important;}
           
			/*-------- secions ----------*/
			body[yahoo] .section-item{width: 440px !important;}
            body[yahoo] .section-img img{width: 440px !important; height: auto !important;}        
        }

		@media only screen and (max-width: 479px){
			/*------ top header ------ */
			body[yahoo] .main-header{font-size: 24px !important;}
            body[yahoo] .resize-text{font-size: 14px !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 280px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 280px !important;}
			body[yahoo] .align-center{text-align: center !important;}
			
			
			/*-------- container --------*/			
			body[yahoo] .container590{width: 280px !important;}
			body[yahoo] .container580{width: 240px !important;}
            body[yahoo] .container1{width: 260px !important;}
			body[yahoo] .container2{width: 240px !important;}
			body[yahoo] .container3{width: 220px !important;}
			
            /*------- CTA -------------*/
			body[yahoo] .cta-button{width: 240px !important;}
			body[yahoo] .cta-text{font-size: 16px !important;}
		}
		
</style>
</head>

<body yahoo='fix' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'> 
	
		
	
	<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='00cccb' background-size: 100% 100%; background-position: top center;' class='main-bg'>
		
		<tbody><tr><td height='90' style='font-size: 90px; line-height: 90px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' align='center' width='450' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container3 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='470' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container2 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='490' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container1 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='510' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container590 bg_color' style='border-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='20' style='font-size: 40px; line-height: 20px;'>&nbsp;</td></tr>
					
					<tr>
					<tr><td height='35' style='font-size: 35px; line-height: 35px;'>&nbsp;</td></tr>
						<td>
							<table border='0' align='center' cellpadding='0' cellspacing='0'>
								<tbody><tr>
			 						<!-- ======= logo ======= -->
									<td align='center'>
										<a href='' style='display: block; border-style: none !important; border: 0 !important;' class='editable_img'><img width='230' border='0' style='display: block; width: 230px;' src='".$message->embed(Swift_Image::fromPath('../img/koupon.png'))."' alt='logo' class=''></a>
									</td>			
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height='45' style='font-size: 45px; line-height: 45px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #262c51; font-size: 30px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='title_color main-header'>
							
							<!-- ======= section header ======= -->
							
							<div class='editable_text' style='line-height: 30px;'>
								<span class='text_container'>Welcome User</span>
							</div>
        				</td>
					</tr>
					
					<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td>
							<table border='0' width='440' align='center' cellpadding='0' cellspacing='0' class='container580'>				
								<tbody><tr>
									<td align='center' style='color: #262c51; font-size: 16px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 24px;' class='resize-text text_color'>
										<div class='editable_text' style='line-height: 24px'>
											
											<!-- ======= section text ======= -->
											<span class='text_container'>You are one step away to activate your account</span>
										</div>
			        				</td>	
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height='35' style='font-size: 35px; line-height: 35px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='background-image: url(".$message->embed(Swift_Image::fromPath('../img/divider-bg.png'))."); background-size: 100% 100%; background-position: top center;' background='".$message->embed(Swift_Image::fromPath('../img/divider-bg.png'))."'>
							
							<table border='0' align='center' width='300' cellpadding='0' cellspacing='0' bgcolor='f0f80a' style='border-radius: 50px; box-shadow: 0 2px 0 2px f0f80a;' class='cta-button main_color'>
								
								<tbody><tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
								
								<tr>
									
	                				<td align='center' style='color: black; font-size: 18px; text-decoration:none;  font-family: 'Questrial', sans-serif;' class='cta-text'>
	                					<!-- ======= main section button ======= -->
	                					
		                    			<div class='editable_text' style='line-height: 24px;'>
		                    				<span class='text_container'>
												<a href='http://www.koupon.me/me/activation.php?actCode=".$activation."' style='color: #ffffff; text-decoration: none;'>Activate</a>
											</span>
		                    			</div>
		                    		</td>
		                    		
	                			</tr>
								
								<tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
							
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height='40' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #262c51; font-size: 14px; font-family: 'Questrial', sans-serif; line-height: 22px;' class='text_color'>
							<!-- ======= section subtitle ====== -->
							
							<div class='editable_text' style='line-height: 22px;'>
								<span class='text_container'></span>
							</div>
        				</td>
					</tr>
					
					<tr><td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td></tr>
					
					<tr>
    					<td align='center'>
    					
                			<table border='0' align='center' cellpadding='0' cellspacing='0' width='75'>
                				<tbody><tr><td height='5' style='font-size: 5px; line-height: 5px;'>&nbsp;</td></tr>
	                			<tr>
	                				<td align='center'>
	                					<table border='0' align='center' cellpadding='0' cellspacing='0'>
	                						<tbody><tr>
												
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 8px; height: 13px; border-style: none !important; border: 0 !important;' href='http://www.facebook.com/kouponize' class='editable_img'><img width='8' height='13' border='0' style='display: block; width: 8px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('../img/facebook.png'))."' alt='facebook'></a>			
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 13px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='13' height='13' border='0' style='display: block; width: 13px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('../img/google.png'))."' alt='google'></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 10px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='13' height='10' border='0' style='display: block; width: 13px; height: 10px;' src='".$message->embed(Swift_Image::fromPath('../img/twitter.png'))."' alt='twitter'></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 12px; height: 12px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='12' height='12' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('../img/linkeden.png'))."' alt='linkden'></a>		
			        							</td>
			        							
											</tr>		
	                					</tbody></table>				
	                				</td>
	                			</tr>
							</tbody></table>
    					</td>
    				</tr>
					
					<tr><td height='40' style='font-size: 40px; line-height: 40px;'>&nbsp;</td></tr>
														
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' width='540' align='center' cellpadding='0' cellspacing='0' class='container580'>
					<tbody><tr>
						
						<td align='center' style='color: #ffffff; font-size: 14px; font-family: 'Questrial', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='text2_color'>
							<div class='editable_text' style='line-height: 30px'>
								
								<!-- ======= section text ======= -->
								<span class='text_container'>
	        					
	        						
	        					
								</span>
							</div>
        				</td>	
					</tr>
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height='50' style='font-size: 50px; line-height: 50px;'>&nbsp;</td></tr>
		
	</tbody></table>
	
	 
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function forgotUSER($email,$password,$mobile){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $email
	));
	$message->setSubject("Password Reset.");
	$message->setBody(
	"
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'> 
<html xmlns:v='urn:schemas-microsoft-com:vml'>
<head>

	<!-- Define Charset -->
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<!-- Responsive Meta Tag -->
	<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />

	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	
    <title>forgot</title><!-- Responsive Styles and Valid Styles -->

    <style type='text/css'>
    
	    body{
            width: 100%; 
            background-color: #ffffff; 
			font-family: 'Questrial', sans-serif;
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;
        }
        
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        
        span.preheader{display: none; font-size: 1px;}
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
		
		 /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
			/*------ top header ------ */	
            body[yahoo] .show{display: block !important;}
            body[yahoo] .hide{display: none !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 440px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 440px !important;}
			
			/*--------- banner ----------*/
			body[yahoo] .banner img{width: 440px !important; height: auto !important;}
			/*-------- container --------*/			
			body[yahoo] .container590{width: 440px !important;}
			body[yahoo] .container580{width: 400px !important;}
			body[yahoo] .container1{width: 420px !important;}
			body[yahoo] .container2{width: 400px !important;}
			body[yahoo] .container3{width: 380px !important;}
           
			/*-------- secions ----------*/
			body[yahoo] .section-item{width: 440px !important;}
            body[yahoo] .section-img img{width: 440px !important; height: auto !important;}        
        }

		@media only screen and (max-width: 479px){
			/*------ top header ------ */
			body[yahoo] .main-header{font-size: 24px !important;}
            body[yahoo] .resize-text{font-size: 14px !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 280px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 280px !important;}
			body[yahoo] .align-center{text-align: center !important;}
			
			
			/*-------- container --------*/			
			body[yahoo] .container590{width: 280px !important;}
			body[yahoo] .container580{width: 240px !important;}
            body[yahoo] .container1{width: 260px !important;}
			body[yahoo] .container2{width: 240px !important;}
			body[yahoo] .container3{width: 220px !important;}
			
            /*------- CTA -------------*/
			body[yahoo] .cta-button{width: 240px !important;}
			body[yahoo] .cta-text{font-size: 16px !important;}
		}
		
</style>
</head>

<body yahoo='fix' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'> 
	
		
	
	<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='00cccb' background-size: 100% 100%; background-position: top center;' class='main-bg'>
		
		<tbody><tr><td height='90' style='font-size: 90px; line-height: 90px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' align='center' width='450' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container3 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='470' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container2 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='490' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container1 bg_color' style='border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
				</tbody></table>
			</td>
		</tr>	
		<tr><td height='3' style='font-size: 3px; line-height: 3px;'>&nbsp;</td></tr>
		<tr>
			<td>
				<table border='0' align='center' width='510' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='container590 bg_color' style='border-radius: 4px; background-color: rgb(255, 255, 255);'>
					
					<tbody><tr><td height='20' style='font-size: 40px; line-height: 20px;'>&nbsp;</td></tr>
					<tr><td height='35' style='font-size: 35px; line-height: 35px;'>&nbsp;</td></tr>
					<tr>
						<td>
							<table border='0' align='center' cellpadding='0' cellspacing='0'>
								<tbody><tr>
			 						<!-- ======= logo ======= -->
									<td align='center'>
										<a href='' style='display: block; border-style: none !important; border: 0 !important;' class='editable_img'><img width='230' border='0' style='display: block; width: 230px;' src='".$message->embed(Swift_Image::fromPath('../img/koupon.png'))."' alt='logo' class=''></a>
									</td>			
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height='45' style='font-size: 45px; line-height: 45px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #262c51; font-size: 14px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='title_color main-header'>
							
							<!-- ======= section header ======= -->
							
							<div class='editable_text' style='line-height: 30px;'>
								<span class='text_container'>Heyy your Account is Locked <br> forgotten your password?<br>&nbsp;&nbsp; </span>
								
								
							</div>
							
							<img align='center' height='100' width='100' src='".$message->embed(Swift_Image::fromPath('../img/lock.png'))."'></img>
        				</td>
						
					</tr>
					
					<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td>
							<table border='0' width='440' align='center' cellpadding='0' cellspacing='0' class='container580'>				
								<tbody><tr>
									<td align='center' style='color: #262c51; font-size: 16px; font-family: 'Oxygen', sans-serif; mso-line-height-rule: exactly; line-height: 24px;' class='resize-text text_color'>
										<div class='editable_text' style='line-height: 24px'>
											
											<!-- ======= section text ======= -->
											<span class='text_container'></span>
										</div>
			        				</td>	
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					
					<tr>
						<td align='center' style=' background-size: 100% 100%; background-position: top center;'>
							
							<table border='0' align='center' width='200' cellpadding='0' cellspacing='0' bgcolor='f0f80a' style='border-radius: 50px; box-shadow: 0 2px 0 2px f0f80a;' class='cta-button main_color'>
								
								<tbody><tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
								
								<tr>
									
	                				<td align='center' style='color: black; font-size: 18px; text-decoration:none;  font-family: 'Questrial', sans-serif;' class='cta-text'>
	                					<!-- ======= main section button ======= -->
	                					
		                    			<div class='editable_text' style='line-height: 24px;'>
		                    				<span class='text_container'>
												Password: ".$password."
											</span>
		                    			</div>
		                    		</td>
		                    		
	                			</tr>
								
								<tr><td height='17' style='font-size: 17px; line-height: 17px;'>&nbsp;</td></tr>
							
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height='40' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
					
					<tr>
						<td align='center' style='color: #262c51; font-size: 14px; font-family: 'Questrial', sans-serif; line-height: 22px;' class='text_color'>
							<!-- ======= section subtitle ====== -->
							
							<div class='editable_text' style='line-height: 22px;'>
								<span class='text_container'></span>
							</div>
        				</td>
					</tr>
					
					<tr><td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td></tr>
					
					<tr>
    					<td align='center'>
    					
                			<table border='0' align='center' cellpadding='0' cellspacing='0' width='75'>
                				<tbody><tr><td height='5' style='font-size: 5px; line-height: 5px;'>&nbsp;</td></tr>
	                			<tr>
	                				<td align='center'>
	                					<table border='0' align='center' cellpadding='0' cellspacing='0'>
	                						<tbody><tr>
												
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 8px; height: 13px; border-style: none !important; border: 0 !important;' href='http://www.facebook.com/kouponize' class='editable_img'><img width='8' height='13' border='0' style='display: block; width: 8px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('../img/facebook.png'))."' alt='facebook'></a>			
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 13px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='13' height='13' border='0' style='display: block; width: 13px; height: 13px;' src='".$message->embed(Swift_Image::fromPath('../img/google.png'))."' alt='google'></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 13px; height: 10px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='13' height='10' border='0' style='display: block; width: 13px; height: 10px;' src='".$message->embed(Swift_Image::fromPath('../img/twitter.png'))."' alt='twitter'></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style='display: block; width: 12px; height: 12px; border-style: none !important; border: 0 !important;' href='#' class='editable_img'><img width='12' height='12' border='0' style='display: block; width: 12px; height: 12px;' src='".$message->embed(Swift_Image::fromPath('../img/linkeden.png'))."' alt='linkden'></a>		
			        							</td>
			        							
											</tr>		
	                					</tbody></table>				
	                				</td>
	                			</tr>
							</tbody></table>
    					</td>
    				</tr>
					
					<tr><td height='40' style='font-size: 40px; line-height: 40px;'>&nbsp;</td></tr>
														
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height='30' style='font-size: 30px; line-height: 30px;'>&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border='0' width='540' align='center' cellpadding='0' cellspacing='0' class='container580'>
					<tbody><tr>
						
						<td align='center' style='color: #ffffff; font-size: 14px; font-family: 'Questrial', sans-serif; mso-line-height-rule: exactly; line-height: 30px;' class='text2_color'>
							<div class='editable_text' style='line-height: 30px'>
								
								<!-- ======= section text ======= -->
								<span class='text_container'>
	        					
	        						
	        					
								</span>
							</div>
        				</td>	
					</tr>
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height='50' style='font-size: 50px; line-height: 50px;'>&nbsp;</td></tr>
		
	</tbody></table>
	
	 
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function availedUser($email,$image,$title,$kpn_id,$company_name,$memail,$mmobile,$line1,$line2,$line3,$city, $paid, $nPaid){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	$tot = $paid+$nPaid;
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $email
	));
	$message->setSubject($title." Koupon claimed successfully.");
	$message->setBody(
	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' />
   <title>Flick</title>
   <style type='text/css'>
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #07bb36; text-decoration: none; font-weight: bold; }
.hide { max-height: 0px; font-size: 0; display: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class='table600'] { width: 450px !important; text-align: center !important; }
table[class='table550'] { width: 87% !important; float: none !important; }
table[class='table2-2'] { width: 47% !important; }
img[class='img1'] { width: 100% !important; height: auto !important; }
img[class='img2'] { width: 60% !important; height: auto !important; }
table[class='social'] { width: 100px !important; }
table[class='table1-3'] { width: 30% !important; }
table[class='table3-1'] { width: 64% !important; }
td[class='clear_pad'] { padding: 0px !important; }
/*space*/
table[class='space'] { display: none !important; }
}
@media only screen and (max-width: 479px) {
body { width: auto !important; }
img[class='top_fold'] { display: none !important; }
table[class='table600'] { width: 290px !important; }
table[class='table550'] { float: none !important; }
table[class='table2-2'] { width: 100% !important; text-align: center !important; }
img[class='img1'] { width: 100% !important; }
img[class='img2'] { width: 40% !important; height: auto !important; }
table[class='table1-3'] { width: 100% !important; }
table[class='table3-1'] { width: 100% !important; }
.hide { max-height: 26px !important; font-size: 0px !important; display: block !important; }
/*space*/
table[class='space'] { display: none !important; }
}
.style3 {color: #34495e; font-size: 16px; }
.style9 {color: #66CC00; font-weight: bold; font-size: x-large; }
   </style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>

<body>
   <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ecf0f1'>
      <tr>
         <td valign='top'>
            <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>

               <!--Header Bar-->

               <tr>
                  <td valign='top'>
                     <table width='100%' height='5' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td valign='top' style='border-top:5px solid #ffffff;'>
                              <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>

                                 <!--Link Browser-->

                                 <tr>
                                    <td align='right' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#bdc3c7; font-style: italic; padding-top:15px;'>
                                       Having trouble viewing?
                                       <a href='http://www.kouponize.com/' style='font-weight: normal;'>Kouponize.</a>
                                    </td>
                                 </tr>

                                 <!--End Link Browser-->

                                 <tr>
                                    <td height='20'></td>
                                 </tr>
                                 <tr>
                                    <td align='left' valign='top'>
                                       <table width='600' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='table600'>
                                          <tr>
                                             <td style='padding-left:0px; padding-right:0px;'>
                                                <!--Logo-->

                                                <table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='17' align='right' valign='top'>
                                                         <div class='hide'>
                                                            <img class='hide' src=''  width='15' height='26' />
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </table>
												<table class='table1-3' width='183' bgcolor='#ffffff' border='0' align='left' cellpadding='0' cellspacing='0'>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												   <tr>
                                                         <td align='center' width='183'><img src='".$message->embed(Swift_Image::fromPath('../images/logob.png'))."'  width='160' height='54' alt='logo' /></td>
                                                    </tr>
                                                   <tr>
                                                      <td height='15'></td>
                                                   </tr>
												</table>

                                                <!--End Logo-->

                                                <!--Navigation-->

                                                <table border='0' align='right' cellpadding='0' cellspacing='0' class='table3-1'>
                                                   <tr>
                                                      <td height='27' align='right' valign='top'>
                                                         <img class='top_fold' src='".$message->embed(Swift_Image::fromPath('../images/fold_conner.jpg'))."'  width='15' height='27' alt='fold_conner' />
                                                      </td>
                                                   </tr>
                                                </table>

                                                <!--End Navigation--> </td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Bar-->

               <!--Header Image-->

               <tr>
                  <td valign='top'>
                     <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                           <td bgcolor='#07bb36'>
                              <table class='table600' bgcolor='#31c3a6' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                                 <tr>
                                    <td align='center'>
                                       <img class='img1' src='".$message->embed(Swift_Image::fromPath('../images/header_img.jpg'))."'  width='600' height='265' alt='header_img' />
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Header Image-->
               <!--Quote-->

               <tr>
                  <td valign='top'>
                     <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'><div align='left'>Koupon Claimed</div></td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                   <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>
                                    You claimed the koupon <b>'".$title."'</b> successfully.<br>Your koupon codes are : $kpn_id<b></b></td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td bgcolor='#FFFFFF' style='border-bottom:4px solid #07bb36;'>
                              <table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
			                          <tr>
									   <td height='10'></td>
									</tr>
                                 <tr>
                                    <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:30px; color:#34495e;'><div align='left'>Payment Details </div></td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                                 <tr>
                                   <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'><table width='538' border='0'>
                                      <tr>
                                        <td width='163'><div align='center'><span style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:16px; color:#34495e;'>Deal Cost </span></div></td>
                                        <td width='177'><div align='center'><span style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:16px; color:#34495e;'>You Paid </span></div></td>
                                        <td width='184'><div align='center'><span style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:16px; color:#34495e;'>Pay Merchant </span></div></td>
                                      </tr>
                                      <tr>
                                        <td><div align='center' style='color: #66CC00; font-weight: bold; font-size: x-large;'>₹".$tot."</div></td>
                                        <td><div align='center' style='color: #66CC00; font-weight: bold; font-size: x-large;'>₹".$paid."</div></td>
                                        <td><div align='center' style='color: #66CC00; font-weight: bold; font-size: x-large;'>₹".$nPaid."</div></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                    </table></td>
                                 </tr>
                                 <tr>
                                    <td height='10' valign='top'></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
						
                        <tr>
                           <td align='center' valign='top'>
                              <img src='".$message->embed(Swift_Image::fromPath('../images/img_point.png'))."'  width='15' height='6' />
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!--End Quote-->

               <!--1:3 Date Panel-->

               <tr>
                  <td valign='top'>
                    <table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-top:-5px;'>
                     <tr>
                        <td align='right' valign='top' bgcolor='#FFFFFF' height='27'></td>
                     </tr>
                     <tr>
                        <td bgcolor='#FFFFFF'><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td valign='top'><!--image-->
                                    
                                    <table class='table2-2' width='140' border='0' align='left' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td style='border-right:4px solid #07bb36;'><img class='img1' src='".$message->embed(Swift_Image::fromPath($image))."'  width='180' height='200' alt='188' /></td>
                                          <td align='left' valign='middle'><img src='".$message->embed(Swift_Image::fromPath('../images/img_point_right.png'))."'  width='6' height='15' /></td>
                                       </tr>
                                       <tr></tr>
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                          <td></td>
                                       </tr>
                                    </table>
                                    
                                    <!--End image-->
                                    
                                    <table width='350' border='0' align='right' cellpadding='0' cellspacing='0' class='table2-2'>
                                       <tr></tr>
                                       <!--Article Title-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px; color:#34495e;'>Company Details</td>
                                       </tr>
                                       <!--End Article Title-->
                                       <tr>
                                          <td height='10' align='left' valign='top'></td>
                                       </tr>
                                       <!--Content-->
                                       <tr>
                                          <td align='left' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>You can redeem your koupon from '".$company_name."'.<table><tr><td>Email </td><td>: '".$memail."'</td></tr>
										 <tr><td>Phone </td><td>: '".$mmobile."'</td></tr><tr><td valign='top'>Address </td><td>: ".$line1.",<br>&nbsp;&nbsp;".$line2.",<br>&nbsp;&nbsp;".$line3.",<br>&nbsp;&nbsp;".$city.".</td></tr></table>
										 </td>
                                       </tr>
                                       <!--End Content-->
                                       <tr>
                                          <td align='left' valign='top' height='35'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                                 <tr>
                                    <td height='10' valign='top'><span style='font-family: Helvetica, Arial, sans-serif; font-size:13px; color:#999999; line-height:24px;'>* In case of any queries you can contact respective company. </span></td>
                                 </tr>
                  </table>	
                  </td>
               </tr>

               <!--End 1:3 Date Panel-->
               <!--1:3 Date Panel-->


               <!--End 1:3 Date Panel-->
               <!--Footer-->	
				 <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td height='25'></td>
                     </tr>
                     <tr>
                        <td height='50' bgcolor='#FFFFFF'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                             <tr>
                                 <td align='center' style='font-family: Helvetica, Arial, sans-serif; font-size:14px; font-weight: bold; color:#0ae042;'>Thank you for using <a href='http://www.kouponize.com'>kouponize.com</a></td>
                              </tr>
                           </table></td>
                     </tr>
            <tr>
               <td valign='top'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                     <tr>
                        <td bgcolor='#34495e'><table class='table600' bgcolor='#3c5063' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td><table class='table550' width='550' border='0' align='center' cellpadding='0' cellspacing='0'>
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                       
                                       <!--info-->
                                       
                                        <tr>
                                          <td align='center' valign='top' style='font-family: Helvetica, Arial, sans-serif; font-size:12px; color:#ecf0f1; line-height:22px;'> You are currently subscribed to receive email updates from <a href='http://www.kouponize.com'>kouponize.com .</a><br>If you have any trouble, please mail us on <a href='#'>reachout@kouponize.com</a>. </td>
                                       </tr>
                                       
                                       <!--End info-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='20'></td>
                                       </tr>
                                       
                                       <!--Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top'><table width='130' border='0' cellspacing='0' cellpadding='0'>
                                                <tr>
                                                   <td><a href='https://www.facebook.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('../images/facebook.png'))."'  width='32' height='32' alt='facebook' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://twitter.com/kouponize'><img src='".$message->embed(Swift_Image::fromPath('../images/twitter.png'))."'  width='32' height='32' alt='twitter' /></a></td>
                                                   <td width='17'></td>
                                                   <td><a href='https://plus.google.com/109987298262776094176'><img src='".$message->embed(Swift_Image::fromPath('../images/googleplus.png'))."'  width='32' height='32' /></a></td>
                                                </tr>
                                             </table></td>
                                       </tr>
                                       
                                       <!--End Social-->
                                       
                                       <tr>
                                          <td align='center' valign='top' height='30'></td>
                                       </tr>
                                    </table></td>
                              </tr>
                           </table></td>
                     </tr>
                     <tr>
                        <td bgcolor='#2c3e50'><table class='table600' width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
                              <tr>
                                 <td height='10' bgcolor='#344656'></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table></td>
            </tr>
         </table></td>
   </tr>
   <!--End Footer-->
</table>
</body>
</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

function adminMail($company_name,$image,$email,$password,$mobile){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  'arun.corleone@gmail.com' => "Arun",
	  'nani.krishnasai@gmail.com' => "KrishnaSai",
	  'aniljoshuad@gmail.com'=> "Anil",
	  'jkilos@gmail.com' => "John"
	));
	$message->setSubject($company_name." Regestered.");
	$message->setBody(
	"
	<html>
	<body style='width:800px;height:360px;display:block;background-color:WHITE;border:1px solid black;font-family:Calibri;'>
	<div style='width:780px;height:70px;display:block;background-color:#6b8d2a;padding:10px;border-bottom:1px dashed black;'>
		<img src='".$message->embed(Swift_Image::fromPath('images/logo.png'))."' width='200px'/>
	</div>
	<table height='200px' style='color:black;'>
	<tr>
	<td width='180px' style='padding:10px;'>
			<center><b>".$company_name."</b><br>
			<img src='".$message->embed(Swift_Image::fromPath($image))."' width='60px'><br><br>
			".$email."<br>
			Ph:".$mobile."<br>
			</center>
	</td>
	<td style='padding:10px;'>
			".$company_name." successfully registered as 'Merchant' with followning details.<br>
			User name: ".$email."<br>
			Password: ".$password."<br>
			<br>
			Please validate the merchant to grant access for him.
	</td>
	</tr>
	</table>
	<table style='width:800px;height:70px;background-color:#1f1f1f;padding:10px;color:white;'>
	<tr>
	<td width='50%'>
		</td>
	<td align='right'><br>
		<small style='color:white;'>This is a system generated mail. Please don't reply.<br>Incase of any issues you can contact us at reachout@kouponize.com.</small></div>
	</td>
	</tr>
	</table>
	</body>
	</html>
	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}


function PayProcess($email, $kpnu, $paid, $claimDate){
	// Create the mail transport configuration
	$transport = Swift_MailTransport::newInstance();
	 
	// Create the message
	$message = Swift_Message::newInstance();
	$message->setTo(array(
	  $email => $email
	));
	$message->setSubject($title." Payment Processed Successfully.");
	$message->setBody(
	"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
    <body>
        <div>
            <div class='adM'></div>
            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' style='background-color:#7FA832'>
                <!-- 009fe3 7FA832-->
                <tbody>
                    <tr>
                        <td width='118' height='50' align='right' valign='top' style='padding:15px 25px 0 16px'><div align='left'><span class='adM'><img src='".$message->embed(Swift_Image::fromPath('../images/logo.png'))."'  width='79' height='72' alt='logo' /></span></div></td>
                        <td width='476' align='right' valign='top' style='padding:15px 25px 0 16px'><img src='".$message->embed(Swift_Image::fromPath('../images/logob.png'))."'  width='160' height='54' alt='logo' /></td>
                    </tr>
                    <tr>
                        <td colspan='2' valign='top' style='padding:20px 0 0 23px'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tbody>
                                    <tr>
                                        <td colspan='2' style='font-family:Arial,Helvetica,sans-serif;color:#fff;font-size:67px;padding-bottom:20px'>
                                            Hi,                                        </td>
                                    </tr>
                                    <tr>
                                        <td width='99%' valign='top'>
                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                <tbody>
                                                    <tr>
                                                        <td style='font-family:Arial,Helvetica,sans-serif;color:#fff;font-size:23px;padding-bottom:15px'>
                                                            You have successfully Claimed<br>
                                                            your Koupons.                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family:Arial,Helvetica,sans-serif;color:#fff;font-size:18px;padding-bottom:20px'>
                                                            Enjoy great Deals & Offers at Kouponize.com                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td height='28' style='background-color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:16px;color:#89b556;font-weight:bold;padding:7px 0 6px 13px'>
                                                                            Payment Details                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width='60%' style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 8px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            Payment Transaction Number                                                                                        </td>
                                                                                        <td width='40%' style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 5px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            160914-03929831                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 8px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            Kouponize Transaction                                                                                        </td>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 5px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            ".$kpnu."                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 8px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            Amount Paid                                                                                        </td>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 5px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            <img src='https://ci3.googleusercontent.com/proxy/EU9IE_KTeKJn1KmLv1a2ThnQqljjZxvIUGe5730O0nT10iWCjPLuag8XZFR77CtCVgZpFN8P3mGBdYkg0dEjAta5TSPPbnF2erNC6OH5dY4LNw=s0-d-e1-ft#http://www.Kouponize.in/_layouts/KouponizeRevamp/revamp_img/rs.png' width='8' height='12'>".$paid."                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 8px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            Claim Date &amp; Time                                                                                        </td>
                                                                                        <td style='border-bottom:1px solid #8cd4f2;padding:8px 0px 8px 5px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#ffffff;font-weight:normal'>
                                                                                            ".$claimDate."                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>                                        </td>
                                        <td width='11%' valign='top'><img src='".$message->embed(Swift_Image::fromPath('../images/Payment-received.png'))."'  width='173' height='173' alt='payment' /></td>
                                    </tr>
                                    <tr>
                                        <td height='64' colspan='2' style='font-family:Arial,Helvetica,sans-serif;font-size:45px;color:#ffffff;font-weight:normal;text-transform:uppercase'>
                                            Have a great day!                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' style='font-family:Arial,Helvetica,sans-serif;color:#ffffff;font-weight:normal;text-transform:uppercase'>
                                            <div align='left'><img src='".$message->embed(Swift_Image::fromPath('../images/social.png'))."'  width='173' height='40' alt='social' />
											</div>                                        
										</td>
                                    </tr>
                                </tbody>
                            </table>                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' valign='top' style='padding:20px 20px 0 23px'>
                            <hr>
                            <font face='Arial' color='#2D2A29' size='1'>This e-mail and any attachment(s) transmitted with it are intended solely for the use of the intended recipient(s) and may contain confidential and privileged information. If you are not the named addressee, you should
                            not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete it from your system. Any views or opinions expressed are solely those of the sender and do not necessarily
                            represent those of Kouponize or its affiliates or group companies, unless sender does so with due authority from Kouponize. Any form of reproduction, dissemination, copying, disclosure, modification, distribution and/or publication of this e-mail and attachments,
                            if any, and/or any action taken in reliance of this e-mail, without the prior written consent of the sender is strictly prohibited. The recipient should check this e-mail and attachment(s), if any, for the presence of viruses and/or defects. Kouponize accepts
                            no liability for any damage caused by any virus and/or defects transmitted by this email.<br>
                            </font>
                            <div class='yj6qo'></div>
                            <div class='adL'></div>                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan='2' valign='top'>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </body>
</html>

	",
	  'text/html' // Mark the content-type as HTML
	);
	$message->setFrom("reachout@kouponize.com", "Kouponize");
	 
	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	$mailer->send($message);
}

	?>