<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Basic datatable</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
						
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nim</th>
								<th>Nama</th>
								<th>Jurusan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>
									<div class="btn-group">
		                    			<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                    			<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
		                    			</button>

		                    			<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
											<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
											<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
										</ul>
									</div>
                                </td>

							</tr>
							<tr>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>...</td>
								<td>
									<div class="btn-group">
		                    	<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                    	<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
		                    	</button>

		                    	<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
									<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
									<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
								</ul>
							</div>
                                </td>

							</tr>
						</tbody>
					</table>
				</div>
				<script type="text/javascript">
              $('.datatable-basic').DataTable({
	autoWidth: false,
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': '→', 'previous': '←' }
    },
    drawCallback: function () {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
    },
    preDrawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
    }
});
            </script>