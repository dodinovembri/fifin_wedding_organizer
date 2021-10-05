<?php $this->load->view('templates/header') ?>
<link href='<?php echo base_url('assets/calendar/js/main.css') ?>' rel='stylesheet' />
<script src='<?php echo base_url('assets/calendar/js/main.js') ?>'></script>
<?php if (isset($now)) {
	$now = $now;
} else {
	$now = date("Y-m-d");
}

?>


<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			now: <?php echo json_encode($now) ?>,
			scrollTime: '00:00', // undo default 6am scrollTime
			editable: true, // enable draggable events
			selectable: true,
			aspectRatio: 1.8,
			headerToolbar: {
				left: '',
				center: '',
				right: ''
			},
			initialView: 'dayGridMonth',
			views: {
				resourceTimelineThreeDays: {
					type: 'resourceTimeline',
					duration: {
						days: 3
					},
					buttonText: '3 days'
				}
			},
			events: [
				<?php foreach ($calendars as $key => $value) { ?> {
						start: <?php echo json_encode($value->start_date)  ?>,
						end: <?php echo json_encode($value->end_date)  ?>,
						title: <?php echo json_encode($value->title)  ?>
					},
				<?php } ?>
			]
		});

		calendar.render();
	});
</script>
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 1100px;
		margin: 50px auto;
	}
</style>
<div class="body">
	<?php $this->load->view('components/head') ?>
	<div role="main" class="main">
		<div id="examples" class="container py-2">

			<div class="row">
				<div class="col">

					<div class="row">
						<div class="col">

							<h4 class="mb-0"><?php echo $building->name ?></h4>
							<p>The thumbnail details can be displayed in different styles.</p>
							<form action="<?php echo base_url('calendar/show/'); echo $building->id; ?>" method="post">
								<input type="hidden" name="search" id="" value="1">
								<select name="month" id="" class="form-control" style="width: 8%; display:inline-block; margin-left: 3%">
									<?php
									$bulan = array(
										'01' => 'Januari',
										'02' => 'Februari',
										'03' => 'Maret',
										'04' => 'April',
										'05' => 'Mei',
										'06' => 'Juni',
										'07' => 'Juli',
										'08' => 'Agustus',
										'09' => 'September',
										'10' => 'Oktober',
										'11' => 'November',
										'12' => 'Desember'
									);
									if ($search == 1) { ?>
										<option value="<?php echo $month ?>"><?php echo $bulan[$month]; ?></option>
									<?php } ?>
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
								<select name="year" id="" class="form-control" style="width: 5%; display:inline-block">
									<?php if ($search == 1) { ?>
										<option value="<?php echo $year ?>"><?php echo $year; ?></option>
									<?php } ?>
									<?php foreach ($years as $key => $value) { ?>
										<option value="<?php echo $value->year ?>"><?php echo $value->year ?></option>
									<?php } ?>
								</select>
								<button class="form-control" type="submit" style="width: 4%; display:inline-block">Go</button>
							</form><br>
							<div id='calendar' style="margin-top: -25px;"></div>

							

						</div>
					</div>

				</div>
			</div>

			 <!-- Card start -->
			 <div class="card">
            <div class="card-header">
                <div class="card-title">Order List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php $this->load->view('admin/components/flash') ?>
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Building</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Guest</th>
                                <th>Price</th>
                                <th>Payment Note</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($orders as $key => $value) {
                                $no++; ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $value->title; ?></td>
									<td><?php  $CI = &get_instance();
                                        $CI->load->model(['BuildingModel']);
                                        $al = $CI->BuildingModel->getById($value->building_id)->row();
                                        echo $al->name; ?>
                                    </td>
                                    <td><?php echo $value->start_date; ?></td>
                                    <td><?php echo $value->end_date; ?></td>
                                    <td><?php echo $value->total_guest; ?></td>
                                    <td><?php echo $value->price; ?></td>
                                    <td><a href=""><?php echo $value->payment_note; ?></a></td>
                                    <td><?php if ($value->status == 1) {
                                        echo "Unpaid";
                                    }elseif ($value->status == 2) {
                                        echo "Paid";
                                    }  ?></td>
                                </tr>
                                <!-- Modal start -->
                                <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="<?php echo base_url('admin/order/destroy/');
                                                            echo $value->id; ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Card end -->

		</div>
	</div>
</div>
<?php $this->load->view('templates/footer') ?>