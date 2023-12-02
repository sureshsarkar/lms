<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * This function is used to print the content of any data
 */



 function get_email_temp($heading,$content){

    $templete='
    <table width="100%">
	<tbody>
		<tr>
			<td align="center" width="700">
				<table width="700" style="border:1px solid #000;padding:0px;margin:0px">
					<tbody>
						<tr>
							<td>
								<table cellpadding="0" cellspacing="0" style="padding:0px;margin:0px" width="100%">
									<tbody>
								
										<tr>
											<td style="padding-top:0px;padding-bottom:0px;margin:0px;vertical-align:middle;    border: 1px solid #24446b;"
												valign="middle" width="100%">
												<table cellpadding="0" cellspacing="0" style="padding:0px;margin:0px"width="100%">
													<tbody>
                                                  
														<tr>
															<td style=" padding-left: 12px;">&nbsp;</td>

															<td style="padding-top:0px;padding-bottom:0px;margin:0px;vertical-align:middle" valign="middle" width="46%">
																<table style="padding:0px;margin:0px" width="100%">
																	<tbody>
																		<tr>
																			<td align="left" style="padding-left:0px;margin:0px;color:#ffffff;font-size:30px;line-height:36px;font-weight:bold" valign="middle">
                                                                            <span><img src="http://tclms.in/assets/images/logo.png" alt="Logo" style="max-width: 240px;margin-bottom: 22px;"></span>
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="    padding-left: 0px;
																			margin-top: 15px;
																			color: #24446b;
																			font-weight: 600;
																			font-size: 16px;
																			line-height: 24px;
																			font-family: Montserrat, sans-serif;" valign="middle">
																				We Believe That Right Information Helps You Make Better Decisions.
																			</td>
																		</tr>
																		<tr>
																			<td align="left" style="padding-top:20px; font-family:Montserrat, sans-serif;" valign="middle"></td>
																		</tr>
																	</tbody>
																</table>
															</td>
															<td style="padding-top:0px;padding-bottom:0px;margin:0px"
																width="54%">
																<table style="padding:0px;margin:0px" width="100%">
																	<tbody>
																		<tr> 
																			<td align="left" style="padding:0px;margin:0px"><img alt="Header" src="https://techcentrica.co.in/hi.png" width="100%" tabindex="0"></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<table cellpadding="0" cellspacing="0" width="100%">
									<tbody>
										<tr>
											<td style="padding-left:10px">&nbsp;</td>
											<!-- dinamic content start  -->
											<td style="padding-top:26px;margin:0px;width:100%" valign="top">
												<table cellpadding="0" cellspacing="0" style="padding:0px;margin:0px"width="100%">
													<tbody>
														<tr>
															<td style="padding-right: 10px;padding-top:0px;margin-bottom:50px"
																valign="top" width="100%">
																<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tbody>
																		<tr>
																			<td style="padding-top:0px;margin:0px"
																				valign="top" width="100%">
																				<table align="left" border="0"cellpadding="0" cellspacing="0" width="100%">
																					<tbody>
																						<tr>
																							<td align="left" style="
                                                                                              box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
																								padding-bottom: 10px;
																								color: #000000;
																								font-size: 16px;
																								font-family: Montserrat, sans-serif;
																								background: #ffffff;
																								padding-top: 10px;">
																								'.$heading.'
																						   </td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr>
																			<td style="padding-top:0px;margin:0px"
																				valign="top" width="50%">
																				<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border: 1px solid #d0d0d0;padding: 10px;table-layout:fixed;width:100%;">
																					<tbody>
																						'.$content.'
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<!-- dinamic content end  -->
										</tr>
									</tbody>
								</table>

								<table cellpadding="0" cellspacing="0" width="100%">
									<tbody>
										<tr>
											<td style="padding-left:50px">&nbsp;</td>
											<td style="margin:0px;padding-top:35px" valign="top" width="100%">
											</td>
										</tr>
									</tbody>
								</table>
								<table cellpadding="0" cellspacing="0" width="100%" style="text-align:center;">
									<tbody>
										<tr>
											<td align="center" style="border-top: 1px solid #d0d0d0;
											text-align: center;
											padding-right: 20px;
											padding-left: 20px;
											font-size: 12px;
											padding-top: 12px;
											padding-bottom: 12px;
											background: #e7e7e7;
											border-bottom: 1px solid #d0d0d0;
											font-family: Montserrat, sans-serif;">
											Your email has been sent. We will get back to you shortly. In the meantime check out our work or read more <b>About Us</b>.</td>
										</tr>
										<tr>
										</tr>
									</tbody>
								</table>
								<table cellpadding="0" cellspacing="0" width="100%" style="text-align:center;padding-top: 5px;">
									<tbody>
										<tr>
											<td style="font-size:20px; font-weight:700;text-align:center; font-family: Montserrat, sans-serif; padding-right: 20px;padding-left: 20px;">
												Connect:
											</td>
										</tr>
										<tr>
											<td align="center" style="font-size:12px;text-align:center; font-family: Montserrat, sans-serif; padding-right: 20px;padding-left: 20px;padding-top: 8px;">
												Job Enquiry: +91 9599200281
											</td>
										</tr>
										<tr>
											<td align="center" style="font-size:12px;text-align:center; font-family: Montserrat, sans-serif; padding-right: 20px;padding-left: 20px;padding-top: 8px;">
												Mobile:+91-9599200280 | +91-9654221960
											</td>
										</tr>
										<tr>
											<td align="center"
												style="font-size:12px;text-align:center; font-family: Montserrat, sans-serif; padding-right: 20px;padding-left: 20px;padding-top: 8px;">
												Email: sales@techcentrica.com
											</td>
										</tr>
									</tbody>
								</table>
								<table cellpadding="0" cellspacing="0" width="100%"
									style="text-align:center;padding-top: 10px; table-layout:fixed;">
									<tbody>
										<tr>
											<td align="left" style="font-size:10px;font-family: Montserrat, sans-serif; padding-right: 20px;">
												<a href="https://www.techcentrica.com/privacy.html" style="color:blue;"> Privacy Policy</a>,
											    <a href="https://www.techcentrica.com/disclaimer.html" style="color:blue;"> Disclaimer</a>
										   </td>
											<td align="right">
												<ul style="list-style: none;float: right; display: flex; margin: 0; padding-right:0px;">
													<li style="
													background: #117eff;
													border-radius: 5px;
												"><a href="https://www.facebook.com/TechCentrica"><img src="https://tclms.in/assets/images/social/insaaf_facebook.png" style="width: 18px; padding:2px;"></a></li>
													<li style="
													background: radial-gradient(#f2307fd1, #db2299);
													border-radius: 5px;
													margin-left: 5px;
												"><a href="https://www.instagram.com/techcentrica/"><img src="https://tclms.in/assets/images/social/insaaf_insta.png" style="width: 18px; padding:2px;"></a></li>
													<li style="
													background: #117eff;
													border-radius: 5px;
													margin-left: 5px;
												"><a href="https://www.linkedin.com/uas/login-submit"><img src="https://tclms.in/assets/images/social/insaaf_linkedin.png" style="width: 18px; padding:2px;"></a></li>
													<li style="
													background: #4eef6a;
													border-radius: 5px;
													margin-left: 5px;
												"><a href="https://api.whatsapp.com/send?phone=+919654221960&text=Hello!%20I%20have%20Enquiry"><img src="https://tclms.in/assets/images/social/insaaf_whatsapp.png" style="width: 18px; padding:2px;"></a></li>
													<li style="
													border-radius: 5px;
													border: 1px solid black;
													margin-left: 5px;
												"><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FTech_Centrica"><img src="https://tclms.in/assets/images/social/twitter.svg" style="width: 18px; padding:2px;"></a></li>
													<li style="
													border-radius: 5px;
													background: red;
													margin-left: 5px;
												"><a href="https://www.youtube.com/@Techcentrica"><img src="https://tclms.in/assets/images/social/insaaf_youtube.png" style="width: 18px; padding:2px;"></a></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
';



    return $templete;


}

?>