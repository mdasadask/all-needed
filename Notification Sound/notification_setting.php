<?php
session_start();
$username = $_SESSION['username'];
?>

<section class="content-header">
	<div class="box box-secondary">
		<div class="box-body">
			<table id="notification_settings_table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>SL</th>
						<th>User Name</th>
						<th>Sound Hear</th>
						<th>Sound Repeat</th>
					</tr>
				</thead>
				<tbody id="notification_settings_details_body"></tbody>
			</table>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
		$('#notification_settings_table').DataTable();
		notification_settings_details_body();
	});

	function notification_settings_details_body() {
		let username = "<?= $username; ?>";
		$.ajax({
			url: "pages/notification_settings_action.php",
			type: 'POST',
			data: {
				username: username,
				request_for: "notification_settings_details_body"
			},
			dataType: 'html',
			success: function (result) {
				console.log(result);
				$('#notification_settings_details_body').html(result);
			}
		});
	}

	function sound_hear_check() {
		let username = "<?= $username; ?>";
		$.ajax({
			url: "pages/notification_settings_action.php",
			type: 'POST',
			data: {
				username: username,
				request_for: "sound_hear_check"
			},
			dataType: 'json',
			success: function (result) {
				notification_settings_details_body();
			}
		});
	}

	function sound_hear_uncheck() {
		let username = "<?= $username; ?>";
		$.ajax({
			url: "pages/notification_settings_action.php",
			type: 'POST',
			data: {
				username: username,
				request_for: "sound_hear_uncheck"
			},
			dataType: 'json',
			success: function (result) {
				notification_settings_details_body();
			}
		});
	}

	function sound_repeat_check() {
		let username = "<?= $username; ?>";
		$.ajax({
			url: "pages/notification_settings_action.php",
			type: 'POST',
			data: {
				username: username,
				request_for: "sound_repeat_check"
			},
			dataType: 'json',
			success: function (result) {
				notification_settings_details_body();
			}
		});
	}

	function sound_repeat_uncheck() {
		let username = "<?= $username; ?>";
		$.ajax({
			url: "pages/notification_settings_action.php",
			type: 'POST',
			data: {
				username: username,
				request_for: "sound_repeat_uncheck"
			},
			dataType: 'json',
			success: function (result) {
				notification_settings_details_body();
			}
		});
	}
</script>