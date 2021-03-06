<?php $this->load->view('templates/header') ?>
<link href='<?php echo base_url('assets/calendar/js/main.css') ?>' rel='stylesheet' />
<script src='<?php echo base_url('assets/calendar/js/main.js') ?>'></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			now: '2020-09-07',
			scrollTime: '00:00', // undo default 6am scrollTime
			editable: true, // enable draggable events
			selectable: true,
			aspectRatio: 1.8,
			headerToolbar: {
				left: 'today prev,next',
				center: 'title',
				right: 'resourceTimelineDay,resourceTimelineThreeDays,timeGridWeek,dayGridMonth,listWeek'
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
			resourceAreaHeaderContent: 'Rooms',
			events: [{
					id: '1',
					resourceId: 'b',
					start: '2020-09-07T02:00:00',
					end: '2020-09-07T07:00:00',
					title: 'event 1'
				},
				{
					id: '2',
					resourceId: 'c',
					start: '2020-09-07T05:00:00',
					end: '2020-09-07T22:00:00',
					title: 'event 2'
				},
				{
					id: '3',
					resourceId: 'd',
					start: '2020-09-06',
					end: '2020-09-08',
					title: 'event 3'
				},
				{
					id: '4',
					resourceId: 'e',
					start: '2020-09-07T03:00:00',
					end: '2020-09-07T08:00:00',
					title: 'event 4'
				},
				{
					id: '5',
					resourceId: 'f',
					start: '2020-09-07T00:30:00',
					end: '2020-09-07T02:30:00',
					title: 'event 5'
				}
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

							<h4 class="mb-0">Calendar</h4>
							<p>The thumbnail details can be displayed in different styles.</p>

							<div id='calendar'></div>


						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php $this->load->view('templates/footer') ?>