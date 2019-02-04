<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Emailtemplate {
	

	public function contact_email($name,$email,$subject,$message){
		
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Document</title>
		 </head>
		 <body>
				<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
				<tr>
					<td valign="middle" align="center">
						<!--Logo Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="line-height:80px; font-size:80px;" valign="middle" align="center" height="80">
												&nbsp;
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Logo Part End-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="border-radius: 8px 8px 0px 0px; background-color:white;border-bottom: 2px solid #EC6B0D;" data-bgcolor="theme-bg" valign="middle" bgcolor="#18c197" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left" class="editable">
															<table class="full" width="165" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																		&nbsp;
																	</td>
																</tr>
																<tr>
																	<td valign="middle" align="center">
																		<a href="#"><img src="http://vujubaba.com/images/logo.png" alt=""  height="55" /></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="line-height:30px; font-size:60px;" valign="middle" align="center" height="30">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left">
															<table class="two-left-inner" width="365" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td valign="top" align="left">
																		
																		<table class="full" width="250" cellspacing="0" cellpadding="0" border="0" align="left">
																			<tr>
																				<td valign="top" align="left">
																					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tr>
																							<td style="font-family:Open Sans, Verdana, Arial; font-size:24px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																								<multiline>
																									Hi,
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
																								&nbsp;
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																								&nbsp;
																							</td>
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
													
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																You have receive an enquiry from <span style="color:#EC8C0E;">' . $name . '</span>(<span style="color:#EC8C0E;">' . $email . '</span>).
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Subject : <span style="color:#EC8C0E;">' . $subject . '</span>. 
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Message : <span style="color:#EC8C0E;">' . $message . '</span>. 
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part End-->

						<!--Copyright Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td valign="middle" align="center">
												<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Copyright Part End-->

					</td>
				</tr>
			</table>
		  
		 </body>
		</html>
		';
		return $message;
	}

	
}