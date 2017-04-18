<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Daftar User</h5>
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
								<th width="10%">No</th>
								<th>Nim</th>
								<th>Nama</th>
								<th>Jurusan</th>
								<th width="15%">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 0;
							foreach ($data as $user) :
							$no ++; ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $user['nim']; ?></td>
								<td><?php echo $user['nama']; ?></td>
								<td><?php echo $user['jurusan']; ?></td>
								<td>
									<div class="btn-group btn-group-animated">
                                		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
											<ul class="dropdown-menu animated bounceIn">
												<li><a href="#"><i class="icon-menu7"></i> Detail</a></li>
												<li><a href="#"><i class="icon-trash-alt"></i> Delete</a></li>
											</ul>
                            		</div>
                                </td>
							</tr>
						<?php endforeach ?>
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