<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tables - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	  <script src='https://cdn.tiny.cloud/1/aayb5nmhrat9b0d7nwat6t3whbakv4xy7riapaq83a53z91e/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
<script>
  tinymce.init({
   selector: 'textarea',
   //plugins: 'advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste tinydrive tinymcespellchecker',
   plugins: 'lists media tinydrive',
   menubar: 'file edit view insert format tools table help',
   toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
   toolbar_drawer: 'floating'
});
  </script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	
</head>
<body>

	<div class="wrapper">
		<?php include"header.php"; ?>
		<?php include"menu.php"; 
			if(isset($_GET['products'])) 
				{
					$bas='Mal';
					$lin='<a href="datatables_clients.php?dax=0&sifaris=0&index=1">';
					if(isset($_GET['index']))
						{$bas1='Mal cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Mal cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Mal əlavəsi</a></li>';}
					else
							{$bas1='Mal cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Məhsulun redaktəsi</a></li>';}
				}				
		
			if(isset($_GET['sifaris'])) 
				{
					$bas='Satış';
					if(isset($_GET['index']))
						{$bas1='Mal satışı cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Mal satışı cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Məhsul satışı</a></li>';}
					else
							{$bas1='Mal satışı cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Satışın redaktəsi</a></li>';}
				}
			if(isset($_GET['zamenet'])) 
				{
					$bas='Zamenet';
					if(isset($_GET['index']))
						{$bas1='Zamanətə baxış';}
					else
						{$bas1='Zamanətə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Zamanəti redaktəsi</a></li>';}
				}
			if(isset($_GET['anbar'])) 
				{
					$bas='Anbar';
					if(isset($_GET['index']))
						{$bas1='Anbar cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Brend cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Brend əlavəsi</a></li>';}
					else
							{$bas1='Brend cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Brendi redaktəsi</a></li>';}
				}
				
			if(isset($_GET['seb'])) 
				{
					$bas='Səbət-satiş';
					if(isset($_GET['index']))
						{$bas1='Səbət cədvəlinə baxış';}
				}
			if(isset($_GET['brend'])) 
				{
					$bas='Brend';
					if(isset($_GET['index']))
						{$bas1='Anbar cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Anbar cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Anbar əlavəsi</a></li>';}
					else
							{$bas1='Anbar cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Anbarın redaktəsi</a></li>';}
				}	
			if(isset($_GET['nisye'])) 
				{
					$bas='Nisyə';
					if(isset($_GET['index']))
						{$bas1='Mal çıxarışı cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Mal çıxarışı cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Məhsul çıxarışı</a></li>';}
					else
							{$bas1='Mal çıxarışı cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Məhsul çıxarışıları silməsi</a></li>';}
				}
		if(isset($_GET['odenis'])) 
				{
					$bas='Ödənişlər';
					if(isset($_GET['index']))
						{$bas1='Ödəniş cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Ödəniş cədvəlinə baxışş';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Ödənişin əlavə edilməsi</a></li>';}
					
					else
							{$bas1='Ödəniş cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Ödəniş cədvəlinə baxış</a></li>';}
				}
		if(isset($_GET['sebet'])) 
				{
					$bas='Sebət-anbar';
					if(isset($_GET['index']))
						{$bas1='Səbət cədvəlinə baxış';}
				}	
		if(isset($_GET['xerc'])) 
				{
					$bas='Xərclər';
					if(isset($_GET['index']))
						{$bas1='Xərc cədvəlinə baxış';}
					elseif(isset($_GET['insert']))
							{$bas1='Xərc cədvəlinə baxış';$bas2='<li class="separator"><i class="flaticon-right-arrow"></i></li><li class="nav-item"><a href="#">Xərc əlavəsi</a></li>';}
				}
		if(isset($_GET['gal'])) 
				{
					$bas='Anbarda qalıq';
					if(isset($_GET['index']))
						{$bas1='Qalıq mal cədvəlinə baxış';}
				}		
		
		?>
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?=$bas?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<?=$lin?>
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"><?=$bas1?></a>
							</li>
							<?=$bas2?>
							
						</ul>
					</div>
					<?php	
						//Bazaya qoshuluruq START
						$i=mysqli_connect("localhost","iki","123456","anbarlar");
						//Bazaya qoshuluruq END 
						if(isset($_GET['exite']))
							{
								session_start();
								unset($_SESSION['log']);
								unset($_SESSION['par']);
								?>	
								<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0">
								<?php	
							}
						if(isset($_GET['reg']))
							{?>
								<tr>
									<td  align='center'>
										
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<h4 class="card-title">Anbara xoş gəlmisix</h4>
													</div>
													<div class="card-body">
														<div class="table-responsive">	
															<div align='center'>
															<?php 
																	$t[1]='AD';
																	$t[2]='SOYAD';
																	$t[3]='PAROL';
																	$t[4]='LOGIN';
																	if(isset($_POST['daxil']))
																		{
																			if(empty($_POST['ad'])){unset($_POST['ad']); $t[1]='<font color="red">Siz adınızı daxil etmediniz</font>';} else{$ad=trim($_POST['ad']);}
																			if(empty($_POST['soyad'])){unset($_POST['soyad']);$t[2]='<font color="red">Siz soyadınızı daxil etmediniz</font>';} else{$soyad=trim($_POST['soyad']);}
																			if(empty($_POST['log'])){unset($_POST['log']);$t[4]='<font color="red">Siz login daxil etmediniz</font>';}else{$log=trim($_POST['log']);}
																			if(empty($_POST['par'])){unset($_POST['par']);$t[3]='<font color="red">Siz şifrəni daxil etmediniz</font>';}else{$par=trim($_POST['par']);}
																				if(isset($ad) && isset($soyad) && isset($par) && isset($log))
																					{
																						if(isset($_POST['daxil']))
																							{
																								$a='foto/';
																								$p=1;
																								$d=strtolower(pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION));
																								$s=$a.time().'.'.$d;
																								$f=getimagesize($_FILES['foto']['tmp_name']);
																								if($f!==false){$p=1;} 
																								else{$p=0;}
																								if(file_exists($s))
																								{$p=0;echo'Busekil artıg mövcudur:<br>';}
																								if($_FILES['foto']['size']>500000)
																									{$p=0;echo'Şəklin həcmi çoxdur:<br>';}
																								if($d!="jpg" && $d!="jpeg" && $d!="png" && $d!="gif")
																									{$p=0;echo "bagıştıyın ancag JPG, JPEG, PNG & GIF faylara icaze verilir.";}
																								if($p==0){echo'şəkil əlavə etmək mümkün olmadı:<br>';}
																								else
																									{
																										if(move_uploaded_file($_FILES['foto']['tmp_name'],$s))
																											{echo'şəkil ugurla yukləndi:<br>';}
																										else{echo'şəkil yuklemedi:<br>';}
																									}
																							}
																					}
																				if(isset($ad) && isset($soyad) && isset($par) && isset($log) && $p==1)
																					{
																						
																						$reg=mysqli_query($i,"SELECT * FROM registrasiya WHERE  login='".$log."' OR parol='".$par."'");
																						echo "SELECT * FROM registrasiya WHERE  login='".$log."' OR parol='".$par."'";
																						if(mysqli_num_rows($reg)>0){echo'Bu parol veya login artıg bazada mövcudur.Xaiş olunu başqa parol veya login secəsiz:';}
																						else
																							{
																								$sec=mysqli_query($i,"INSERT INTO registrasiya(ad,soyad,login,parol,foto) VALUES('".$ad."','".$soyad."','".$log."','".$par."','".$s."')");
																								if($sec==true){echo'Geydiyat ugurla tamamlamışdır';echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0">';}
																								else{echo'Geydiyat baş tutmamışdı.Xaiş edirik yenidən cəht edəsiniz:';}
																							}
																					}
																		}
																	
																?>
																<form method="post" enctype="multipart/form-data">
																	<div class="col-md-10 col-lg-20">	
																		<div class="form-group" style="width:400px;">
																			<label for="password"><?=$t[4]?></label>
																			<input type="password" class="form-control" name='log' id="password" placeholder="LOGIN">
																		</div>
																	</div>
																	<div class="col-md-10 col-lg-20">	
																		<div class="form-group" style="width:400px;">
																			<label for="password"><?=$t[3]?></label>
																			<input type="password" class="form-control" name='par' id="password" placeholder="Password">
																		</div>
																	</div>
																	<div class="col-md-10 col-lg-20">
																		<div class="form-group" style="width:400px;">
																			<label for="password"><?=$t[1]?></label>
																			<input type="text" class="form-control" name='ad' placeholder="AD">
																		</div>
																	</div><br>
																	<div class="col-md-10 col-lg-20">	
																		<div class="form-group" style="width:400px;">
																			<label for="password"><?=$t[2]?></label>
																			<input type="text" class="form-control" name='soyad' placeholder="SOYAD">
																		</div>
																	</div><br>
																	<div class="form-group">
																									<p for="exampleFormControlFile1">ŞƏKİL</p>
																									<input type="file"  id="exampleFormControlFile1" name='foto'>
																								</div>
																								<div class="col-6 col-sm-4">
																									<label class="imagecheck mb-4">
																										<input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" name='foto'>
																										<figure class="imagecheck-figure">
																											<?php
																												if(!empty($_FILE['foto']))
																												{
																													echo '<img src="'.$_POST['foto'].'" alt="title" class="imagecheck-image">';
																												}
																											?>
																										</figure>
																									</label>
																								</div><br>
																	<div class="action">
																		<button class="btn btn-success" name='daxil'>GEYDIYATAN KEÇ</button>
																	</div><br>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								
									</td>
								</tr>
						<?php 
							}
						if(isset($_GET['dax']))
							{
								if(!isset($_SESSION['log']) && !isset($_SESSION['par']))
									{
										if(isset($_POST['daxil']))
											{
												if(empty($_POST['log']))
													{
														unset($_POST['log']);
													}
												else
													{
														$log=trim($_POST['log']);
													}
												if(empty($_POST['par']))
													{
														unset($_POST['par']);
													}
												else
													{
														$par=trim($_POST['par']);
													}
												$se=mysqli_query($i,"SELECT * FROM registrasiya WHERE login='".$log."' AND parol='".$par."'");
												$s=mysqli_fetch_array($se);
												if(mysqli_num_rows($se)>0)
													{
														$_SESSION['log']=$s['login'];
														$_SESSION['par']=$s['parol'];
														?><meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&products=0&index=1">
													<?php 
													}
												else
													{
														echo'Daxil etdiyiniz login ve ya parol yanlishdir<br>';
													}
											}
						?>
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<h4 class="card-title">Anbara xoş gəlmisix</h4>
													</div>
													<div class="card-body">
														<div class="table-responsive">	
															 <div align='center'>
																<form method='post'>
																	<div class="form-group" style="width:400px;">
																		<label for="password">LOGIN</label>
																		<input type="password" class="form-control" id="password" name='log' placeholder="Password">
																	</div>
																	<div class="form-group" style="width:400px;">
																		<label for="password">PAROL</label>
																		<input type="password" class="form-control" name='par' id="password" placeholder="Password">
																	</div>
																	<div class="action">
																		<button class="btn btn-success" name='daxil'>DAXIL OL</button>
																	</div><br>
																</form>
															 </div>
														</div>
													</div>
												</div>
											</div>
										</div>	 
						<?php
									}	
								else
									{	
										if(isset($_GET['products']))
											{
												if(isset($_GET['insert'])) 
													{ echo'<h1 style="font-size:50px;">Mal əlavəsi</h1>';
				?>
														<tr>
															<td  align='center'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Yeni mal</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">	
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['gonder']))
																							{
																								if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']);}
																								if(empty($_POST['qiymet'])){unset($_POST['qiymet']);} else{$qiymet=trim($_POST['qiymet']);}
																								if(empty($_POST['gir'])){unset($_POST['gir']);} else{$gir=trim($_POST['gir']);}
																								if(empty($_POST['anbar'])){unset($_POST['anbar']);}else{$anbar=trim($_POST['anbar']);}
																								if(empty($_POST['barkod'])){unset($_POST['barkod']);}else{$barkod=trim($_POST['barkod']);}
																								if(empty($_POST['qomruk'])){unset($_POST['qomruk']);}else{$qomruk=trim($_POST['qomruk']);}	
																								if(empty($_POST['perak'])){unset($_POST['perak']);}else{$perak=trim($_POST['perak']);}
																								if(empty($_POST['top'])){unset($_POST['top']);}else{$top=trim($_POST['top']);}	
																								if(empty($_POST['brend'])){unset($_POST['brend']);}else{$brend=trim($_POST['brend']);}
																								if(empty($_POST['əlavə'])){unset($_POST['əlavə']);}else{$əlavə=trim($_POST['əlavə']);}
																								if(isset($ad) && isset($qiymet) && isset($gir) && isset($brend) && isset($tarix) && isset($anbar) && isset($barkod) && isset($qomruk) && isset($perak) && isset($top))
																									{
																										if(isset($_POST['gonder']))
																											{
																												$a='foto/';
																												$s=$a.basename($_FILES['foto']['name']);
																												$p=1;
																												$d=strtolower(pathinfo($s,PATHINFO_EXTENSION));
																												$f=getimagesize($_FILES['foto']['tmp_name']);
																												if($f!==false){$p=1;}else{$p=0;}
																												if(file_exists($s)){$p=0;echo'Busekil artıq müvcudur:<br>';}
																												if($_FILES['foto']['size']>500000){$p=0;echo'Şəklin həcmi çoxdur:<br>';}
																												if($d!='jpg' && $d!='jpeg' && $d!='png' && $d!='gif'){$p=0;echo "Bagıştıyın ancag JPG, JPEG, PNG & GIF faylara icaze verilir.ÇbrŞ";}
																												if($p==0){echo'Şekli yuklemek mumkun olmadı:<br>';}
																												else{move_uploaded_file($_FILES['foto']['tmp_name'],$s);}
																											}
																									}
																									if(isset($ad) && isset($qiymet) && isset($gir) && $p==1 && isset($brend) && isset($tarix) && isset($anbar) && isset($barkod) && isset($qomruk)  && isset($perak) && isset($top))
																									{$sat=$qiymet+$qomruk;
																										$galg=$gir;
																										$w=mysqli_query($i,"INSERT INTO product(ad,Mdyer,brend,migdar,galg,tarix,foto,anbar,barkod,alis,gomruk,parak,top,elave)VALUES('".$ad."','".$sat."','".$brend."','".$gir."','".$galg."','".$tarix."','".$s."','".$anbar."','".$barkod."','".$qiymet."','".$qomruk."','".$perak."','".$top."','".$əlavə."')");
																										if($w==true)
																											{
																												echo'Məlumat ugurla yerleşdi';
																												$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																												echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&products=0&index=1&ay='.$tim[1].'&il='.$ti[0].'">';
																											}
																										else
																											{
																												echo'melumat yerlesdirmək mümkün olmadı';
																											}
																									}
																							}
																										?>
																							<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s");?>
																							<form  method='post' enctype="multipart/form-data">
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad' value='<?=$_POST['ad']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">MƏHSUL ADI</p>
																									</div>
																								</div><br>	
																								<div class="col-md-10 col-lg-20">
																									<div class="form-group form-floating-label">
																										<select class="form-control input-solid" id="selectFloatingLabel2" name='brend' value='<?=$_POST['brend']?>' required>
																											<?php
																												if(!empty($_POST['brend'])) 
																													{
																														$se=mysqli_query($i,"SELECT * FROM brend ORDER BY id='".$in['id']."' DESC");
																														$in=mysqli_fetch_array($se);
																														echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																													}
																												else
																													{
																														echo'<option></option><br>';
																													}
																												$se=mysqli_query($i,"SELECT * FROM brend ORDER BY id DESC");
																												$in=mysqli_fetch_array($se);
																												do
																													{
																														echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																													}
																												while($in=mysqli_fetch_array($se));
																											?>
																										</select>
																										<p for="selectFloatingLabel2" class="placeholder">Brend</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='gir' value='<?=$_POST['gir']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">MİQADR</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='barkod' value='<?=$_POST['barkod']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">BARKOD</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='qiymet' value='<?=$_POST['qiymet']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">AIŞI QİYMƏTİ</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='qomruk' value='<?=$_POST['qomruk']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">Gömrük xərcləri</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='perak' value='<?=$_POST['perak']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">Pərakəndə satış qiyməti</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='top' value='<?=$_POST['top']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">Topdan satış qiyməti</p>
																									</div>
																								</div><br>
																								<div class="form-group">
																									<p for="exampleFormControlFile1">ŞƏKİL</p>
																									<input type="file"  id="exampleFormControlFile1" name='foto'>
																								</div>
																								<div class="col-6 col-sm-4">
																									<label class="imagecheck mb-4">
																										<input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" name='foto'>
																										<figure class="imagecheck-figure">
																											<?php
																												if(!empty($_POST['foto']))
																												{
																													echo '<img src="'.$_POST['foto'].'" alt="title" class="imagecheck-image">';
																												}
																											?>
																										</figure>
																									</label>
																								</div><br>
																								<div class="col-md-10 col-lg-20">
																									<div class="form-group form-floating-label">
																										<select class="form-control input-solid" id="selectFloatingLabel2" name='anbar' value='<?=$_POST['anbar']?>' required>
																											<?php
																												if(!empty($_POST['anbar'])) 
																													{
																														$se=mysqli_query($i,"SELECT * FROM anbar ORDER BY id='".$in['id']."' DESC");
																														$in=mysqli_fetch_array($se);
																														echo'<option value="'.$in['id'].'">'.$in['anbar'].'</option><br>';
																													}
																												else
																													{
																														echo'<option></option><br>';
																													}
																												$se=mysqli_query($i,"SELECT * FROM anbar ORDER BY id DESC");
																												$in=mysqli_fetch_array($se);
																												do
																													{
																														echo'<option value="'.$in['id'].'">'.$in['anbar'].'</option><br>';
																													}
																												while($in=mysqli_fetch_array($se));
																											?>
																										</select>
																										<p for="selectFloatingLabel2" class="placeholder">Anbar</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-10">
																									<div class="form-group form-floating-label"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																										<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə'></textarea>
																									</div>
																								</div><br>
																								<div class="action">
																									<button class="btn btn-success" name='gonder'>DAXIL ET</button>
																								</div><br>	
																							</form>
																						</div>
																					</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
				<?php 
													} 
												if(isset($_GET['index'])) 
													{  
				?>										
														<h1 style="font-size:50px;">Mal cədvəlinə baxış</h1>
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4  class="title">
																					<form method="post">
																						<?php
																						
																						    if(empty($_POST['il'])){$il=date("Y");} else{$il=$_POST['il'];}
																							if(isset($_GET['ay']) && $_GET['ay']=='1')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=1&il='.$il.'">Yanvar</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=1&il='.$il.'">Yanvar</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='2')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=2&il='.$il.'">Fevral</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=2&il='.$il.'">Fevral</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='3')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=3&il='.$il.'">Mart</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=3&il='.$il.'">Mart</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='4')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=4&il='.$il.'">Aprel</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=4&il='.$il.'">Aprel</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='5')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=5&il='.$il.'">May</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=5&il='.$il.'">May</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='6')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=6&il='.$il.'">Iyun</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=6&il='.$il.'">Iyun</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='7')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=7&il='.$il.'">Iyul</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=7&il='.$il.'">Iyul</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='8')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=8&il='.$il.'">Avqust</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=8&il='.$il.'">Avqust</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='9')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='10')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='11')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=11&il='.$il.'">Noyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=11&il='.$il.'">Noyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='12')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&products=0&index=1&ay=12&il='.$il.'">Dekabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&products=0&index=1&ay=12&il='.$il.'">Dekabr</a>|';}
																						?>
																							<select name="il" onchange="this.form.submit()">
																								<?php
																									if(!empty($_POST['il'])){echo'<option value="'.$_POST['il'].'">'.$_POST['il'].'</option>';}
																									else{echo'<option value="'.date("Y").'">'.date("Y").'</option>';}
																									for($iler=2019;$iler<2030;$iler++){echo'<option value"'.$iler.'">'.$iler.'</option>';}
																										
																								?>
																							</select>
																					</form>	
																				</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Şəkil</th>
																								<th>Anbar</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Barkod</th>
																								<th>Alış/q</th>
																								<th>Gömrük</th>
																								<th>M/dəyəri</th>
																								<th>Giriş sayı</th>
																								<th>Çıxış sayı</th>
																								<th>Qalıg</th>
																								<th>P.satış</th>
																								<th>T.satış</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Şəkil</th>
																								<th>Anbar</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Barkod</th>
																								<th>Alış/q</th>
																								<th>Gömrük</th>
																								<th>M/dəyəri</th>
																								<th>Giriş sayı</th>
																								<th>Çıxış sayı</th>
																								<th>Qalıg</th>
																								<th>P.satış</th>
																								<th>T.satış</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php
																								if(isset($_POST['silm']))
																									{
																										$w=mysqli_query($i,"SELECT * FROM der WHERE cid='".$_POST['sil']."'");
																										if(mysqli_num_rows($w)>0)
																											{
																												echo'Bu məhsul üzrə aktiv ifariş mövcuddur.Lütfən əvvəlcə
																												<a href="datatables_clients.php?dax=0&sifaris=0&delete=1"> activ sifarişi ləgv edin</a>';
																											}
																										else
																											{	
																												$sec=mysqli_query($i,"DELETE FROM product  WHERE id='".$_POST['sil']."'");
																											}
																									}		
																								
																										//$sec=mysqli_query($i,"SELECT a.id AS pid,a.anbar,a.barkod,a.parak,a.top,a.galg,a.alis,a.gomruk,a.cixi,a.ad, a.foto, a.brend,a.Mdyer,a.migdar,a.tarix,b.id AS pi,b.ad AS brend_ad,c.id AS pis,c.anbar AS anbar_ad FROM product a, brend b,anbar c WHERE a.anbar=c.id AND a.brend=b.id ORDER BY a.id DESC");
																										
																										if(isset($_GET['ay']) && isset($_GET['il']))
																											{
																												$sec=mysqli_query($i,"SELECT a.id AS pid,a.anbar,a.barkod,a.parak,a.top,a.galg,a.alis,a.gomruk,a.cixi,a.ad, a.foto, a.brend,a.Mdyer,a.migdar,a.tarix,b.id AS pi,b.ad AS brend_ad,c.id AS pis,c.anbar AS anbar_ad FROM product a, brend b,anbar c WHERE a.anbar=c.id AND a.brend=b.id AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																												if(isset($_POST['serch']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.anbar,a.barkod,a.parak,a.top,a.galg,a.alis,a.gomruk,a.cixi,a.ad, a.foto, a.brend,a.Mdyer,a.migdar,a.tarix,b.id AS pi,b.ad AS brend_ad,c.id AS pis,c.anbar AS anbar_ad FROM product a, brend b,anbar c WHERE a.anbar=c.id AND a.brend=b.id AND a.barkod='".$_POST['seriya']."'  ORDER BY a.id DESC");
																													}	
																											}
																										$info=mysqli_fetch_array($sec);																								
																										if(mysqli_num_rows($sec)>0);
																											{
																												$r=0;
																												do
																													{//<form action="datatables_clients.php?dax=0&sifaris=0&insert=1" method="post">
																														$r++;
																														echo'
																																<tr>
																																	<td style="width:20px;">'.$r.'</td>
																																	<td style="width:15%;"><img style="width:100%;height:30px;border:1px solid #999;padding:2px;" src="'.$info['foto'].'"><br></td>
																																	<td>'. $info['anbar_ad'].'</td>
																																	<td>'. $info['brend_ad'].'</td>
																																	<td>'. $info['ad'].'</td>
																																	<td>'. $info['barkod'].'</td>
																																	<td>'. $info['alis'].'</td>
																																	<td>'.$info['gomruk']. '</td>
																																	<td>'. $info['Mdyer'].'</td>
																																	<td>'.$info['migdar']. '</td>
																																	<td>'.$info['cixi']. '</td>
																																	<td>'.$info['galg']. '</td>
																																	<td>'.$info['parak']. '</td>
																																	<td>'.$info['top']. '</td>
																																	<td>'.$info['tarix']. '</td>
																																	<td><a href="datatables_clients.php?dax&products=0&update=1&id='.$info['pid'].'"><button  class="btn-success" name="reda"><i class="icon-pencil"></i></button></a></td>
																																</tr>
																															';
																													}	
																												while($info=mysqli_fetch_array($sec));
																											}
																							?>	
																						</tbody>
																						<div>
																							<a href="datatables_clients.php?dax&products=0&insert=1"><button  class="btn btn-success" name='gondfe'>Yeni mal <i class="icon-plus"></i></button></a>
																							<a href="http://localhost/stock/excel/Examples/test1.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="icon-excel"></i></button></a>
																							<label>
																								<form method='post'>
																									<input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
																									<button class="btn btn-success" name='serch'>AXTAR</button>
																								</form>	
																							
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>						
						<?php
													} 
												if(isset($_GET['update'])) 
													{ 
														if(isset($_GET['id']))
															{
						?>										<h1 style="font-size:50px;">Məhsulun redaktəsi</h1>
																<tr>
																	<td>
																		<div class="row">
																			<div class="col-md-12">
																				<div class="card">
																					<div class="card-header">
																						<h4 class="card-title">Redaktə</h4>
																					</div>
																					<div class="card-body">
																						<div class="table-responsive">
																							<?php
																								$tarix=date("Y-m-d H:i:s");
																								if(isset($_POST['gonder']))
																									{
																										if(empty($_POST['ad'])){unset($_POST['ad']);}else{$ad=trim($_POST['ad']);}
																										if(empty($_POST['qiymet'])){unset($_POST['qiymet']);} else{$qiymet=trim($_POST['qiymet']);}
																										if(empty($_POST['gir'])){unset($_POST['gir']);} else{$gir=trim($_POST['gir']);}
																										if(empty($_POST['anbar'])){unset($_POST['anbar']);} else{$anbar=trim($_POST['anbar']);}
																										if(empty($_POST['barkod'])){unset($_POST['barkod']);}else{$barkod=trim($_POST['barkod']);}
																										if(empty($_POST['qomruk'])){unset($_POST['qomruk']);}else{$qomruk=trim($_POST['qomruk']);}	
																										if(empty($_POST['perak'])){unset($_POST['perak']);}else{$perak=trim($_POST['perak']);}
																										if(empty($_POST['top'])){unset($_POST['top']);} else{$top=trim($_POST['top']);}	
																										if(empty($_POST['brend'])){unset($_POST['brend']);} else{$brend=trim($_POST['brend']);}
																										if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																										if(isset($ad) && isset($qiymet) && isset($gir) && isset($brend) && isset($tarix) && isset($anbar) && isset($barkod) && isset($qomruk) && isset($perak) && isset($top))
																											{
																														if(!empty($_FILES['foto']['name']))
																															{
																																$a='foto/';
																																$s=$a.basename($_FILES['foto']['name']);														
																																$p=1;
																																$d=strtolower(pathinfo($s,PATHINFO_EXTENSION));															
																																$f=getimagesize($_FILES['foto']['tmp_name']);
																																if($f!==false)
																																	{
																																		$p=1;
																																	}
																																else
																																	{
																																		$p=0;
																																	}
																																/*if(file_exists($s))
																																	{
																																		$p=0;echo'Busekil artıq müvcudur:<br>';
																																	}*/
																																if($_FILES['foto']['size']>500000)
																																	{
																																		$p=0;echo'Şəklin həcmi çoxdur:<br>';
																																	}
																																if($d!='jpg' && $d!='jpeg' && $d!='png' && $d!='gif')
																																	{
																																		$p=0;echo "Bagıştıyın ancag JPG, JPEG, PNG & GIF faylara icaze verilir.<br>";
																																	}
																																if($p==0)
																																	{
																																		echo'Şekli yuklemek mumkun olmadı:<br>';
																																	}
																																else
																																	{
																																		if(move_uploaded_file($_FILES['foto']['tmp_name'],$s))
																																			{
																																				echo'şəkil ugurla yukləndi:<br>';
																																			}
																																		else 
																																			{
																																				echo'şəkil yuklemedi:<br>';
																																		}
																																	}
																															
																															}
																														if(empty($_FILES['foto']['name']))
																															{
																																$s=$_POST['foto1'];$p=1;
																															}
																													if(isset($ad) && isset($qiymet) && isset($gir) && isset($brend) && isset($tarix) && isset($anbar) && isset($barkod) && isset($qomruk) && isset($perak) && isset($top))
																											
																															{$sat=$qiymet+$qomruk;
																																
																																$ec=mysqli_query($i,"SELECT * FROM product WHERE id='".$_GET['id']."'");
																																$ifo=mysqli_fetch_array($ec);
																																if(mysqli_num_rows($ec)>0)
																																	{
																																		
																																		if($ifo['migdar']==$gir){$galg=$ifo['galg'];}
																																		elseif($ifo['migdar']>$gir){$galg=$ifo['galg']-($ifo['migdar']-$gir);}
																																		else{$galg=$ifo['galg']+($gir-$ifo['migdar']);}
																																	}
																																$w=mysqli_query($i,"UPDATE product SET galg='".$galg."',alis='".$qiymet."',gomruk='".$qomruk."',anbar='".$anbar."',barkod='".$barkod."',parak='".$perak."',top='".$top."',ad='".$ad."',elave='".$əlavə."',brend='".$brend."',migdar='".$gir."',tarix='".$tarix."',foto='".$s."'  WHERE id='".$_GET['id']."'");
																																if($w==true)
																																	{
																																		echo'Məlumat ugurla yenilendi';
																																		$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																																		echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&products=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																																	}
																																else
																																	{echo'Məlumat yeniləmək mümkün olmadı';}
																															}
																													}
																											}
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.anbar,a.barkod,a.parak,a.top,a.galg,a.alis,a.gomruk,a.cixi,a.ad, a.foto, a.brend,a.Mdyer,a.migdar,a.tarix,b.id AS pi,b.ad AS brend_ad,c.id AS pis,c.anbar AS anbar_ad FROM product a, brend b,anbar c WHERE a.anbar=c.id && a.brend=b.id && a.id='".$_GET['id']."' ORDER BY a.id DESC");
																								$ni=mysqli_fetch_array($sec);
																								
																								
																							?>
																								<div align='center'>
																									<?=$tarix=date("Y-m-d H:i:s");?>
																									<form  method='post' enctype="multipart/form-data">
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad'  value='<?echo $ni['ad'];?>'required >
																												<p for="inputFloatingLabel" class="placeholder">MƏHSUL ADI</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">
																											<div class="form-group form-floating-label">
																												<select class="form-control input-solid" id="selectFloatingLabel2" name='brend'  required>
																													<?php
																														if(!empty($_POST['brend'])) 
																															{
																																$se=mysqli_query($i,"SELECT * FROM brend ORDER BY id='".$in['id']."' DESC");
																																$in=mysqli_fetch_array($se);
																																echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																															}
																														else
																															{
																																echo'<option value="'.$ni['pi'].'">'.$ni['brend_ad'].'</option><br>';
																															}
																														$se=mysqli_query($i,"SELECT * FROM brend ORDER BY id DESC");
																														$in=mysqli_fetch_array($se);
																														do
																															{
																																echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																															}
																														while($in=mysqli_fetch_array($se));
																													?>
																												</select>
																												<p for="selectFloatingLabel2" class="placeholder">Brend</p>
																											</div>
																										</div>	
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='barkod' value='<?php echo $ni['barkod'];?>' required>
																												<p for="inputFloatingLabel" class="placeholder">BARKOD</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='qiymet'  value='<?=$ni['alis']?>' required>
																												<p for="inputFloatingLabel" class="placeholder">AIŞI QİYMƏTİ</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='qomruk' value='<?=$ni['gomruk']?>' required>
																												<p for="inputFloatingLabel" class="placeholder">Gömrük xərcləri</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='perak' value='<?=$ni['parak']?>' required>
																												<p for="inputFloatingLabel" class="placeholder">Pərakəndə satış qiyməti</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='top' value='<?=$ni['top']?>' required>
																												<p for="inputFloatingLabel" class="placeholder">Topdan satış qiyməti</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='gir' value='<?=$ni['migdar']?> 'required>
																												<p for="inputFloatingLabel" class="placeholder">MİQDAR</p>
																											</div>
																										</div><br>
																										<div class="form-group">
																											<p for="exampleFormControlFile1">ŞƏKİL</p>
																											<input type="hidden"  id="exampleFormControlFile1" name='foto1' value="<?=$ni['foto']?>">
																											<input type="file"  id="exampleFormControlFile1" name='foto'><br>
																										<img style="width:250px; height:150px;" src='<?=$ni['foto']?>'><br>
																										</div>
																										<div class="col-6 col-sm-4">
																											<label class="imagecheck mb-4">
																												<input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" name='foto'>
																												<figure class="imagecheck-figure">
																													<?php
																														if(!empty($_POST['foto']))
																														{
																															echo '<img src="'.$_POST['foto'].'" alt="title" class="imagecheck-image">';
																														}
																													?>
																												</figure>
																											</label>
																										</div><br>
																										<div class="col-md-10 col-lg-20">
																											<div class="form-group form-floating-label">
																												<select class="form-control input-solid" id="selectFloatingLabel2" name='anbar' required>
																													<?php
																														if(!empty($_POST['anbar'])) 
																															{
																																$se=mysqli_query($i,"SELECT * FROM anbar ORDER BY id='".$in['id']."' DESC");
																																$in=mysqli_fetch_array($se);
																																echo'<option value="'.$in['id'].'">'.$in['anbar'].'</option><br>';
																															}
																														else
																															{
																																echo'<option value="'.$ni['pis'].'">'.$ni['anbar_ad'].'<br>';
																															}
																														$se=mysqli_query($i,"SELECT * FROM anbar ORDER BY id DESC");
																														$in=mysqli_fetch_array($se);
																														do
																															{
																																echo'<option value="'.$in['id'].'">'.$in['anbar_ad'].'</option><br>';
																															}
																														while($in=mysqli_fetch_array($se));
																														
																														
																													?>
																												</select>
																												<p for="selectFloatingLabel2" class="placeholder">Anbar</p>
																											</div>
																										</div><br>
																										<div class="col-md-10 col-lg-60"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																											<div class="form-group form-floating-label">
																												<textarea style="width: id="inputFloatingLabel"  class="form-control input-solid" name='əlavə' value='<?=$ni['elave']?>'></textarea>
																											</div>
																										</div><br>
																										<div class="action">
																											<button class="btn btn-success" name='gonder'>YENILƏMƏK</button>
																										</div><br>
																									</form>	
																								</div>
																							</div>
																					</div>
																				</div>
																			</div>
																		</div>	
																	</td>
																</tr>
					<?php 
														
															}
													}
											}
											
										if(isset($_GET['sifaris']))
											{ 
												if(isset($_GET['insert']))
													{	
				?>										<div style="wight:100%;height:100px;"><form method='post'><label><h1 style="font-size:50px;">Məhsul satışı</h1></label>	
													
															<label><form method='post'><input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
															<button class="btn btn-success" name='serch'>AXTAR</button>
														</form>
														</div>

														<tr>
															<td valign='top' align='center'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Yeni çıxarış</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['sat']) or isset($_POST['seb']))
																							{
																								if(empty($_POST['brend'])){unset($_POST['brend']);} else{$brend=trim($_POST['brend']);}
																								if(empty($_POST['mehsul'])){unset($_POST['mehsul']);} else{$mehsul=trim($_POST['mehsul']);}
																								if(empty($_POST['migdar'])){unset($_POST['migdar']);}else{$migdar=trim($_POST['migdar']);}
																								if(empty($_POST['psatis'])){unset($_POST['psatis']);}else{$psatis=trim($_POST['psatis']);}
																								if(empty($_POST['tsatis'])){unset($_POST['tsatis']);} else{$tsatis=trim($_POST['tsatis']);}
																								if(empty($_POST['endirim'])){unset($_POST['endirim']);} else{$endirim=trim($_POST['endirim']);}
																								if(empty($_POST['qnov'])){unset($_POST['qnov']);} else{$qnov=trim($_POST['qnov']);}
																								if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																								if(isset($mehsul) && isset($migdar) && isset($tarix)  && isset($psatis) && isset($tsatis) && isset($qnov))
																									{
																										$product=explode("|",$mehsul);
																										$mehsul_id=$product[0];
																										$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$mehsul_id."' ORDER BY id DESC");
																										$in=mysqli_fetch_array($se);
																										if($endirim>$in['Mdyer']){echo'Endirim maya derərinən çox ola bilməz';}
																										else
																											{
																												$mehsul_migdar=$product[1];
																												if($migdar<=$mehsul_migdar)
																													{
																														if($_POST['qnov']=='TOPDAN')
																															{$mebleg=$tsatis*$migdar;}
																														else{$mebleg=$psatis*$migdar;}
																														if(!empty($_POST['endirim']))
																															{$mebleq=$mebleg-$endirim;}
																														else{$mebleq=$mebleg;}
																														$qazanc=$mebleq-$migdar*$in['Mdyer'];
																														if(isset($_POST['sat']))
																															{
																																$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$mehsul_id."'");
																																$in=mysqli_fetch_array($se);
																																$q=mysqli_query($i,"INSERT INTO satis(brend,mehsul,mig,tarix,mdeyer,psatis,tsatis,end,nov,mebleq,elave,qazanc) VALUES('".$in['brend']."','".$mehsul_id."','".$migdar."','".$tarix."','".$in['Mdyer']."','".$psatis."','".$tsatis."','".$endirim."','".$qnov."','".$mebleq."','".$əlavə."','".$qazanc."')");
																																if($q==true)
																																	{
																																		mysqli_query($i,"UPDATE product SET galg=galg-'".$migdar."' WHERE id='".$product[0]."'");
																																		mysqli_query($i,"UPDATE product SET cixi=cixi+'".$migdar."' WHERE id='".$product[0]."'");
																																		//echo"UPDATE product SET cixi='".$migdar."' WHERE id='".$product[0]."'";
																																		echo'Melumat ugurla yerləşdirildi';
																																		$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																																		echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&sifaris=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																																	}
																																else
																																	{
																																		echo'Melumat yerləşdirmək mümkün olmadı';
																																		//echo"INSERT INTO satis(brend,mehsul,mig,tarix,mdeyer,psatis,tsatis,end,nov,mebleq,elave) VALUES('".$brend."','".$mehsul."','".$migdar."','".$tarix."','".$mdeyer."','".$psatis."','".$tsatis."','".$endirim."','".$qnov."','".$mebleq."','".$əlavə."')";
																																	}
																															}
																														if(isset($_POST['seb']))
																															{
																																$q=mysqli_query($i,"INSERT INTO sebet(brend,mehsul,mig,tarix,mdeyer,psatis,tsatis,end,nov,mebleq,elave,qazanc) VALUES('".$in['brend']."','".$mehsul_id."','".$migdar."','".$tarix."','".$in['Mdyer']."','".$psatis."','".$tsatis."','".$endirim."','".$qnov."','".$mebleq."','".$əlavə."','".$qazanc."')");
																																if($q==true)
																																	{
																																		
																																		//echo"UPDATE product SET cixi='".$migdar."' WHERE id='".$product[0]."'";
																																		echo'Melumat ugurla yerləşdirildi';
																																		echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&seb=0&index=1">';
																																	}
																																else
																																	{
																																		echo'Melumat yerləşdirmək mümkün olmadı';
																																		//echo"INSERT INTO satis(brend,mehsul,mig,tarix,mdeyer,psatis,tsatis,end,nov,mebleq,elave) VALUES('".$brend."','".$mehsul."','".$migdar."','".$tarix."','".$mdeyer."','".$psatis."','".$tsatis."','".$endirim."','".$qnov."','".$mebleq."','".$əlavə."')";
																																	}
																															}
																														
																													}
																												else
																													{
																														echo'Bazada kifayət qədər məhsul yoxdur! Bazadaki məhsul miqdarı: '.$mehsul_migdar.' Tələb olunan miqdar: '.$migdar.'<br><br>';
																													}
																											}
																									}
																							}
																					?>
																					<div align="center">
																						<?=$tarix=date("Y-m-d H:i:s");?>
																						<form method="post">
																							<div class="col-md-10 col-lg-20">
																								<div class="form-group form-floating-label">
																									<select class="form-control input-solid" id="selectFloatingLabel2" name='mehsul' onchange="this.form.submit()" required>
																										<?php 
																											if(!empty($_POST['mehsul']))
																												{
																													$product=explode("|",$_POST['mehsul']);
																													$mehsul_id=$product[0];
																													$mehsul_migdar=$product[1];
																													$se=mysqli_query($i,"SELECT a.id AS pid,a.anbar AS product_anbar,a.galg,a.ad AS product_ad,a.brend AS product_brend,b.id AS bid,b.ad AS brend_ad ,c.id AS cid,c.anbar AS anbarar FROM product a,brend b,anbar c WHERE a.id='".$mehsul_id."' AND b.id=a.brend AND c.id=a.anbar");
																													$in=mysqli_fetch_array($se);
																													echo'<option value="'.$in['pid'].'|'.$in['galg'].'">'.$in['anbarar'].'-'.$in['product_ad'].'-'.$in['brend_ad'].'('.$in['galg'].')</option><br>';
																												}
																											elseif(isset($_POST['serch']))
																												{	$se=mysqli_query($i,"SELECT a.id AS pid,a.barkod,a.anbar AS product_anbar,a.galg,a.ad AS product_ad,a.brend AS product_brend,b.id AS bid,b.ad AS brend_ad ,c.id AS cid,c.anbar AS anbarar FROM product a,brend b,anbar c WHERE a.barkod='".$_POST['seriya']."' AND b.id=a.brend AND c.id=a.anbar");
																													$in=mysqli_fetch_array($se);
																													echo'<option value="'.$in['pid'].'|'.$in['galg'].'">'.$in['anbarar'].'-'.$in['product_ad'].'-'.$in['brend_ad'].'('.$in['galg'].')</option><br>';
																												}	
																											
																											else
																												{
																													echo'<option value=""></option><br>';
																												}
																												
																											$se=mysqli_query($i,"SELECT a.id AS pid,a.anbar AS product_anbar,a.galg,a.ad AS product_ad,a.brend AS product_brend,b.id AS bid,b.ad AS brend_ad ,c.id AS cid,c.anbar AS anbarar FROM product a,brend b,anbar c WHERE  b.id=a.brend AND c.id=a.anbar ORDER BY a.id DESC");
																											$in=mysqli_fetch_array($se);
																												
																											do
																												{
																													echo'<option value="'.$in['pid'].'|'.$in['galg'].'">'.$in['anbarar'].'-'.$in['product_ad'].'-'.$in['brend_ad'].'('.$in['galg'].')</option><br>';
																												}	
																											while($in=mysqli_fetch_array($se));
																											
																										?>
																									</select>
																									<p for="selectFloatingLabel2" class="placeholder">MƏHSUL</p>
																								</div>
																							</div>
																							<?php
																								if(empty($_POST['mehsul']) && !isset($_POST['serch']))
																									{
																							?>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='migdar' disabled="disabled" required>
																												<p for="inputFloatingLabel" class="placeholder">MİQDAR</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mdeyer' disabled="disabled" required>
																												<p for="inputFloatingLabel" class="placeholder">M/DEYER</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='psatis'  disabled="disabled" required>
																												<p for="inputFloatingLabel" class="placeholder">PARAKENDƏ SATIŞ GİYMƏTİ</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tsatis'  disabled="disabled"  required>
																												<p for="inputFloatingLabel" class="placeholder">TOPDAN SATIŞ GİYMƏTİ</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='endirim' disabled="disabled">
																												<p for="inputFloatingLabel" class="placeholder">ENDİRİM</p>
																											</div>
																										</div><br>
																										<div  class="form-check">
																											<label>Qiymət növü:</label><br>
																											<label class="form-radio-label">
																												<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" disabled="disabled">
																												<span class="form-radio-sign">TOPDAN</span>
																											</label><br>
																											<label class="form-radio-label ml-3">
																												<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ" disabled="disabled">
																												<span class="form-radio-sign">PARAKENDƏ</span>
																											</label>
																										</div>
																										<div class="col-md-10 col-lg-60">
																												<div class="form-group form-floating-label"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																													<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə' disabled="disabled"></textarea>
																												</div>
																											</div>
																							<?php
																									}
																								else
																									{ 
																										if(isset($_POST['mehsul']))
																										{
																											$product=explode("|",$_POST['mehsul']);
																											$mehsul_id=$product[0];
																											$mehsul_migdar=$product[1];
																											$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$mehsul_id."' ORDER BY id DESC");
																											$in=mysqli_fetch_array($se); 
																											
																										}
																										else{$se=mysqli_query($i,"SELECT * FROM product WHERE barkod='".$_POST['seriya']."'");
																										$in=mysqli_fetch_array($se);}
																										?>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='migdar' value='<?=$_POST['migdar']?>'  required>
																												<p for="inputFloatingLabel" class="placeholder">MİQDAR</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">M/DEYER</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="M/DEYER" name='mdeyer' value='<?=$in['Mdyer']?>' disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='psatis' value='<?=$in['parak']?>'  required>
																												<p for="inputFloatingLabel" class="placeholder">PARAKENDƏ SATIŞ GİYMƏTİ</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tsatis' value='<?=$in['top']?>'  required>
																												<p for="inputFloatingLabel" class="placeholder">TOPDAN SATIŞ GİYMƏTİ</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='endirim' value='<?=$_POST['endirim']?>' >
																												<p for="inputFloatingLabel" class="placeholder">ENDİRİM</p>
																											</div>
																										</div>
																										<div class="form-check">
																											<label>Qiymət növü:</label><br>
																											<label class="form-radio-label">
																												<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN">
																												<span class="form-radio-sign">TOPDAN</span>
																											</label><br>
																											<label class="form-radio-label ml-3">
																												<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ">
																												<span class="form-radio-sign">PARAKENDƏ</span>
																											</label>
																										</div>
																										<div class="col-md-10 col-lg-10">
																												<div class="form-group form-floating-label"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																													<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə'></textarea>
																												</div>
																											</div>
																							<?php 	}?>
																							
																							<div class="action">
																								<button class="btn btn-success" name='sat'>ƏLAVƏ ET</button>
																								<button class="btn btn-success" name='seb'>SƏBƏTƏ AT</button>
																							</div><br>
																						</form>	
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php
													} 
												if(isset($_GET['index'])) 
													{
					?>									<h1 style="font-size:50px;">Mal satışı cədvəlinə baxış</h1>
														<tr>
															<td valign="top" align="center">
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="title">
																					<form method="post">
																						<?php
																							if(empty($_POST['il'])){$il=date("Y");} else{$il=$_POST['il'];}
																							if(isset($_GET['ay']) && $_GET['ay']=='1')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=1&il='.$il.'">Yanvar</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=1&il='.$il.'">Yanvar</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='2')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=2&il='.$il.'">Fevral</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=2&il='.$il.'">Fevral</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='3')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=3&il='.$il.'">Mart</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=3&il='.$il.'">Mart</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='4')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=4&il='.$il.'">Aprel</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=4&il='.$il.'">Aprel</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='5')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=5&il='.$il.'">May</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=5&il='.$il.'">May</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='6')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=6&il='.$il.'">Iyun</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=6&il='.$il.'">Iyun</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='7')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=7&il='.$il.'">Iyul</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=7&il='.$il.'">Iyul</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='8')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=8&il='.$il.'">Avqust</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=8&il='.$il.'">Avqust</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='9')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='10')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='11')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=11&il='.$il.'">Noyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=11&il='.$il.'">Noyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='12')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=12&il='.$il.'">Dekabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&sifaris=0&index=1&ay=12&il='.$il.'">Dekabr</a>|';}?>
																							<select name="il" onchange="this.form.submit()">
																								<?php
																									if(!empty($_POST['il'])){echo'<option value="'.$_POST['il'].'">'.$_POST['il'].'</option>';}
																									else{echo'<option value="'.date("Y").'">'.date("Y").'</option>';}
																									for($iler=2019;$iler<2030;$iler++){echo'<option value"'.$iler.'">'.$iler.'</option>';}
																										
																								?>
																							</select>
																							<?php 
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																									
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c  WHERE b.id=a.brend and c.id=a.mehsul AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'  ORDER BY a.id DESC");	
																										$ec=mysqli_query($i,"SELECT * FROM xerc WHERE tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY id DESC");
																												
																										$ofni=mysqli_fetch_array($ce);
																										$fni=mysqli_fetch_array($ec);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleq'];
																														$xr=$xr+$fni['xer'];
																														$qz=$qz+$ofni['qazanc'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																												
																													$qz=$qz-$xr;
																											}
																										else{$meb=0;$xr=0;$qz=0;}
																									}
																								elseif(isset($_GET['p']))
																									{
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend AND c.id=a.mehsul ORDER BY a.id DESC");
																										$ec=mysqli_query($i,"SELECT * FROM xerc ORDER BY id DESC");
																										$ofni=mysqli_fetch_array($ce);
																										$fni=mysqli_fetch_array($ec);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleq'];
																														$xr=$xr+$fni['xer'];
																														$qz=$qz+$ofni['qazanc'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																												
																													$qz=$qz-$xr;
																											}
																									}
																								else{$meb=0;$xr=0;$qz=0;}
																										echo'<label style="padding-left:15px;"><h4>Məbləğ:'.$meb.'|     Xərc'.$xr.'|     Qazanc:'.$qz.'</h4></label>'; 
																										
																								?>
																						</form>	
																				</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Alış</th>
																								<th>Gömrük</th>
																								<th>Maya</th>
																								<th>Pər.sat</th>
																								<th>Top.sat</th>
																								<th>Say</th>
																								<th>End</th>
																								<th>Məbləg</th>
																								<th>Qazanc</th>
																								<th>Geri</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Alış</th>
																								<th>Gömrük</th>
																								<th>Maya</th>
																								<th>Pər.sat</th>
																								<th>Top.sat</th>
																								<th>Say</th>
																								<th>End</th>
																								<th>Məbləg</th>
																								<th>Qazanc</th>
																								<th>Geri</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php 
																								
																								if(isset($_POST['silm']))
																									{
																										$sec=mysqli_query($i,"DELETE FROM satis WHERE id='".$_POST['sil']."'");
																									}
																									
																								if(isset($_GET['p']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend AND c.id=a.mehsul ORDER BY a.id DESC");
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))	
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND  a.tarix like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND  a.tarix like '%".$_POST['start']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  AND  a.tarix like '%".$_POST['star']."%'  ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  AND  a.tarix like '%".$_POST['theend']."%'  ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");}	
																												
																											
																											}
																									}	
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");	
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))	
																													{		
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul  AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul  AND  a.tarix like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND   a.tarix like '%".$_POST['start']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND  c.barkod='".$_POST['seriya']."'  AND  a.tarix like '%".$_POST['star']."%'  ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  AND  a.tarix like '%".$_POST['theend']."%'  ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk,c.barkod FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND c.barkod='".$_POST['seriya']."'  AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");}	
																											}
																									}
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{ 
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['brend_ad'].'</td>
																															<td>'.$info['product_ad'].'</td>
																															<td>'.$info['alis'].'</td>
																															<td>'.$info['gomruk'].'</td>
																															<td>'.$info['mdeyer'].'</td>
																															<td>'.$info['psatis'].'</td>
																															<td>'.$info['tsatis'].'</td>
																															<td>'.$info['mig'].'</td>
																															<td>'.$info['end'].'</td>
																															<td>'.$info['mebleq'].'</td>
																															<td>'.$info['qazanc'].'</td>
																															<td>'.$info['qeri'].'</td>
																															<td>'.$info['tarix']. '</td>
																															<td><form method="post"><input type="hidden" name="sil" value="'.$info['pid'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																															<td><a href="datatables_clients.php?dax=0&sifaris=0&update=1&id='.$info['pid'].'"><button style="width:35px;tetx-align:center;" class="btn-success" name="reda"><i class="icon-pencil"></i></button></a></td>
																															';
																															$we=mysqli_query($i,"SELECT * FROM zamenet WHERE aid='".$info['pid']."'");
																															$re=mysqli_fetch_array($we);
																															if(mysqli_num_rows($we)>0){echo'<td><button style="width:35px;tetx-align:center;" class="btn-success" name="reda"><i class="fa fa-check" aria-hidden="true"></i></button></a></td>';}
																															else{echo'<td><a href="datatables_clients.php?dax=0&zamenet=0&insert=1&id='.$info['pid'].'"><button style="width:35px;tetx-align:center;" class="btn-success" name="reda"><i class="icon-plus"></i></button></a></td>';}
																															
																														echo'</tr>
																													';
																											}
																										while(	$info=mysqli_fetch_array($sec));
																									}		
																							?>	
																						</tbody>
																						<div>
																							
																								<a href="datatables_clients.php?dax&sifaris=0&insert=1"><button class="btn btn-success" name='sat'>Yeni satış <i class="icon-plus"></i></button></a>
																								<a href="http://localhost/stock/excel/Examples/sat.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="icon-excel"></i></button></a>
																								<label><form method='post'><input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
																								<label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="star"></label><label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="theend"></label>
																								<button class="btn btn-success" name='serch'>AXTAR</button></form>
																								<a href="datatables_clients.php?dax&sifaris=0&index=1&p=5"><button class="btn btn-success" name='hams'>Hamsı</button></a>
																							
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
				<?php 
													} 
												if(isset($_GET['update'])) 
													{ 
														if(isset($_GET['id'])) 
															{
				?>												<h1 style="font-size:50px;">Satışın redaktəsi</h1>
																<tr>
																	<td  align='center'>
																		<div class="row">
																			<div class="col-md-12">
																				<div class="card">
																					<div class="card-header">
																						<h4 class="card-title">Redaktəsi</h4>
																					</div>
																					<div class="card-body">
																						<div class="table-responsive">
																							<?php
																								$tarix=date("Y-m-d H:i:s");
																								if(isset($_POST['resaksiya_et']))
																									{
																										if(empty($_POST['brend'])){unset($_POST['brend']);}else{$brend=trim($_POST['brend']);}
																										if(empty($_POST['mehsul'])){unset($_POST['mehsul']);} else{$mehsul=trim($_POST['mehsul']);}
																										if(empty($_POST['artma'])){unset($_POST['artma']);} else{$artma=trim($_POST['artma']);}
																										if(empty($_POST['psatis'])){unset($_POST['psatis']);} else{$psatis=trim($_POST['psatis']);}
																										if(empty($_POST['tsatis'])){unset($_POST['tsatis']);} else{$tsatis=trim($_POST['tsatis']);}
																										if(empty($_POST['endirim'])){unset($_POST['endirim']);} else{$endirim=trim($_POST['endirim']);}
																										if(empty($_POST['qnov'])){unset($_POST['qnov']);}else{$qnov=trim($_POST['qnov']);}
																										if(empty($_POST['əlavə'])){unset($_POST['əlavə']);}else{$əlavə=trim($_POST['əlavə']);}
																										if(empty($_POST['qeri'])){unset($_POST['qeri']);} else{$qeri=trim($_POST['qeri']);}
																										if(isset($brend) && isset($mehsul)  && isset($tarix)  && isset($psatis) && isset($tsatis) && isset($qnov))
																											{
																												$product=explode("|",$mehsul);
																												$mehsul_id=$product[0];
																												$mehsul_migdar=$product[1];
																												$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul ORDER BY a.id DESC");	
																												$info=mysqli_fetch_array($sec);
																												if(isset($_POST['artma']) && isset($_POST['qeri']))
																													{echo'Eyni zamanda həm artırma, həm də qaytarma əməliyyatı etmək olmaz';}
																												else
																													{
																														if(isset($_POST['artma']))
																															{
																																if($artma>$mehsul_migdar){echo'Anbarda kifayət qədər məhsul yoxdur. Lütfən çıxarış miqdarını məhsul sayına uyğun edin.';}
																																else{$qa=$info['mig']+$artma;}
																															}
																														elseif(isset($_POST['qeri']))
																															{
																																if($qeri>$info['mig']){echo'Qaytardığınız məhsulun miqdarı cari miqdardan çox ola bilməz.';}
																																else{$qa=$info['mig']-$qeri;}
																															}
																														else{$qa=$info['mig'];}
																															if($qa>0 && $qa<=$mehsul_migdar)
																																{
																																	if($info['nov']!==$qnov) 
																																		{
																																			if($_POST['qnov']=='TOPDAN')
																																				{$mebleg=$tsatis*$qa;}
																																			else
																																				{$mebleg=$psatis*$qa;}
																																	
																																			$mebleq=$mebleg-$endirim;
																																			$qazanc=$mebleq-$qa*$info['mdeyer'];
																																		}
																																	else
																																		{
																																			if($qnov=='TOPDAN')
																																				{$mebleg=$tsatis*$qa;}
																																			else
																																				{$mebleg=$psatis*$qa;}
																																				$mebleq=$mebleg-$endirim;
																																			$qazanc=$mebleq-$qa*$info['mdeyer'];
																																		}  
																																
																													
																														if($artma<=$mehsul_migdar OR $qeri<=$info['mig']);
																														{
																															$ret=mysqli_query($i,"SELECT * FROM satis WHERE id='".$_GET['id']."'");
																															$oi=mysqli_fetch_array($ret);
																															$sec=mysqli_query($i,"SELECT a.id AS pid,a.qeri,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul ORDER BY a.id DESC");	
																															$info=mysqli_fetch_array($sec);
																															$q=mysqli_query($i,"UPDATE satis SET brend='".$brend."',mehsul='".$mehsul."',mig='".$qa."',qeri=qeri+'".$qeri."',tarix='".$tarix."',psatis='".$oi['psatis']."',tsatis='".$oi['tsatis']."',end='".$endirim."',nov='".$qnov."',mebleq='".$mebleq."',elave='".$əlavə."',qazanc='".$qazanc."' WHERE id='".$_GET['id']."'");
																															if($q==true)
																																{
																																	if(isset($_POST['qeri']))
																																		{
																																			mysqli_query($i,"UPDATE product SET galg=galg+'".$qeri."' WHERE id='".$product[0]."'");
																																			mysqli_query($i,"UPDATE product SET cixi=cixi-'".$qeri."' WHERE id='".$product[0]."'");
																																		}
																																	else
																																		{
																																			mysqli_query($i,"UPDATE product SET galg=galg-'".$artma."' WHERE id='".$product[0]."'");
																																			mysqli_query($i,"UPDATE product SET cixi=cixi+'".$artma."' WHERE id='".$product[0]."'");
																																		}
																																	//echo"UPDATE product SET cixi='".$migdar."' WHERE id='".$product[0]."'";
																																	echo'Melumat ugurla yeniləndi';
																																	$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																																	echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&sifaris=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">'; 
																																}
																															else
																																{
																																	echo'Məlumat yeniləmək mümkün olmadı:<br>';
																																}
																																}}
																													}
																														
																													
																											}
																										else
																											{
																												echo'error:<br>';
																											}
																									}
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.mehsul,a.qeri,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend AND c.id=a.mehsul AND a.id='".$_GET['id']."'");	
																								$info=mysqli_fetch_array($sec);
																							?>
																							<div align="center">
																								<?=$tarix=date("Y-m-d H:i:s");?>
																								<form method="post">
																									<div class="col-md-10 col-lg-20">
																										<div class="form-group form-floating-label">
																											<select class="form-control input-solid" id="selectFloatingLabel2" name='brend' onchange="this.form.submit()" required>
																												<?php
																													if(isset($_POST['sif']))
																														{
																															$se=mysqli_query($i,"SELECT a.id AS pid,a.ad,b.id AS pi, b.brend FROM brend a,product b WHERE b.id='".$_POST['sifa']."' AND a.id=b.brend ");
																															$in=mysqli_fetch_array($se);
																															echo'<option value="'.$in['pid'].'">'.$in['ad'].'</option><br>';
																														}
																													elseif(isset($_POST['sifra']))
																														{
																															$se=mysqli_query($i,"SELECT * FROM brend WHERE id='".$_POST['s']."'");
																															$in=mysqli_fetch_array($se);
																															echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																														}
																													else
																														{
																															if(!empty($_POST['brend']))
																																{
																																	$se=mysqli_query($i,"SELECT * FROM brend WHERE id='".$_POST['brend']."' ");
																																	$in=mysqli_fetch_array($se);
																																	echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																																}
																															else
																																{
																																	echo'<option value="'.$info['bid'].'">'.$info['brend_ad'].'</option><br>';
																																}
																															$se=mysqli_query($i,"SELECT * FROM brend  ORDER BY id DESC");
																															$in=mysqli_fetch_array($se);
																															do
																																{
																																	echo'<option value="'.$in['id'].'">'.$in['ad'].'</option><br>';
																																}
																															while($in=mysqli_fetch_array($se));
																														}	
																												?>
																											</select>
																											<p for="selectFloatingLabel2" class="placeholder">BREND</p>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20">
																										<div class="form-group form-floating-label">
																											<select class="form-control input-solid" id="selectFloatingLabel2" name='mehsul' onchange="this.form.submit()." required>
																												<?php 
																													if(isset($_POST['sifra']))
																														{$se=mysqli_query($i,"SELECT * FROM product WHERE brend='".$_POST['s']."'");
																															$in=mysqli_fetch_array($se);
																															echo'<option value="'.$in['id'].'|'.$in['galg'].'">'.$in['ad'].'('.$in['galg'].')</option><br>';
																														}
																														elseif(isset($_POST['sif']))
																														{
																															$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$_POST['sifa']."'");
																															$in=mysqli_fetch_array($se);
																															echo'<option value="'.$in['id'].'|'.$in['galg'].'">'.$in['ad'].'('.$in['galg'].')</option><br>';
																														}
																													else
																														{
																															if(!empty($_POST['mehsul']))
																																{
																																	$product=explode("|",$_POST['mehsul']);
																																	$mehsul_id=$product[0];
																																	$mehsul_migdar=$product[1];
																																	$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$product[0]."' ORDER BY id DESC");
																																	$in=mysqli_fetch_array($se);
																																	echo'<option value="'.$in['id'].'|'.$in['galg'].'">'.$in['ad'].'('.$in['galg'].')</option><br>';
																																}
																															else
																																{
																																	$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$info['mehsul']."'");
																																	$in=mysqli_fetch_array($se);
																																	echo'<option value="'.$in['id'].'|'.$in['galg'].'">'.$in['ad'].'('.$in['galg'].')</option><br>';
																																}	
																															if(!empty($_POST['brend']))
																																{
																																	$se=mysqli_query($i,"SELECT * FROM product WHERE brend='".$_POST['brend']."' ORDER BY id DESC");
																																	$in=mysqli_fetch_array($se);
																																	do
																																		{
																																			echo'<option value="'.$in['id'].'|'.$in['galg'].'">'.$in['ad'].'('.$in['galg'].')</option><br>';
																																		}	
																																	while($in=mysqli_fetch_array($se));
																																}
																														}
																												?>
																											</select>
																											<p for="selectFloatingLabel2" class="placeholder">MƏHSUL</p>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																										<div class="form-group" style="height:70px;padding-top:0.01px;">
																											<h6><b style="font-size:12px;float:left;height: 14px;">MİQDAR</b>
																												<input type="text" class="form-control" id="disableinput" placeholder="MİQDAR" name='qa' value='<?=$info['mig']?>' disabled="">
																											</h6>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20">	
																										<div class="form-group form-floating-label">
																											<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='qeri'>
																											<p for="inputFloatingLabel" class="placeholder">Qaytarma</p>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20">	
																										<div class="form-group form-floating-label">
																											<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='artma' >
																											<p for="inputFloatingLabel" class="placeholder">ARTMA</p>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20">	
																										<div class="form-group form-floating-label">
																											<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='psatis' value='<?=$info['psatis']?>'  required>
																											<p for="inputFloatingLabel" class="placeholder">PARAKENDƏ SATIŞ GİYMƏTİ</p>
																										</div>
																									</div>
																									<div class="col-md-10 col-lg-20">	
																										<div class="form-group form-floating-label">
																											<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tsatis' value='<?=$info['tsatis']?>'  required>
																											<p for="inputFloatingLabel" class="placeholder">TOPDAN SATIŞ GİYMƏTİ</p>
																										</div>
																									</div><br>
																									<div class="col-md-10 col-lg-20">	
																										<div class="form-group form-floating-label">
																											<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='endirim' value='<?=$info['end']?>'>
																											<p for="inputFloatingLabel" class="placeholder">ENDİRİM</p>
																										</div>
																									</div>
																									<?php if($info['nov']=='TOPDAN')
																										{?>
																											<div class="form-check">
																												<label>Gender</label><br>
																												<label class="form-radio-label">
																													<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" checked="">
																													<span class="form-radio-sign">TOPDAN</span>
																												</label><br>
																												<label class="form-radio-label ml-3">
																													<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ" >
																													<span class="form-radio-sign">PARAKENDƏ</span>
																												</label>
																											</div>
																								<?php 	}
																									else
																										{
																											?>
																											<div class="form-check">
																												<label>Qiymət növü:</label><br>
																												<label class="form-radio-label">
																													<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN">
																													<span class="form-radio-sign">TOPDAN</span>
																												</label><br>
																												<label class="form-radio-label ml-3">
																													<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ" checked="">
																													<span class="form-radio-sign">PARAKENDƏ</span>
																												</label>
																											</div>
																								<?php	} ?>	
																									<div class="col-md-10 col-lg-10">
																											<div class="form-group form-floating-label"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																												<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə' value='<?=$info['elave']?>' ><?=$info['elave']?></textarea>
																											</div>
																										</div><br>
																									<div class="action">
																										<button class="btn btn-success" name='resaksiya_et'>YENILƏ</button>
																									</div>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

					<?php 
															} 
													} 
											}
										if(isset($_GET['zamenet']))
											{
																					
												if(isset($_GET['insert']))
													{
				?>
														<tr>
															<td valign='top' align='center'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Zəmanətin verilməsi</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i");
																						if(isset($_POST['sifaris_et']))
																							{
																								if(empty($_POST['ad']))
																									{
																										unset($_POST['ad']);
																									}
																								else
																									{
																										$ad=trim($_POST['ad']);
																									}
																								if(empty($_POST['soyad']))
																									{
																										unset($_POST['soyad']);
																									}
																								else
																									{
																										$soyad=trim($_POST['soyad']);
																									}
																								if(empty($_POST['tel']))
																									{
																										unset($_POST['tel']);
																									}
																								else
																									{
																										$tel=trim($_POST['tel']);
																									}
																								if(empty($_POST['ves']))
																									{
																										unset($_POST['ves']);
																									}
																								else
																									{
																										$ves=trim($_POST['ves']);
																									}
																								if(empty($_POST['mudet']))
																									{
																										unset($_POST['mudet']);
																									}
																								else
																									{
																										$mudet=trim($_POST['mudet']);
																									}
																								if(empty($_POST['ko']))
																									{
																										unset($_POST['ko']);
																									}
																								else
																									{
																										$ko=trim($_POST['ko']);
																									}
																								if(empty($_POST['nov']))
																									{
																										unset($_POST['nov']);
																									}
																								else
																									{
																										$nov=trim($_POST['nov']);
																									}
																								time; 
																								if( isset($mudet) && isset($ko) && isset($ad) && isset($soyad) && isset($tel)  && isset($ves))
																									{
																											if($_POST['nov']=='qun')
																												{$date = date('Y-m-d H:i:s', strtotime($mudet .'day'));}
																											if($_POST['nov']=='ay')
																												{$date = date('Y-m-d H:i:s', strtotime($mudet .'months'));}
																											else{$date = date('Y-m-d H:i:s', strtotime($mudet .'year'));}
																											$vax=time().'<br>';;
																											$to=strtotime($date);
																											$ferq=$to-$vax;
																											$deq=ceil($ferq/60);
																											$saat=ceil($deq/60);
																											$gn=ceil($saat/24);
																											$sec=mysqli_query($i,"SELECT a.id AS pid,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.barkod,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND a.id='".$_GET['id']."'");	
																									$info=mysqli_fetch_array($sec);
																										$q=mysqli_query($i,"INSERT INTO zamenet(bid,cid,mudet,kod,ad,soyad,tel,ves,barkod,nov,vtarix,qaliq,aid) VALUES('".$info['brend']."','".$info['mehsul']."','".$mudet."','".$ko."','".$ad."','".$soyad."','".$tel."','".$ves."','".$info['barkod']."','".$nov."','".$tarix."','".$gn."','".$_GET['id']."')");
																											if($q==true)
																											{
																												echo'Mlumat ugurla yerləşdirildi';
																												echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&zamenet=0&index=1">';
																											}
																										else
																											{
																												echo"Mlumatı yerləşdirmək mümkün olmadı";
																											}
																									}
																							}
																					?>
																					<div align="center">
																						<?=$tarix=date("Y-m-d H:i");?>
																						<form method="post">
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad' required>
																									<p for="inputFloatingLabel" class="placeholder">AD</p>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='soyad' required>
																									<p for="inputFloatingLabel" class="placeholder">SOYAD</p>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ves' required>
																									<p for="inputFloatingLabel" class="placeholder">Ş-VESİQƏSİ</p>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tel' required>
																									<p for="inputFloatingLabel" class="placeholder">TELEFON NOMRƏSİ</p>
																								</div>
																							</div>
																							<?php
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.barkod,c.alis,c.gomruk FROM satis a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul AND a.id='".$_GET['id']."'");	
																								$info=mysqli_fetch_array($sec);
																							?>
																							<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																								<div class="form-group" style="height:70px;padding-top:0.01px;">
																									<h6><b style="font-size:12px;float:left;height: 14px;">BREND</b>
																										<input type="text" class="form-control" id="disableinput" placeholder="BREND" name='brend' value="<?=$info['brend_ad']?>" disabled="">
																									</h6>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																								<div class="form-group" style="height:70px;padding-top:0.01px;">
																									<h6><b style="font-size:12px;float:left;height: 14px;">MƏHSUL</b>
																										<input type="text" class="form-control" id="disableinput" placeholder="MƏHSUL" name='brend' value="<?=$info['brend_ad']?>" disabled="">
																									</h6>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																								<div class="form-group" style="height:70px;padding-top:0.01px;">
																									<h6><b style="font-size:12px;float:left;height: 14px;">BARKOD</b>
																										<input type="text" class="form-control" id="disableinput" placeholder="BARKOD" name='barkod' value='<?=$info['barkod']?>' disabled="">
																									</h6>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ko'required>
																									<p for="inputFloatingLabel" class="placeholder">ZAMANƏT KODU</p>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mudet'  required>
																									<p for="inputFloatingLabel" class="placeholder">MÜDƏT</p>
																									<div class="form-check">
																										<label></label>
																										<label class="form-radio-label">
																											<input class="form-radio-input" type="radio" name="nov" value="qun">
																											<span class="form-radio-sign">GUN</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="ay">
																											<span class="form-radio-sign">AY</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="il">
																											<span class="form-radio-sign">IL</span>
																										</label>
																									</div>
																								</div>
																							</div>
																							<div class="action">
																								<button class="btn btn-success" name='sifaris_et'>DAXİL ET</button>
																							</div><br>
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php
													} 
												if(isset($_GET['index'])) 
													{
					?>									<h1 style="font-size:50px;">Zəmanət cədvəlinə baxış</h1>
														<tr>
															<td valign="top" align="center">
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Zəmanət cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Zamanət kodu</th>
																								<th>Ad</th>
																								<th>Soyad</th>
																								<th>Ş.vəsiqəsi</th>
																								<th>tel</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Barkod</th>
																								<th>Müdət</th>
																								<th>Qalıq</th>
																								<th>Verilmə tarixi</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Zamanət kodu</th>
																								<th>Ad</th>
																								<th>Soyad</th>
																								<th>Ş.vəsiqəsi</th>
																								<th>tel</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Barkod</th>
																								<th>Müdət</th>
																								<th>Qalıq</th>
																								<th>Verilmə tarixi</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																								<th>Əmir</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php 
																								if(isset($_POST['silm']))
																									{
																										$sec=mysqli_query($i,"DELETE FROM zamenet WHERE id='".$_POST['sil']."'");
																									}
																											
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.bid,a.cid,a.mudet,a.kod,a.ad,a.soyad,a.tel,a.ves,a.nov,a.barkod,a.qaliq,a.vtarix,b.id AS bi,b.ad AS brend_ad,d.id AS did,d.ad AS product_ad  FROM zamenet a,brend b, product d WHERE b.id=a.bid AND d.id=a.cid ORDER BY a.id DESC");
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{ 
																										$vrem=time();
																										$r=0;
																										do
																											{
																												
																												mysqli_query($i,"UPDATE zamenet SET qaliq=qaliq-ROUND(".$vrem.") WHERE id='".$info['pid']."'");
																													echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['kod'].'</td>
																															<td>'.$info['ad'].'</td>
																															<td>'.$info['soyad']. '</td>
																															<td>'.$info['ves'].'</td>
																															<td>'.$info['tel']. '</td>
																															<td>'.$info['brend_ad'].'</td>
																															<td>'.$info['product_ad'].'</td>
																															<td>'.$info['barkod'].'</td>
																															<td>'.$info['mudet'].''.$info['nov'].'</td>
																															';if($info['qaliq']==0){echo'<td style="background-color:#FF0000; color:#FFFFFF;">'.$info['qaliq'].'qun</td>';}
																															else{echo'<td style="background-color:#62BB0E; color:#FFFFFF;">'.$info['qaliq'].'qun</td>';}
																															echo'
																															<td>'.$info['vtarix'].'</td>
																															<td><form method="post"><input type="hidden" name="sil" value="'.$info['pid'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																															<td><a href="datatables_clients.php?dax=0&zamenet=0&update=1&id='.$info['pid'].'"><button  class="btn-success" name="reda"><i class="icon-pencil"></i></a></td>
																															<td><a href="http://localhost/stock/tcpdf/examples/zemanet.php?id='.$info['pid'].'"><button  class="btn-success" name="reda"><i class="fa fa-print" aria-hidden="true"></i></a></td>
																														</tr>
																													';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}		
																							?>	
																						</tbody>
																						<div>
																							<a href="http://localhost/stock/excel/Examples/zam.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																						</div><br>
																					</table>	
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
				<?php 
													} 
												if(isset($_GET['update'])) 
													{ 
														if(isset($_GET['id'])) 
															{
				?>												<h1 style="font-size:50px;">Zəmanətin düzəlişi</h1>
																<tr>
																	<td  align='center'>
																		<div class="row">
																			<div class="col-md-12">
																				<div class="card">
																					<div class="card-header">
																						<h4 class="card-title">Redaktə</h4>
																					</div>
																					<div class="card-body">
																						<div class="table-responsive">
																							<?php
																								$tarix=date("Y-m-d H:i:s");
																								if(isset($_POST['resaksiya_et']))
																									{
																										if(empty($_POST['ad']))
																											{
																												unset($_POST['ad']);
																											}
																										else
																											{
																												$ad=trim($_POST['ad']);
																											}
																										if(empty($_POST['soyad']))
																											{
																												unset($_POST['soyad']);
																											}
																										else
																											{
																												$soyad=trim($_POST['soyad']);
																											}
																										if(empty($_POST['tel']))
																											{
																												unset($_POST['tel']);
																											}
																										else
																											{
																												$tel=trim($_POST['tel']);
																											}
																										if(empty($_POST['ves']))
																											{
																												unset($_POST['ves']);
																											}
																										else
																											{
																												$ves=trim($_POST['ves']);
																											}
																										if(empty($_POST['brend']))
																											{
																												unset($_POST['brend']);
																											}
																										else
																											{
																												$bid=trim($_POST['brend']);
																											}
																										if(empty($_POST['mehsul']))
																											{
																												unset($_POST['mehsul']);
																											}
																										else
																											{
																												$cid=trim($_POST['mehsul']);
																											}
																										if(empty($_POST['mudet']))
																											{
																												unset($_POST['mudet']);
																											}
																										else
																											{
																												$mudet=trim($_POST['mudet']);
																											}
																										if(empty($_POST['ko']))
																											{
																												unset($_POST['ko']);
																											}
																										else
																											{
																												$ko=trim($_POST['ko']);
																											}
																										if(empty($_POST['nov']))
																											{
																												unset($_POST['nov']);
																											}
																										else
																											{
																												$nov=trim($_POST['nov']);
																											}
																										if(empty($_POST['barkod']))
																											{
																												unset($_POST['barkod']);
																											}
																										else
																											{
																												$barkod=trim($_POST['barkod']);
																											}
																										time;
																										if(isset($bid) && isset($cid) && isset($mudet) && isset($ko) && isset($ad) && isset($soyad) && isset($tel)  && isset($ves) && isset($barkod))
																											{
																													if($_POST['nov']=='qun')
																														{$date = date('Y-m-d', strtotime($mudet.'day'));
																															//echo'dssf';
																														}
																													elseif($_POST['nov']=='ay')
																														{$date = date('Y-m-d', strtotime($mudet.'month'));}
																													else{$date = date('Y-m-d', strtotime($mudet .'year'));}
																													echo $date;
																													$vax=time();
																													$to=strtotime($date);
																													 $ferq=$to-$vax;
																													$deq=ceil($ferq/60);
																													$saat=ceil($deq/60);
																													$gn=ceil($saat/24);
																													
																													$sec=mysqli_query($i,"SELECT a.id AS pid,a.bid,a.cid,a.mudet,a.kod,a.barkod,a.nov,a.qaliq,a.ad,a.soyad,a.ves,a.tel,c.id AS nid,c.ad AS brend_ad,d.id AS ni,d.ad AS product_ad FROM zamenet a,  brend c, product d WHERE a.bid=c.id AND a.cid=d.id AND  a.id='".$_GET['id']."'");
																													$info=mysqli_fetch_array($sec);
																													$q=mysqli_query($i,"UPDATE  zamenet SET kod='".$ko."',bid='".$info['bid']."',cid='".$info['cid']."',mudet='".$mudet."',ad='".$ad."',soyad='".$soyad."',tel='".$tel."',ves='".$ves."',barkod='".$info['barkod']."',nov='".$nov."',qaliq='".$gn."' WHERE id='".$_GET['id']."'");
																													if($q==true)
																														{
																															echo'Məlumat ugurla yeniləndi';
																															echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&zamenet=0&index=1">';
																														}
																													else{echo'Məlumatı yeniləmək mümkün olmadı';}	
																											}
																									}
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.bid,a.cid,a.mudet,a.kod,a.barkod,a.nov,a.qaliq,a.ad,a.soyad,a.ves,a.tel,c.id AS nid,c.ad AS brend_ad,d.id AS ni,d.ad AS product_ad FROM zamenet a,  brend c, product d WHERE a.bid=c.id AND a.cid=d.id AND  a.id='".$_GET['id']."'");
																								$info=mysqli_fetch_array($sec);
																							?>
																							<div align="center">
																								<?=$tarix=date("Y-m-d H:i:s");?>
																								<form  method="post">
																									<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad' value='<?=$info['ad']?>' checked >
																										<p for="inputFloatingLabel" class="placeholder">AD</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='soyad' value='<?=$info['soyad']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">SOYAD</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ves'value='<?=$info['ves']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">Ş-VESİQƏSİ</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tel' value='<?=$info['tel']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">TELEFON NOMRƏSİ</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='brend' value="<?=$info['brend_ad']?>" required>
																										<p for="inputFloatingLabel" class="placeholder">BREND</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel"  class="form-control input-solid" name='mehsul' value="<?=$info['product_ad']?>" required>
																										<p for="selectFloatingLabel2" class="placeholder">MƏHSUL</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='barkod' value='<?=$info['barkod']?>' required>
																										<p for="inputFloatingLabel" class="placeholder">BARKOD</p>
																									</div>
																								</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ko' value='<?=$info['kod']?>' required>
																									<p for="inputFloatingLabel" class="placeholder">ZAMANƏT KODU</p>
																								</div>
																							</div>
																							<div class="col-md-10 col-lg-20">	
																								<div class="form-group form-floating-label">
																									<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mudet' value='<?=$info['mudet']?>'  required>
																									<p for="inputFloatingLabel" class="placeholder">MÜDƏT</p>
																								</div>
																							</div>
																									<?php if($info['nov']=='qun'){
																										?>
																									<div class="form-check">
																										<label></label>
																										<label class="form-radio-label">
																											<input class="form-radio-input" type="radio" name="nov" value="qun" checked>
																											<span class="form-radio-sign">GUN</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="ay" >
																											<span class="form-radio-sign">AY</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="il" >
																											<span class="form-radio-sign">IL</span>
																										</label>
																									</div>
																									<?php }
																									elseif($info['nov']=='ay'){
																									?>
																									<div class="form-check">
																										<label></label>
																										<label class="form-radio-label">
																											<input class="form-radio-input" type="radio" name="nov" value="qun" >
																											<span class="form-radio-sign">GUN</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="ay" checked>
																											<span class="form-radio-sign">AY</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="il">
																											<span class="form-radio-sign">IL</span>
																										</label>
																									</div>
																									<?php }
																									else{
																										?>
																										<div class="form-check">
																										<label></label>
																										<label class="form-radio-label">
																											<input class="form-radio-input" type="radio" name="nov" value="qun" >
																											<span class="form-radio-sign">GUN</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="ay" >
																											<span class="form-radio-sign">AY</span>
																										</label>
																										<label class="form-radio-label ml-3">
																											<input class="form-radio-input" type="radio" name="nov" value="il" checked>
																											<span class="form-radio-sign">IL</span>
																										</label>
																									</div><?php }?>
																									<div class="action">
																										<button class="btn btn-success" name='resaksiya_et'>YENILƏMƏK</button>
																									</div><br>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>	
																	</td>
																</tr>

					<?php 
															} 
													} 
											}
										if(isset($_GET['anbar']))
											{
												if(isset($_GET['insert']))
													{
						?>								<h1 style="font-size:50px;">Anbar əlavəsi</h1>
														<tr>
															<td  align='center'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Yeni anbar</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['gonder']))
																							{
																								if(empty($_POST['anbar'])){unset($_POST['anbar']);}  else{$anbar=trim($_POST['anbar']);}
																								if(empty($_POST['unvan'])){unset($_POST['unvan']);} else{$unvan=trim($_POST['unvan']);}
																								if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel=trim($_POST['tel']);}
																								if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																								if(isset($anbar) && isset($unvan) && isset($tel)   && isset($tarix))
																									{
																										$q=mysqli_query($i,"INSERT INTO anbar(anbar,unvan,tel,tarix,elave) VALUES('".$anbar."','".$unvan."','".$tel."','".$tarix."','".$əlavə."')");
																										if($q==true)
																											{
																												echo"INSERT INTO anbar(anbar,unvan,tel,tarix,elave) VALUES('".$anbar."','".$unvan."','".$tel."','".$tarix."','".$əlavə."')";
																												echo'Mlumat ugurla yerləşdi';
																										        echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&anbar=0&index=1">';
																											}
																										else{echo'Məlumaı yerləşdirmək mümkün olmadı';}
																									}
																									
																							}
																						?>
																						<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s")?>
																							<form  method='post'>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='anbar' required>
																										<p for="inputFloatingLabel" class="placeholder">ANBAR</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='unvan' required>
																										<p for="inputFloatingLabel" class="placeholder">ÜNVAN</p><br>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tel' required>
																										<p for="inputFloatingLabel" class="placeholder">TELEFON NOMRƏSİ</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-10"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																									<div class="form-group form-floating-label">
																										<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə'></textarea>
																									</div>
																								</div><br>
																								<div class="action">
																									<button class="btn btn-success" name='gonder'>DAXIL ET</button>
																								</div><br>
																							</form>
																						</div>
																					</div>
																			</div>
																		</div>
																	</div>
																</div>	
															</td>
														</tr>
					<?php
													} 
												if(isset($_GET['index']))
													{ 
					?>									<h1 style="font-size:50px;">Anbar cədvəlinə baxış</h1>
														<tr>
															<td>	
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Anbar cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Ünvan</th>
																								<th>Telefon nömrəsi</th>
																								<th>Əlavə geydlər</th>
																								<th>Tarix</th>
																								<th>Redaktə</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Ünvan</th>
																								<th>Telefon nömrəsi</th>
																								<th>Əlavə geydlər</th>
																								<th>Tarix</th>
																								<th>Redaktə</th>
																							</tr>
																						</tfoot>
																						<tbody >
																						<?php	
																							if(isset($_POST['silm']))
																								{
																									mysqli_query($i,"DELETE  FROM anbar WHERE id='".$_POST['sil']."'");
																								}
																								$sec=mysqli_query($i,"SELECT * FROM anbar ORDER BY id DESC");
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td style="width:20px;">'.$r.'</td>
																															<td>'. $info['anbar'].'</td>
																															<td>'.$info['unvan']. '</td>
																															<td>'.$info['tel']. '</td>
																															<td>'.$info['elave']. '</td>
																															<td>'.$info['tarix']. '</td>
																															<td><a href="datatables_clients.php?dax=0&anbar=0&update=1&id='.$info['id'].'"><button class="btn-success" name="reda"><i class="icon-pencil"></i></button></a></td>
																														</tr>
																													';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>
																						</tbody>
																						<div class="action">
																							<a href="datatables_clients.php?dax=0&anbar=0&insert=1"><button class="btn btn-success" name='gonder'>YENI ANBAR  <i class="icon-plus"></i></button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php 
													}
												
												if(isset($_GET['update']))
													{
														if(isset($_GET['id']))
														{	
					?>										<h1 style="font-size:50px;">Anbarın redaktəsi</h1>
															<tr>
																<td>
																	<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Redakte</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['yenilə']))
																							{
																								if(empty($_POST['anbar'])){unset($_POST['anbar']);} else{$anbar=trim($_POST['anbar']);}
																								if(empty($_POST['unvan'])){unset($_POST['unvan']);}else{$unvan=trim($_POST['unvan']);}
																								if(empty($_POST['tel'])){unset($_POST['tel']);}else{$tel=trim($_POST['tel']);}
																								if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																								if(isset($anbar) && isset($unvan) && isset($tel)   && isset($tarix))
																									{
																										$p=mysqli_query($i,"UPDATE anbar SET anbar='".$anbar."',unvan='".$unvan."',tel='".$tel."',tarix='".$tarix."',elave='".$əlavə."' WHERE id='".$_GET['id']."'");
																										if($p==true){echo'Məlumat ugurla yeniləndi';  echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&anbar=0&index=1">';}
																										else{echo'Məlumatı yeniləmək mümkün olmadı';}
																									}
																						}
																						$sec=mysqli_query($i,"SELECT * FROM anbar WHERE id='".$_GET['id']."'");
																						$info=mysqli_fetch_array($sec);
																						?>
																						<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s")?>
																							<form action="datatables_clients.php?dax=0&anbar=0&update=1&id=<?=$info['id']?>" method='post'>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='anbar' value='<?php echo $info['anbar']; ?>'  required>
																										<p for="inputFloatingLabel" class="placeholder">ANBAR</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='unvan' value='<?php echo $info['unvan']; ?> ' required>
																										<p for="inputFloatingLabel" class="placeholder">ÜNVAN</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20" >	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tel' value='<?php echo $info['tel']; ?> ' required>
																										<p for="inputFloatingLabel" class="placeholder">TELEFON NOMRƏSİ</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-10"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																								<div class="form-group form-floating-label">
																									<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə' value='<?php echo $info['elave']; ?>'></textarea>
																								</div>
																							</div>
																								<div class="action">
																									<button class="btn btn-success" name='yenilə'>YENILƏ</button>
																								</div>	
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
												
																</td>
															</tr>
				<?php 
														}
													} 
											}
											
										if(isset($_GET['brend']))
											{ 
												if(isset($_GET['insert'])) 
													{ 
				?>										<h1 style="font-size:50px;">Brend əlavəsi</h1>
														<tr>
															<td align='center' valign='top'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Yeni Brend</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['gonder']))
																							{
																								if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']);}
																								if(empty($_POST['olke'])){unset($_POST['olke']);} else{$olke=trim($_POST['olke']);}
																								if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																								if(isset($ad) && isset($tarix) && isset($olke))
																									{
																										$q=mysqli_query($i,"INSERT INTO brend(ad,tarix,elave,olke) VALUES('".$ad."','".$tarix."','".$əlavə."','".$olke."')");
																										if($q==true){echo'Məlumat ugurla yerləşdi';  echo'<meta http-equiv="refresh" content="0 URL=datatables_clients.php?dax=0&brend=0&index=1">';}
																										else{echo'Məlumat yerləşdirmək mümkün olmadı';echo"INSERT INTO brend(ad,tarix,elave,olke) VALUES('".$ad."','".$tarix."','".$əlavə."','".$olke."')";}
																									}
																								
																							}
																						?>
																						<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s")?>
																							<form  method='post'>
																								<div class="col-md-10 col-lg-20" >	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad'  required>
																										<p for="inputFloatingLabel" class="placeholder">Ad</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='olke' required>
																										<p for="inputFloatingLabel" class="placeholder">ÖLKƏ</p>
																									</div>
																								</div><br>
																								<div class="col-md-10 col-lg-10"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																									<div class="form-group form-floating-label">
																										<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə'></textarea>
																									</div>
																								</div><br>
																								<div class="action">
																									<button class="btn btn-success" name='gonder'>DAXIL ET</button>
																								</div><br>	
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>	
															</td>
														</tr>
				<?php 
													} 
												if(isset($_GET['index']))
													{
				?>										<h1 style="font-size:50px;">Brend cədvəlinə baxış</h1>
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Brend cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Ad</th>
																								<th>Olkə</th>
																								<th>Əlavə geydlər</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Ad</th>
																								<th>Olkə</th>
																								<th>Əlavə geydlər</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php
																								if(isset($_POST['silm']))
																									{
																										$sec=mysqli_query($i,"DELETE FROM brend WHERE id='".$_POST['sil']."'");
																									}
																									$sec=mysqli_query($i,"SELECT * FROM brend ORDER BY id DESC");
																									
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['ad'].'</td>
																															<td>'.$info['olke'].'</td>
																															<td>'.$info['elave'].'</td>
																															<td>'.$info['tarix'].'</td>
																															<td><a href="datatables_clients.php?dax=0&brend=0&update=1&id='.$info['id'].'"><button style="width:35px;tetx-align:center;" class="btn-success" name="reda"><i class="icon-pencil"></i></button></a></td>
																														</tr>';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>	
																						</tbody>
																						<div class="action" >
																							<a href="datatables_clients.php?dax=0&brend=0&insert=1"><button class="btn btn-success" name='gonder'>YENI BREND <i class="icon-plus"></i></button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
				<?php 	
													} 
												if(isset($_GET['update'])) 
													{ 
														if(isset($_GET['id']))
															{
				?>												<h1 style="font-size:50px;">Brendin redaktəsi</h1>
																<tr>
																	<td>
																		<div class="row">
																			<div class="col-md-12">
																				<div class="card">
																					<div class="card-header">
																						<h4 class="card-title">Redaktəsi</h4>
																					</div>
																					<div class="card-body">
																						<div class="table-responsive">
																							<?php
																								$tarix=date("Y-m-d H:i:s");
																								if(isset($_POST['gonder']))
																									{
																										if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']);}
																										if(empty($_POST['olke'])){unset($_POST['olke']);} else{$olke=trim($_POST['olke']);}
																										if(empty($_POST['əlavə'])){unset($_POST['əlavə']);} else{$əlavə=trim($_POST['əlavə']);}
																										if(isset($ad) && isset($tarix)  && isset($olke))
																											{
																												$q=mysqli_query($i,"UPDATE brend SET ad='".$ad."',olke='".$olke."',elave='".$əlavə."',tarix='".$tarix."' WHERE id='".$_GET['id']."'");
																												if($q==true){echo'Məlumat uğurla yeniləndi'; echo'<meta http-equiv="refresh" content="0 URL=datatables_clients.php?dax=0&brend=0&index=1">';}
																												else{echo'Məlumaı yeniləmək mümkün olmadı';}
																											}
																									}
																										$sec=mysqli_query($i,"SELECT * FROM brend WHERE id='".$_GET['id']."'");
																										$info=mysqli_fetch_array($sec);
																									?>
																										<div align='center'>
																											<?=$tarix=date("Y-m-d H:i:s")?>
																											<form action='datatables_clients.php?dax=0&brend=0&update=1&id=<?=$info['id'];?>' method='post'>
																												<div class="col-md-10 col-lg-20" >	
																													<div class="form-group form-floating-label">
																														<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad' value="<?php echo $info['ad'] ?>" required>
																														<p for="inputFloatingLabel" class="placeholder">Ad</p>
																													</div>
																												</div>
																												<div class="col-md-10 col-lg-20">	
																													<div class="form-group form-floating-label">
																														<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='olke' value="<?php echo $info['olke'] ?>"  required>
																														<p for="inputFloatingLabel" class="placeholder">ÖLKƏ</p>
																													</div>
																												</div>
																												<div class="col-md-10 col-lg-10"><p style="float-left:1000px;font-size:15px;" ><b>ƏLAVƏ GEYDİLƏR</b></p>
																													<div class="form-group form-floating-label">
																														<textarea style="width: id="inputFloatingLabel" type="text" class="form-control input-solid" name='əlavə' value="<?php echo $info['elave'] ?>"></textarea>
																													</div>
																												</div>
																												<div class="action">
																													<button class="btn btn-success" name='gonder'>YENILƏMƏK</button>
																												</div><br>	
																											</form>
																										</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>		
																	</td>
																</tr>
				<?php 	
															}
													} 
											}
										if(isset($_GET['seb']))
											{
												if(isset($_GET['index'])) 
													{
					?>									<h1 style="font-size:50px;">Səbət cədvəlinə baxış</h1>
														<tr>
															<td valign="top" align="center">
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Səbət cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Miqdar</th>
																								<th>Məbləg</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Miqdar</th>
																								<th>Məbləg</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php 
																								if(isset($_POST['silm']))
																									{mysqli_query($i,"DELETE FROM sebet WHERE id='".$_POST['sil']."'");}
																								if(isset($_POST['silme']))
																									{mysqli_query($i,"DELETE FROM sebet");}	
																								if(isset($_POST['testiq']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM sebet a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul ORDER BY a.id DESC");	
																										$info=mysqli_fetch_array($sec);
																											do
																											{
																												$q=mysqli_query($i,"INSERT INTO satis(brend,mehsul,mig,tarix,mdeyer,psatis,tsatis,end,nov,mebleq,elave,qazanc) VALUES('".$info['brend']."','".$info['mehsul']."','".$info['mig']."','".$info['tarix']."','".$info['mdeyer']."','".$info['psatis']."','".$info['tsatis']."','".$info['end']."','".$info['nov']."','".$info['mebleq']."','".$info['əlavə']."','".$info['qazanc']."')");
																												if($q==true)
																												{
																													mysqli_query($i,"UPDATE product SET galg=galg-'".$info['mig']."' WHERE id='".$info['mehsul']."'");
																													mysqli_query($i,"UPDATE product SET cixi=cixi+'".$info['mig']."' WHERE id='".$info['mehsul']."'");
																													//echo"UPDATE product SET cixi='".$migdar."' WHERE id='".$product[0]."'";
																													echo'Melumat ugurla yerləşdirildi';
																													mysqli_query($i,"DELETE FROM sebet");
																														$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																													echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&sifaris=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																													
																												}
																											}
																										while($info=mysqli_fetch_array($sec));
																										
																									}																									
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.qazanc,a.mehsul,a.mig,a.mdeyer,a.psatis,a.tsatis,a.end,a.nov,a.elave,a.brend,a.mebleq,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.ad AS product_ad,c.alis,c.gomruk FROM sebet a, brend b, product c WHERE b.id=a.brend and c.id=a.mehsul ORDER BY a.id DESC");	
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{ 
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['brend_ad'].'</td>
																															<td>'.$info['product_ad'].'</td>
																															<td>'.$info['mig'].'</td>
																															<td>'.$info['mebleq'].'</td>
																															<td>'.$info['tarix']. '</td>
																															<td><form method="post"><input type="hidden" name="sil" value="'.$info['pid'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																														</tr>
																													';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}		
																							?>	
																						</tbody>
																						<div>
																							<a  href="datatables_clients.php?dax=0&sifaris=0&insert=1"><button class="btn btn-success" name='gonder'>Yeni satış <i class="icon-plus"></i></button></a>
																							<a href="http://localhost/stock/excel/Examples/seb.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																						</div><br>
																					</table>
																					<table>
																					<form method='post'>
																					<tr><td><div class="action"><button  class="btn btn-success" name="testiq">TƏSTIG ET <i class="fa fa-check" aria-hidden="true"></i></button></div></td>
																					<td><div class="action"><button class="btn btn-success" name="silme">SƏBƏTİ BOŞALT <i class="icon-trash"></i></button></div></td>
																					</tr></form></table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
								<?php 				}
											}
											
										if(isset($_GET['nisye']))	
											{
												if(isset($_GET['insert']))
													{
						?>								<div style="wight:100%;height:100px;"><form method='post'><label><h1 style="font-size:50px;">Məhsul çıxarışı</h1></label>	
													
															<label><form method='post'><input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
															<button class="btn btn-success" name='serch'>AXTAR</button>
														</form>
														</div>
														<tr>
															<td  align='center'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="title">Yeni çıxarış</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																					if(isset($_POST['gonder']) OR isset($_POST['sebet']))
																						{	
																							$tarix=date("Y-m-d H:i:s");
																								if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']);}
																								if(empty($_POST['soyad'])){unset($_POST['soyad']);} else{$soyad=trim($_POST['soyad']);}
																								if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel=trim($_POST['tel']);}
																								if(empty($_POST['ves'])){unset($_POST['ves']);} else{$ves=trim($_POST['ves']);}
																								if(empty($_POST['mehsul'])){unset($_POST['mehsul']);} else{$mehsul=trim($_POST['mehsul']);}
																								if(empty($_POST['mig'])){unset($_POST['mig']);} else{$mig=trim($_POST['mig']);}	
																								if(empty($_POST['end'])){unset($_POST['end']);} else{$end=trim($_POST['end']);}
																								if(empty($_POST['qnov'])){unset($_POST['qnov']);} else{$qnov=trim($_POST['qnov']);}	
																								if(empty($_POST['mebleg'])){unset($_POST['mebleg']);} else{$mebleg=trim($_POST['mebleg']);}	
																								if(empty($_POST['odemig'])){unset($_POST['odemig']);} else{$odemig=trim($_POST['odemig']);}	
																								if(isset($ad) && isset($soyad) && isset($tel)  && isset($ves) && isset($mehsul) && isset($qnov) && isset($tarix))
																									{
																										$product=explode("|",$_POST['mehsul']);
																										$product_id=$product[0];
																										$product_migdar=$product[1];
																										$de=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																										$ni=mysqli_fetch_array($de);
																										if($end>$ni['Mdyer']){echo'Endirim mayadəyərinən çox ola bilməz';}
																										else
																											{
																												if(isset($_POST['gonder']))
																													{
																														$product=explode("|",$_POST['mehsul']);
																																$product_id=$product[0];
																																$product_migdar=$product[1];
																														$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																														$in=mysqli_fetch_array($se);
																														if($_POST['qnov']=='TOPDAN')
																																{$meb=$in['top']*$mig-$end;}
																															else
																															{$meb=$in['parak']*$mig-$end;}
																														if($odemig>$meb){echo'Sizin odeniş migdarı ödəniləcək məbləgdən çoxdur.Siz ən çox:'.$meb.' məbləği daxil edə bilərsiz';}
																														else
																															{
																																$product=explode("|",$_POST['mehsul']);
																																$product_id=$product[0];
																																$product_migdar=$product[1];
																																$de=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																																$ni=mysqli_fetch_array($de);
																																$qazanc=$meb-($ni['Mdyer']*$mig);
																																$borc=$meb-$odemig;
																																$q=mysqli_query($i,"INSERT INTO nisye(ad,soyad,tel,ves,mal,psatis,tsatis,say,nov,mebleg,odemig,qazanc,end,borc,tarix) VALUES('".$ad."','".$soyad."','".$tel."','".$ves."','".$product_id."','".$ni['parak']."','".$ni['top']."','".$mig."','".$qnov."','".$meb."','".$odemig."','".$qazanc."','".$end."','".$borc."','".$tarix."')");
																																
																																if($q==true)
																																	{
																																		$er=mysqli_query($i,"SELECT * FROM nisye ORDER BY id DESC");
																																		$nor=mysqli_fetch_array($er);
																																		if(isset($odemig))
																																			{
																																				$we=mysqli_query($i,"INSERT INTO odenis(musteri,odenmig,tarix) VALUES('".$nor['id']."','".$odemig."','".$tarix."')");
																																			}
																																		mysqli_query($i,"UPDATE product SET galg=galg-'".$mig."' WHERE id='".$product[0]."'");
																																		mysqli_query($i,"UPDATE product SET cixi=cixi+'".$mig."' WHERE id='".$product[0]."'");
																																		echo'Melumat ugurla yerləşdi:'; 
																																		$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																																		echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&nisye=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																																	}
																																else
																																	{
																																		echo'Məlumatı yerləşdirmək mümkün olmadı;';
																																	}
																															}
																													}
																												if(isset($_POST['sebet']))
																													{
																														$product=explode("|",$_POST['mehsul']);
																																$product_id=$product[0];
																																$product_migdar=$product[1];
																														$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																														$in=mysqli_fetch_array($se);
																														if($_POST['qnov']=='TOPDAN')
																																{$meb=$in['top']*$mig-$end;}
																															else
																															{$meb=$in['parak']*$mig-$end;}
																														if($_POST['odemig']>$meb){echo'Sizin odeniş migdarı ödəniləcək məbləgdən çoxdur.Siz ən çox:'.$meb.' məbləği daxil edə bilərsiz';}
																														else
																															{
																																
																																$product=explode("|",$_POST['mehsul']);
																																$product_id=$product[0];
																																$product_migdar=$product[1];
																																$de=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																																$ni=mysqli_fetch_array($de);
																																$qazanc=$meb-($ni['Mdyer']*$mig);
																																$borc=$meb-$odemig;
																																$q=mysqli_query($i,"INSERT INTO sebetanbar(ad,soyad,tel,ves,mal,psatis,tsatis,say,nov,mebleg,odemig,qazanc,end,borc,tarix) VALUES('".$ad."','".$soyad."','".$tel."','".$ves."','".$product_id."','".$ni['parak']."','".$ni['top']."','".$mig."','".$qnov."','".$meb."','".$odemig."','".$qazanc."','".$end."','".$borc."','".$tarix."')");
																																
																																if($q==true)
																																	{
																																		echo'Melumat ugurla yerləşdi:';echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&sebet=0&index=1">';
																																	}
																																else
																																	{
																																		echo'Məlumatı yerləşdirmək mümkün olmadı;';
																																		//echo"INSERT INTO nisye(ad,soyad,tel,ves,mal,psatis,tsatis,say,nov,mebleg,odemig,qazanc,tarix) VALUES('".$ad."','".$soyad."','".$tel."','".$ves."','".$mehsul."','".$psatis."','".$tsatis."','".$mig."','".$qnov."','".$mebleg."','".$odemig."','".$qazanc."','".$tarix."')";
																																	}
																															}
																													}
																											}

																									}
																						}																										
													
																						?>
																						<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s");?>
																							<form  method='post'>
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ad' value="<?=$_POST['ad']?>" required>
																										<p for="inputFloatingLabel" class="placeholder">AD</p>
																									</div>
																								</div>
																								
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='soyad' value="<?=$_POST['soyad']?>" required>
																										<p for="inputFloatingLabel" class="placeholder">SOYAD</p><br>
																									</div>
																								</div>
																								
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='ves' value="<?=$_POST['ves']?>" required>
																										<p for="inputFloatingLabel" class="placeholder">Ş-VESİQƏSİ</p>
																									</div>
																								</div>
																								
																								<div class="col-md-10 col-lg-20">	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tel' value="<?=$_POST['tel']?>"  required>
																										<p for="inputFloatingLabel" class="placeholder">TELEFON NOMRƏSİ</p>
																									</div>
																								</div><br>
																								
																								<div class="col-md-10 col-lg-20">
																									<div class="form-group form-floating-label">
																										<select class="form-control input-solid" id="selectFloatingLabel2" name='mehsul' onchange="this.form.submit()" required>
																											<?php
																												if(!empty($_POST['mehsul']))
																													{
																														$product=explode("|",$_POST['mehsul']);
																														$product_id=$product[0];
																														$product_migdar=$product[1];
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.galg,a.ad,a.anbar,a.brend,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar AS c_anbar FROM product a,brend b, anbar c WHERE b.id=a.brend AND c.id=a.anbar AND a.id='".$product_id."'");
																														$info=mysqli_fetch_array($sec);
																														echo'<option value="'.$info['pid'].'|'.$info['galg'].'">'.$info['c_anbar'].' '.$info['brend_ad'].' '.$info['ad'].'('.$info['galg'].')</option>'; 
																													}
																												elseif(isset($_POST['serch']))
																												{
																													$sec=mysqli_query($i,"SELECT a.id AS pid,a.galg,a.ad,a.anbar,a.barkod,a.brend,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar AS c_anbar FROM product a,brend b, anbar c WHERE b.id=a.brend AND c.id=a.anbar AND a.barkod='".$_POST['seriya']."'");
																														$info=mysqli_fetch_array($sec);
																														echo'<option value="'.$info['pid'].'|'.$info['galg'].'">'.$info['c_anbar'].' '.$info['brend_ad'].' '.$info['ad'].'('.$info['galg'].')</option>'; 
																													
																												}
																												else{echo'<option value=""></option>';}
																												$sec=mysqli_query($i,"SELECT a.id AS pid,a.ad,a.galg,a.anbar,a.brend,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar AS c_anbar FROM product a,brend b, anbar c WHERE b.id=a.brend AND c.id=a.anbar ORDER BY a.id DESC");
																												$info=mysqli_fetch_array($sec);
																												do
																													{
																														echo'<option value="'.$info['pid'].'|'.$info['galg'].'">'.$info['c_anbar'].'-'.$info['brend_ad'].'-'.$info['ad'].'('.$info['galg'].')</option>'; 
																													}
																												while($info=mysqli_fetch_array($sec));	
																											?>
																										</select>
																										<p for="selectFloatingLabel2" class="placeholder">MƏHSUL</p>
																									</div>
																								</div>
																								<?php
																									if(!isset($_POST['mehsul']) && !isset($_POST['serch']))
																									{
																								?>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='psatis' disabled>
																												<p for="inputFloatingLabel" class="placeholder">PƏRAKENDƏ SATIŞ QİYMƏTİ</p>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='tsatis' disabled>
																												<p for="inputFloatingLabel" class="placeholder">TOPDAN SATIŞ QİYMƏTİ</p>
																											</div>
																										</div>
																										
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mig' disabled>
																												<p for="inputFloatingLabel" class="placeholder">MİQDAR</p>
																											</div>
																										</div>
																										
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='end' disabled>
																												<p for="inputFloatingLabel" class="placeholder">ÜMUMİ ENDİRİM</p>
																											</div>
																										</div>
																										
																										<div class="form-check">
																											<label>Qiymət növü:</label><br>
																											<label class="form-radio-label">
																												<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" disabled="disabled">
																												<span class="form-radio-sign">TOPDAN</span>
																											</label><br>
																											<label class="form-radio-label ml-3">
																												<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ" disabled="disabled">
																												<span class="form-radio-sign">PARAKENDƏ</span>
																											</label>
																										</div>
																										
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mebleg' disabled>
																												<p for="inputFloatingLabel" class="placeholder">ÖDƏNİLƏCƏK MƏBLƏĞ</p>
																											</div>
																										</div>
																										
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='odemig' disabled>
																												<p for="inputFloatingLabel" class="placeholder">ÖDƏNİŞ MİGDAR</p>
																											</div>
																										</div>
																							<?php
																									}
																								else
																									{	
																										if(isset($_POST['mehsul']))
																											{
																												$product=explode("|",$_POST['mehsul']);
																												$product_id=$product[0];
																												$product_migdar=$product[1];
																												$se=mysqli_query($i,"SELECT * FROM product WHERE id='".$product_id."'");
																												$in=mysqli_fetch_array($se);
																											}
																										else
																											{
																												$sec=mysqli_query($i,"SELECT * FROM product WHERE barkod='".$_POST['seriya']."'");
																												$in=mysqli_fetch_array($sec);
																											}
																										if($_POST['qnov']=='TOPDAN')
																														{$meb=$in['top']*$_POST['mig']-$_POST['end'];}
																													else
																													{$meb=$in['parak']*$_POST['mig']-$_POST['end'];}
																										
																							?>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">PƏRAKENDƏ SATIŞ QİYMƏTİ</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="PƏRAKENDƏ SATIŞ QİYMƏTİ" name='psatis' value="<?=$in['parak']?>" disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">TOPDAN SATIŞ QİYMƏTİ</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="TOPDAN SATIŞ QİYMƏTİ"  name='tsatis' value="<?=$in['top']?>" disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='mig' value="<?=$_POST['mig']?>">
																												<p for="inputFloatingLabel" class="placeholder">MİQDAR</p>
																											</div>
																										</div>
																										
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='end' value="<?=$_POST['end']?>" >
																												<p for="inputFloatingLabel" class="placeholder">ÜMUMİ ENDİRİM</p>
																											</div>
																										</div>
																										<?php 
																											
																											if(!isset($_POST['qnov']))
																												{
																										?>
																													<div class="form-check">
																														<label>Qiymət növü:</label><br>
																														<label class="form-radio-label">
																															<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" onchange="this.form.submit()">
																															<span class="form-radio-sign">TOPDAN</span>
																														</label><br>
																														<label class="form-radio-label ml-3">
																															<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ" onchange="this.form.submit()">
																															<span class="form-radio-sign">PARAKENDƏ</span>
																														</label>
																													</div>
																									<?php 			
																												}
																											else
																												{
																													
																													if($_POST['qnov']=='TOPDAN')
																														{
																									?>
																															<div class="form-check">
																																<label>Qiymət növü:</label><br>
																																<label class="form-radio-label">
																																	<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" checked onchange="this.form.submit()">
																																	<span class="form-radio-sign">TOPDAN</span>
																																</label><br>
																																<label class="form-radio-label ml-3">
																																	<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ"  onchange="this.form.submit()">
																																	<span class="form-radio-sign">PARAKENDƏ</span>
																																</label>
																															</div>	
																										<?php	
																														}
																													else
																														{
																											?>
																															<div class="form-check">
																																<label>Qiymət növü:</label><br>
																																<label class="form-radio-label">
																																	<input class="form-radio-input" type="radio" name="qnov" value="TOPDAN" onchange="this.form.submit()">
																																	<span class="form-radio-sign">TOPDAN</span>
																																</label><br>
																																<label class="form-radio-label ml-3">
																																	<input class="form-radio-input" type="radio" name="qnov" value="PARAKENDƏ"  checked onchange="this.form.submit()">
																																	<span class="form-radio-sign">PARAKENDƏ</span>
																																</label>
																															</div>
																										<?php 
																														}
																												}
																												if($_POST['qnov']=='TOPDAN')
																														{$meb=$in['top']*$_POST['mig']-$_POST['end'];}
																													else
																													{$meb=$in['parak']*$_POST['mig']-$_POST['end'];}
																										?>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">ÖDƏNİLƏCƏK MƏBLƏĞ</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="ÖDƏNİLƏCƏK MƏBLƏĞ"  name='mebleg' value='<?=$meb?>' disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20">	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='odemig' value='<?=$_POST['odemig']?>' >
																												<p for="inputFloatingLabel" class="placeholder">ÖDƏNİŞ MİGDAR</p>
																											</div>
																										</div>
																									
																							<?php	
																									}
																							?>
																								<div class="action">
																									<button class="btn btn-success" name='gonder'>DAXIL ET</button>
																								
																									<button class="btn btn-success" name='sebet'>SEBƏTƏ AT</button>
																								</div>
																							</form>
																						</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php
													} 
												if(isset($_GET['index']))
													{ 
					?>									<h1 style="font-size:50px;">Mal çıxarışı cədvəlinə baxış</h1>
														<tr>
															<td>	
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="title">
																					<form method="post">
																						<?php
																							if(empty($_POST['il'])){$il=date("Y");} else{$il=$_POST['il'];}
																							if(isset($_GET['ay']) && $_GET['ay']=='1')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=1&il='.$il.'">Yanvar</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=1&il='.$il.'">Yanvar</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='2')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=2&il='.$il.'">Fevral</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=2&il='.$il.'">Fevral</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='3')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=3&il='.$il.'">Mart</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=3&il='.$il.'">Mart</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='4')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=4&il='.$il.'">Aprel</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=4&il='.$il.'">Aprel</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='5')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=5&il='.$il.'">May</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=5&il='.$il.'">May</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='6')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=6&il='.$il.'">Iyun</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=6&il='.$il.'">Iyun</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='7')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=7&il='.$il.'">Iyul</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=7&il='.$il.'">Iyul</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='8')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=8&il='.$il.'">Avqust</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=8&il='.$il.'">Avqust</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='9')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='10')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='11')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=11&il='.$il.'">Noyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=11&il='.$il.'">Noyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='12')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&nisye=0&index=1&ay=12&il='.$il.'">Dekabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&nisye=0&index=1&ay=12&il='.$il.'">Dekabr</a>|';}?>
																							<select name="il" onchange="this.form.submit()">
																								<?php
																									if(!empty($_POST['il'])){echo'<option value="'.$_POST['il'].'">'.$_POST['il'].'</option>';}
																									else{echo'<option value="'.date("Y").'">'.date("Y").'</option>';}
																									for($iler=2019;$iler<2030;$iler++){echo'<option value"'.$iler.'">'.$iler.'</option>';}
																										
																								?>
																							</select>
																							<?php 
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																									
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");	
																										$ec=mysqli_query($i,"SELECT * FROM xerc WHERE tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY id DESC");
																												
																										$ofni=mysqli_fetch_array($ce);
																										$fni=mysqli_fetch_array($ec);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleg'];
																														$xr=$xr+$fni['xer'];
																														$qz=$qz+$ofni['qazanc'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																												
																													$qz=$qz-$xr;
																											}
																										else{$meb=0;$xr=0;$qz=0;}
																									}
																								elseif(isset($_GET['p']))
																									{
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar ORDER BY a.id DESC");
																										$ec=mysqli_query($i,"SELECT * FROM xerc ORDER BY id DESC");
																										$ofni=mysqli_fetch_array($ce);
																										$fni=mysqli_fetch_array($ec);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleg'];
																														$xr=$xr+$fni['xer'];
																														$qz=$qz+$ofni['qazanc'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																												
																													$qz=$qz-$xr;
																											}
																									}
																								else{$meb=0;$xr=0;$qz=0;}
																										echo'<label style="padding-left:15px;"><h4>Məbləğ:'.$meb.'|     Xərc'.$xr.'|     Qazanc:'.$qz.'</h4></label>'; 
																										
																								?>
																						</form>	
																				
																				</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Müştəri</th>
																								<th>Telefon</th>
																								<th>Ş-vəsiqəsi</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Pər.satış</th>
																								<th>Top.satiş</th>
																								<th>Say</th>
																								<th>Ümumi endirim</th>
																								<th>Məbləğ</th>
																								<th>Qazanc</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>	
																						</thead>	
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Müştəri</th>
																								<th>Telefon</th>
																								<th>Ş-vəsiqəsi</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Pər.satış</th>
																								<th>Top.satiş</th>
																								<th>Say</th>
																								<th>Ümumi endirim</th>
																								<th>Məbləğ</th>
																								<th>Qazanc</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>
																						</tfoot>
																						<tbody >
																							<?php	
																								if(isset($_POST['silm']))
																									{
																										mysqli_query($i,"DELETE  FROM nisye WHERE id='".$_POST['sil']."'");
																										mysqli_query($i,"DELETE  FROM odenis WHERE musteri='".$_POST['sil']."'");
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.id='".$_POST['sil']."'");
																										$info=mysqli_fetch_array($sec);
																										//mysqli_query($i,"UPDATE product SET migdar=migdar+'".$info['say']."' WHERE id='".$info['mal']."'");
																									}
																								if(isset($_GET['p']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar ORDER BY a.id DESC");
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."'  ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  like '%".$_POST['star']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['star']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."'  ORDER BY a.id DESC");}	
																											}
																										
																									}	
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																										//$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))	
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix like '%".$_POST['theend']."%' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  like '%".$_POST['star']."%'  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['star']."%'   AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['theend']."%'   AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."'  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");}	
																											}
																									}
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['anbar']. '</td>
																															<td>'. $info['ad'].' '.$info['soyad'].'</td>
																															<td>'.$info['tel'].'</td>
																															<td>'.$info['ves']. '</td>
																															<td>'.$info['brend_ad']. '</td>
																															<td>'.$info['product_ad']. '</td>
																															<td>'.$info['psatis']. '</td>
																															<td>'.$info['tsatis']. '</td>
																															<td>'.$info['say']. '</td>
																															<td>'.$info['end']. '</td>
																															<td>'.$info['mebleg']. '</td>
																															<td>'.$info['qazanc']. '</td>
																															<td>'.$info['tarix']. '</td>
																															<td><form method="post"><input type="hidden" name="sil" value="'.$info['pid'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																														</tr>
																													';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>
																						</tbody>
																						<div>
																							<a href="datatables_clients.php?dax=0&nisye=0&insert=1"><button class="btn btn-success" name='gonder'>YENI ÇIXARIŞ <i class="icon-plus"></i></button></a>
																							<a href="http://localhost/stock/excel/Examples/nis.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																							<label><form method='post'><input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
																							<label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="star"></label><label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="theend"></label>
																							<button class="btn btn-success" name='serch'>AXTAR</button></form>
																							<a href="datatables_clients.php?dax&nisye=0&index=1&p=5"><button class="btn btn-success" name='hams'>Hamsı</button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php 
													}
											}
											
											
										if(isset($_GET['odenis']))
											{
												if(isset($_GET['index']))
													{ 
					?>									<h1 style="font-size:50px;">Ödəniş cədvəlinə baxış</h1>
														<tr>
															<td>	
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="title">
																					<form method="post">
																						<?php
																							if(empty($_POST['il'])){$il=date("Y");} else{$il=$_POST['il'];}
																							if(isset($_GET['ay']) && $_GET['ay']=='1')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=1&il='.$il.'">Yanvar</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=1&il='.$il.'">Yanvar</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='2')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=2&il='.$il.'">Fevral</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=2&il='.$il.'">Fevral</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='3')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=3&il='.$il.'">Mart</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=3&il='.$il.'">Mart</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='4')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=4&il='.$il.'">Aprel</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=4&il='.$il.'">Aprel</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='5')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=5&il='.$il.'">May</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=5&il='.$il.'">May</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='6')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=6&il='.$il.'">Iyun</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=6&il='.$il.'">Iyun</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='7')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=7&il='.$il.'">Iyul</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=7&il='.$il.'">Iyul</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='8')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=8&il='.$il.'">Avqust</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=8&il='.$il.'">Avqust</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='9')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='10')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='11')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=11&il='.$il.'">Noyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=11&il='.$il.'">Noyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='12')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&odenis=0&index=1&ay=12&il='.$il.'">Dekabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&odenis=0&index=1&ay=12&il='.$il.'">Dekabr</a>|';}?>
																							<select name="il" onchange="this.form.submit()">
																								<?php
																									if(!empty($_POST['il'])){echo'<option value="'.$_POST['il'].'">'.$_POST['il'].'</option>';}
																									else{echo'<option value="'.date("Y").'">'.date("Y").'</option>';}
																									for($iler=2019;$iler<2030;$iler++){echo'<option value"'.$iler.'">'.$iler.'</option>';}
																										
																								?>
																							</select>
																							<?php 
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																									
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																										$ec=mysqli_query($i,"SELECT * FROM xerc WHERE tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY id DESC");
																										$ofni=mysqli_fetch_array($ce);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleg'];
																														$xr=$xr+$ofni['borc'];
																														$qz=$qz+$ofni['odemig'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																												
																											}
																										else{$meb=0;$xr=0;$qz=0;}
																									}
																								elseif(isset($_GET['p']))
																									{
																										$ce=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar ORDER BY a.id DESC");
																										$ofni=mysqli_fetch_array($ce);
																										if(mysqli_num_rows($ce)>0)
																											{
																												$meb=0;
																												$xr=0;
																												$qz=0;
																												do
																													{
																														$meb=$meb+$ofni['mebleg'];
																														$xr=$xr+$ofni['borc'];
																														$qz=$qz+$ofni['odemig'];
																													}
																												while($ofni=mysqli_fetch_array($ce));
																											}
																									}
																								else{$meb=0;$xr=0;$qz=0;}
																										echo'<label style="padding-top:15px;"><h6><font color="red">Toplama nisədə olan malar:'.$meb.'|     Hal hazırda borc olanlar'.$xr.'|     Əldə edilən ödənişlər:'.$qz.'</font></h6></label>'; 
																										
																								?>
																					</form>	
																				</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Müştəri</th>
																								<th>Telefon</th>
																								<th>Ş-vəsiqəsi</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Məbləğ</th>
																								<th>Ödəniş migdar</th>
																								<th>Borc</th>
																								<th>Say</th>
																								<th>Ümumi endirim</th>
																								<th>Tarix</th>
																								<th></th>
																								<th></th>
																								<th></th>
																							</tr>	
																						</thead>	
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Müştəri</th>
																								<th>Telefon</th>
																								<th>Ş-vəsiqəsi</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Məbləğ</th>
																								<th>Ödəniş migdar</th>
																								<th>Borc</th>
																								<th>Say</th>
																								<th>Ümumi endirim</th>
																								<th>Tarix</th>
																								<th></th>
																								<th></th>
																								<th></th>
																							</tr>
																						</tfoot>
																						<tbody >
																						<?php	
																							if(isset($_GET['p']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar ORDER BY a.id DESC");
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."'  ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  like '%".$_POST['star']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['star']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['theend']."%' ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."'  ORDER BY a.id DESC");}	
																											}
																										
																									}	
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																										$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																										//$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' ORDER BY a.id DESC");
																										if(isset($_POST['serch']))
																											{
																												if(!empty($_POST['seriya']) && empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && !empty($_POST['star']))	
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix like '%".$_POST['theend']."%' AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.tarix  like '%".$_POST['star']."%'  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && empty($_POST['theend']) && !empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['star']."%'   AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												elseif(!empty($_POST['seriya']) && !empty($_POST['theend']) && empty($_POST['star']))
																													{
																														$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  like '%".$_POST['theend']."%'   AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");
																													}
																												else{$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar,d.barkod FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND d.barkod='".$_POST['seriya']."' AND a.tarix  BETWEEN '".$_POST['star']."%' AND '".$_POST['theend']."'  AND a.tarix like '%".$_GET['il']."-0".$_GET['ay']."%'ORDER BY a.id DESC");}	
																											}
																									}
																							$info=mysqli_fetch_array($sec);
																							if(mysqli_num_rows($sec)>0)
																									{
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['anbar']. '</td>
																															<td>'. $info['ad'].' '.$info['soyad'].'</td>
																															<td>'.$info['tel'].'</td>
																															<td>'.$info['ves']. '</td>
																															<td>'.$info['brend_ad']. '</td>
																															<td>'.$info['product_ad']. '</td>
																															<td style="background-color:#62BB0E; color:#FFFFFF;">'.$info['mebleg']. '</td>
																														';
																												if($info['mebleg']-$info['odemig']>0)
																													{
																														echo'<td style="background-color:red;color:#FFFFFF;">'.$info['odemig']. '</td>';
																													}
																												else
																													{	
																														echo'<td style="background-color:#62BB0E; color:#FFFFFF;">'.$info['odemig']. '</td>';
																													}
																												echo
																													'	
																															<td>'.$info['borc'].'</td>
																															<td>'.$info['say']. '</td>
																															<td>'.$info['end']. '</td>
																															<td>'.$info['tarix']. '</td>';
																															if($info['borc']>1){echo'<td><a href="datatables_clients.php?dax=0&odenis=0&update=1&id='.$info['pid'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="fa fa-dollar" aria-hidden="true"></i></button></td>';}
																															else{echo'<td><b>Ödənilib</b></td>';}
																															echo'<td><a href="datatables_clients.php?dax=0&odenis=0&delete=1&id='.$info['pid'].'"><button style="width:35px;tetx-align:center;" class="btn-success" name="redaksiya_etmek"><i class="fa fa-history" aria-hidden="true"></i></i></a></td>
																															<td><a href="http://localhost/stock/tcpdf/examples/ode.php?id='.$info['pid'].'"><button style="width:35px;tetx-align:center;" class="btn-success" name="redaksiya_etmek"><i class="fa fa-print" aria-hidden="true"></i></a></td>
																														</tr>
																													';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>
																						</tbody>
																						<div>
																							<a href="http://localhost/stock/excel/Examples/ode.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																							<label><form method='post'><button class="btn btn-success" name='serch'>AXTAR</button></form></label>
																							<label><form method='post'><input style="width:300px;"  class="form-control form-control" type="text"  placeholder="Barkod oxuyucusu ilə sorğu..." name="seriya"></label>
																							<label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="star"></label><label><input type="date" class="form-control form-control" placeholder="Tarixdən" name="theend"></label>
																							<button class="btn btn-success" name='serch'>AXTAR</button></form>
																							<a href="datatables_clients.php?dax&odenis=0&index=1&p=5"><button class="btn btn-success" name='hams'>Hamsı</button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php 
													}
												if(isset($_GET['delete']))
													{ 
					?>									<h1 style="font-size:50px;">Ödəniş cədvəlinə baxış</h1>
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Ödəniş cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables"  class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Müştəri</th>
																								<th>Ödəniş migdarı</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>	
																						</thead>	
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Müştəri</th>
																								<th>Ödəniş migdarı</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>
																						</tfoot> 
																						<tbody>
																						<?php
																						$sec=mysqli_query($i,"SELECT a.id AS pid,a.musteri,a.odenmig,a.tarix,b.id AS bid,b.ad,b.soyad  FROM nisye b,odenis a WHERE b.id=a.musteri AND a.musteri='".$_GET['id']."' ORDER BY a.id  DESC");
																						$info=mysqli_fetch_array($sec);
																						if(mysqli_num_rows($sec)>0)
																							{
																								$r=0;
																								do
																									{
																										$r++;
																										echo
																											'
																												<tr><form method="post">
																													<td>'.$r.'</td>
																													<td>'. $info['ad'].' '.$info['soyad'].'</td>
																													<td>'.$info['odenmig']. '</td>
																													<td>'.$info['tarix']. '</td>
																													</form>
																												</tr>
																											';
																									}
																								while($info=mysqli_fetch_array($sec));
																							}
																						?>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>	
															</td>
														</tr>
					<?php 
													}
												if(isset($_GET['update']))
													{
														if(isset($_GET['id']))
														{	
					?>										<h1 style="font-size:50px;">Ödənişin əlavə edilməsi</h1>		
															<tr>
																<td>
																	<div class="row">
																		<div class="col-md-12">
																			<div class="card">
																				<div class="card-header">
																					<h4 class="card-title">Əlavə et</h4>
																				</div>
																				<div class="card-body">
																					<div class="table-responsive">
																						<table id="basic-datatables" class="display table table-striped table-hover" >
																							<?php
																								$tarix=date("Y-m-d H:i:s");
																								if(isset($_POST['yenilə']))
																									{
																										if(empty($_POST['borc'])){unset($_POST['borc']);} else{$borc=trim($_POST['borc']);}
																										if( isset($borc))
																											{ 	$ces=mysqli_query($i,"SELECT * FROM nisye WHERE id='".$_GET['id']."'");
																												$onf=mysqli_fetch_array($ces);
																												if($borc>$onf['borc']){echo'Daxil etiyiniz mebəg ödəniləcək məbləğdən çoxdur.Siz ən çox '.$onf['borc'].'geder məbləğ daxil edə bilərsiz.';}
																												else
																													{
																														$p=mysqli_query($i,"UPDATE nisye SET borc=borc-'".$borc."' WHERE id='".$_GET['id']."'");
																														$m=mysqli_query($i,"UPDATE nisye SET odemig=odemig+'".$borc."' WHERE id='".$_GET['id']."'");
																														if($p==true)
																														{$p=mysqli_query($i,"INSERT INTO odenis(musteri,odenmig,tarix) VALUES('".$_GET['id']."','".$borc."','".$tarix."')");
																															echo'Məlumat uğurla yerlışdi';$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]); echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&odenis=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';}
																														else{echo'Məlumatı yerləşdirmək mümkün olmadı';}	
																													}
																											}
																								}
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.galg,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM nisye a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar AND a.id='".$_GET['id']."'");
																								$ino=mysqli_fetch_array($sec);
																														
																								?>
																								<div align='center'>
																									<?=$tarix=date("Y-m-d H:i:s")?>
																									<form  method='post'>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">AD</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="AD" name='ad' value='<?php echo $ino['ad']; ?>' disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">SOYAD</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="SOYAD" name='soyad' value='<?php echo $ino['soyad']; ?>' disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">Ş-VESİQƏSİ</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="Ş-VESİQƏSİ" name='ves' value='<?php echo $ino['ves']; ?>'  disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">TELEFON NOMRƏSİ</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="TELEFON NOMRƏSİ" name='tel' value='<?php echo $ino['tel']; ?> '  disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">MƏHSUL</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="MƏHSUL" name='tel' value='<?php echo $ino['anbar'].' '.$ino['brend_ad'].' '.$ino['product_ad'].'('.$ino['galg'].')'; ?> '  disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" style="height:70px;padding-top:0.01px;">
																											<div class="form-group" style="height:70px;padding-top:0.01px;">
																												<h6><b style="font-size:12px;float:left;height: 14px;">Miqdar</b>
																													<input type="text" class="form-control" id="disableinput" placeholder="MƏHSUL" name='mig' value='<?php echo $ino['say']; ?> '  disabled="">
																												</h6>
																											</div>
																										</div>
																										<div class="col-md-10 col-lg-20" >	
																											<div class="form-group form-floating-label">
																												<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='borc' required>
																												<p for="inputFloatingLabel" class="placeholder">Ödəniş miqdarı</p>
																											</div>
																										</div><br>
																						
																										<div class="action">
																											<button class="btn btn-success" name='yenilə'>ÖDƏNİŞ ET</button>
																										</div><br>	
																									</form>
																								</div>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
												
																</td>
															</tr>
				<?php 
														}
													} 
											}
										if(isset($_GET['sebet']))
											{
												if(isset($_GET['index']))
													{ 
					?>									<h1 style="font-size:50px;">Səbət cədvəlinə baxış</h1>
														<tr>
															<td>	
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Səbət cədvəli</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Ad</th>
																								<th>Soyad</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Say</th>
																								<th>Məbləğ</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>	
																						</thead>	
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Ad</th>
																								<th>Soyad</th>
																								<th>Brend</th>
																								<th>Mal</th>
																								<th>Say</th>
																								<th>Məbləğ</th>
																								<th>Tarix</th>
																								<th></th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php	
																							$sec=mysqli_query($i,"SELECT a.id AS pid,a.borc,a.say,a.ad,a.soyad,a.tel,a.ves,a.psatis,a.tsatis,a.mal,a.end,a.mebleg,a.qazanc,a.odemig,a.tarix,b.id AS bid,b.ad AS brend_ad,c.id AS cid,c.anbar,d.id AS did,d.ad AS product_ad,d.brend,d.anbar AS prod_anbar FROM sebetanbar a,brend b,product d,anbar c WHERE d.id=a.mal AND b.id=d.brend AND c.id=d.anbar ORDER BY a.id DESC");
																									$info=mysqli_fetch_array($sec);
																								if(isset($_POST['silm']))
																									{
																										$sc=mysqli_query($i,"DELETE FROM sebetanbar WHERE id='".$_POST['sil']."'");
																									}
																								if(isset($_POST['silme']))
																									{
																										$se=mysqli_query($i,"DELETE FROM sebetanbar");
																									}
																								if(isset($_POST['testiq']))
																									{
																										$q=mysqli_query($i,"INSERT INTO nisye(ad,soyad,tel,ves,mal,psatis,tsatis,say,nov,mebleg,odemig,qazanc,end,borc,tarix) VALUES('".$info['ad']."','".$info['soyad']."','".$info['tel']."','".$info['ves']."','".$info['mal']."','".$info['psatis']."','".$info['tsatis']."','".$info['say']."','".$info['nov']."','".$info['mebleg']."','".$info['odemig']."','".$info['qazanc']."','".$info['end']."','".$info['borc']."','".$info['tarix']."')");
																										if($q==true)
																											{
																												if(isset($info['odemig']))
																													{
																														$re=mysqli_query($i,"SELECT * FROM nisye ORDER BY id DESC");
																														$nor=mysqli_fetch_array($re);
																														$we=mysqli_query($i,"INSERT INTO odenis(musteri,odenmig,tarix) VALUES('".$nor['id']."','".$info['odemig']."','".$info['tarix']."')");
																														if($we==true)
																															{
																																mysqli_query($i,"UPDATE product SET galg=galg-'".$info['say']."' WHERE id='".$info['did']."'");
																																mysqli_query($i,"UPDATE product SET cixi=cixi+'".$info['say']."' WHERE id='".$info['did']."'");
																																echo'Melumat ugurla yerləşdi:'; 
																																mysqli_query($i,"DELETE FROM sebetanbar");
																																$ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]);
																																echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&nisye=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																															}
																													}
																											}
																										else
																											{
																												echo'Məlumatı yerləşdirmək mümkün olmadı;';
																											}
																									}
																							
																									if(mysqli_num_rows($sec)>0)
																										{
																											$r=0;
																											do
																												{
																													$r++;
																													echo'
																															<tr>
																																<td>'.$r.'</td>
																																<td>'. $info['ad'].'
																																<td>'.$info['soyad'].'</td>
																																<td>'.$info['brend_ad'].'</td>
																																<td>'.$info['product_ad'].'</td>
																																<td>'.$info['say'].'</td>
																																<td>'.$info['mebleg'].'</td>
																																<td>'.$info['tarix'].'</td>
																																<td><form method="post"><input type="hidden" name="sil" value="'.$info['id'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																															</tr>
																														';
																												}
																											while($info=mysqli_fetch_array($sec));
																										}
																								?>
																						</tbody>
																						<div>
																							<a href="datatables_clients.php?dax=0&nisye=0&insert=1"><button class="btn btn-success" name='yenilə'>YENI ÇIXARIŞ <i class="icon-plus"></i></button></a>
																							<a href="http://localhost/stock/excel/Examples/seban.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																						</div><br>
																					</table>
																						<table><tr><td><div>
																						<form method="post"><button  class="btn btn-success" name="testiq">Testiq et <i class="fa fa-check" aria-hidden="true"></i></button></form></div></td>
																						<td><div><form method="post"><button s class="btn btn-success" name="silme">Sebeti boşalt<i class="icon-trash"></i></button></form></div></td></tr></table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
					<?php 
													}
											}
										if(isset($_GET['xerc']))
											{
												if(isset($_GET['insert'])) 
													{ 
				?>										<h1 style="font=size:50px;">Xərc əlavəsi</h1>
														<tr>
															<td align='center' valign='top'>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Yeni xərc</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<?php
																						$tarix=date("Y-m-d H:i:s");
																						if(isset($_POST['gonder']))
																							{
																								if(empty($_POST['xer'])){unset($_POST['xer']);} else{$xer=trim($_POST['xer']);}
																								if(empty($_POST['ixer'])){unset($_POST['ixer']);} else{$ixer=trim($_POST['ixer']);}
																								if(isset($xer) && isset($tarix) && isset($ixer))
																									{
																										$q=mysqli_query($i,"INSERT INTO xerc(xer,tarix,isti) VALUES('".$xer."','".$tarix."','".$ixer."')");
																										if($q==true)
																											{
																													echo'Məlumat uğurla yerləşdirildi'; $ti=date("Y-m-d"); $ti=explode("-",$ti); $tim=explode("0",$ti[1]); echo'<meta http-equiv="refresh" content="0; URL=datatables_clients.php?dax=0&xerc=0&index=1&ay='.$tim[1].'&il='.$ti[0].'"">';
																											}
																										else
																											{	
																												echo'Məlumatı yerləşdirmək mümkün olmadı';
																												echo"INSERT INTO xerc(xer,tarix,isti) VALUES('".$xer."','".$tarix."','".$ixer."')";
																											}
																									}
																								
																							}
																						?>
																						<div align='center'>
																							<?=$tarix=date("Y-m-d H:i:s")?>
																							<form  method='post'>
																								<div class="col-md-10 col-lg-20" >	
																									<div class="form-group form-floating-label">
																										<input id="inputFloatingLabel" type="text" class="form-control input-solid" name='xer'  required>
																										<p for="inputFloatingLabel" class="placeholder">XƏRC</p>
																									</div>
																								</div>
																								<div class="col-md-10 col-lg-60">
																									<div class="form-group form-floating-label"><p style="float-left:1000px;font-size:15px;" ><b>XƏRC ISTIQAMƏTI</b></p>
																										<textarea style="width: id="inputFloatingLabel"  class="form-control input-solid" name='ixer'></textarea>
																									</div>
																								</div><br>
																								<div class="action">
																									<button class="btn btn-success" name='gonder'>DAXIL ET</button>
																								</div><br>	
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>	
															</td>
														</tr>
				<?php 
													} 
												if(isset($_GET['index']))
													{
				?>										<h1 style="font-size:50px;">Xərc cədvəlinə baxış</h1>
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="title">
																					<form method="post">
																						<?php
																							if(empty($_POST['il'])){$il=date("Y");} else{$il=$_POST['il'];}
																							if(isset($_GET['ay']) && $_GET['ay']=='1')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=1&il='.$il.'">Yanvar</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=1&il='.$il.'">Yanvar</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='2')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=2&il='.$il.'">Fevral</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=2&il='.$il.'">Fevral</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='3')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=3&il='.$il.'">Mart</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=3&il='.$il.'">Mart</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='4')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=4&il='.$il.'">Aprel</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=4&il='.$il.'">Aprel</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='5')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=5&il='.$il.'">May</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=5&il='.$il.'">May</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='6')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=6&il='.$il.'">Iyun</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=6&il='.$il.'">Iyun</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='7')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=7&il='.$il.'">Iyul</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=7&il='.$il.'">Iyul</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='8')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=8&il='.$il.'">Avqust</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=8&il='.$il.'">Avqust</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='9')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=9&il='.$il.'">Sentyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='10')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=10&il='.$il.'">Oktyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='11')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=11&il='.$il.'">Noyabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=11&il='.$il.'">Noyabr</a>|';}
																							if(isset($_GET['ay']) && $_GET['ay']=='12')
																								{echo'<b style="font-size:20px;"><a style="color:#FF0000;" href="datatables_clients.php?dax=0&xerc=0&index=1&ay=12&il='.$il.'">Dekabr</a>|</b>';}
																							else
																								{echo '<a href="datatables_clients.php?dax=0&xerc=0&index=1&ay=12&il='.$il.'">Dekabr</a>|';}?>
																							<select name="il" onchange="this.form.submit()">
																								<?php
																									if(!empty($_POST['il'])){echo'<option value="'.$_POST['il'].'">'.$_POST['il'].'</option>';}
																									else{echo'<option value="'.date("Y").'">'.date("Y").'</option>';}
																									for($iler=2019;$iler<2030;$iler++){echo'<option value"'.$iler.'">'.$iler.'</option>';}
																										
																								?>
																							</select>
																						</form>	
																				</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>İstiqamət</th>
																								<th>Xərc</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>İstiqamət</th>
																								<th>Xərc</th>
																								<th>Tarix</th>
																								<th>Əmir</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php
																								if(isset($_POST['silm']))
																									{
																										$sec=mysqli_query($i,"DELETE FROM xerc WHERE id='".$_POST['sil']."'");
																									}
																										
																								if(isset($_GET['ay']) && isset($_GET['il']))
																									{
																										$sec=mysqli_query($i,"SELECT * FROM xerc WHERE tarix like '%".$_GET['il']."-0".$_GET['ay']."%' ORDER BY id DESC");	
																									}
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0)
																									{
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td>'.$r.'</td>
																															<td>'.$info['xer'].'</td>
																															<td>'.$info['isti'].'</td>
																															<td>'.$info['tarix'].'</td>
																															<td><form method="post"><input type="hidden" name="sil" value="'.$info['id'].'"><button style="width:35px;tetx-align:center;" class=" btn-success" name="silm"><i class="icon-trash"></i></button></form></td>
																														</tr>';
																											}
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>	
																						</tbody>
																						<div>
																							<a href="datatables_clients.php?dax=0&xerc=0&insert=1"><button class="btn btn-success" name='yenilə'>YENI XƏRC <i class="icon-plus"></i></button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
				<?php 	
													} 
											}
										if(isset($_GET['gal']))
											{
												if(isset($_GET['index'])) 
													{ 
				?>										<h1 style="font-size:50px;">Qalıq mal cədvəlinə baxış</h1>
														<tr>
															<td>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-header">
																				<h4 class="card-title">Anbarda olan mallar</h4>
																			</div>
																			<div class="card-body">
																				<div class="table-responsive">
																					<table id="basic-datatables" class="display table table-striped table-hover" >
																						<thead>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Brend</th>
																								<th>Barkod</th>
																								<th>Mal</th>
																								<th>Qalıg</th>
																								<th>Maya dəyəri(1 ədəd)</th>
																								<th>Maya dəyəri(Ümumi)</th>
																							</tr>
																						</thead>
																						<tfoot>
																							<tr>
																								<th>SN</th>
																								<th>Anbar</th>
																								<th>Brend</th>
																								<th>Barkod</th>
																								<th>Mal</th>
																								<th>Qalıg</th>
																								<th>Maya dəyəri(1 ədəd)</th>
																								<th>Maya dəyəri(Ümumi)</th>
																							</tr>
																						</tfoot>
																						<tbody>
																							<?php
																								$sec=mysqli_query($i,"SELECT a.id AS pid,a.anbar,a.barkod,a.parak,a.top,a.galg,a.alis,a.gomruk,a.cixi,a.ad, a.foto, a.brend,a.Mdyer,a.migdar,a.tarix,b.id AS pi,b.ad AS brend_ad,c.id AS pis,c.anbar AS anbar_ad FROM product a, brend b,anbar c WHERE a.anbar=c.id && a.brend=b.id ORDER BY a.id DESC");
																								$info=mysqli_fetch_array($sec);
																								if(mysqli_num_rows($sec)>0);
																									{
																										$udayer=$info['Mdyer']*$info['galg'];
																										$r=0;
																										do
																											{
																												$r++;
																												echo'
																														<tr>
																															<td style="width:20px;">'.$r.'</td>
																															<td>'. $info['anbar_ad'].'</td>
																															<td>'. $info['brend_ad'].'</td>
																															<td>'. $info['barkod'].'</td>
																															<td>'. $info['ad'].'</td>
																															<td>'.$info['galg']. '</td>
																															<td>'. $info['Mdyer'].'</td>
																															<td>'.$udayer. '</td>
																														</tr>
																													';
																											}	
																										while($info=mysqli_fetch_array($sec));
																									}
																							?>	
																						</tbody>
																						<div>
																							<a href="http://localhost/stock/excel/Examples/anbqal.php" method="post"><button  class="btn btn-success" name='gondfe'>EXCEL <i class="fa fa-file-excel-o"></i></button></a>
																						</div><br>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
														</tr>						
						<?php
													} 
											}
											
									}
							}
					?>
				</div>
		</div>
	</div>		
		<?php include"footer.php"; ?>
		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="https://www.themekita.com">
								ThemeKita
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Help
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Licenses
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
				</div>				
			</div>
		</footer>
		
	</div>
						
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>