<form class="form-horizontal"  action="http://localhost/project/admin/add_kandidat" method="post" accept-charset="utf-8" >
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Data Kandidat<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="text-semibold"><i class="icon-reading position-left"></i> Personal details</legend>

										<div class="form-group">
											<label class="col-lg-3 control-label">Nim</label>
											<div class="col-lg-9">
												<input type="text" name="nim" class="form-control" placeholder="Your nim">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Nama</label>
											<div class="col-lg-9">
												<input type="text" name="nama" class="form-control" placeholder="Your name">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Jurusan</label>
											<div class="col-lg-9">
												<select name="jurusan" class="form-control">
			                                		<option value="">Pilih Jurusan</option>
			                                		<option value="Teknik Informatika">Teknik Informatika</option>			      
			                            		</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Foto</label>
											<div class="col-lg-9">
												<div class="uploader"><input type="file" class="file-styled"><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-pink-400" style="user-select: none;">Choose File</span></div>
											</div>
										</div>

									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="text-semibold"><i class="icon-truck position-left"></i> Visi & Misi</legend>

										<div class="form-group">
											<label class="col-lg-3 control-label">Visi</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" name="visi" placeholder="Enter your visi here"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Misi</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" name="misi" placeholder="Enter your misi here"></textarea>
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit<i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</div>
				</form>