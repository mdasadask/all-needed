cd / .
cd Program Files\Google\Chrome\Application
chrome.exe --autoplay-policy=no-user-gesture-required



cd / .
cd Program Files\Google\Chrome\Application
chrome.exe --autoplay-policy=no-user-gesture-required

<!-- In navmenu.php -->

<style>
    #number_of_new_ticket_in_notification {
        background: red;
        color: #FFFFFF;
        border-radius: 25px;
        width: 22px;
        height: 21px;
        margin-top: -10px;
        font-size: 12px;
    }
</style>

<!-- number_of_new_ticket_in_notification -->
<li class="nav-item" style="margin-right:19px;">
    <a class="nav-link" onclick="notification_view()" id="notification_view"
        style="color: black;font-size: 18px; cursor: pointer;">
        <i class="fas fa-bell"></i>
        <strong id="number_of_new_ticket_in_notification">
            0
        </strong>
    </a>
</li>



<!-- audio_notification_sound -->
<audio style="display: none;" id="audio_notification_sound" controls>
    <source src="./notification_sound.mp3" type="audio/mpeg">
</audio>

<!-- Notification Modal -->
<div class="modal fade" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="notification_modal_label"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="width: 390px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notification_modal_header">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    You have <span style="color: red;" id="number_of_new_ticket_in_notification_modal"></span> new
                    ticket.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" onclick="notification_see_all()" class="btn btn-primary">See All</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    /**
         * Description: play_notification_sound()
         * @author: Md. Asad Sheikh Sujat <mdasadask@gmail.com>
         * Date: 21-11-2023
         */
    function play_notification_sound() {
        document.getElementById('audio_notification_sound').play();
    }

    // notification_view
    function notification_view() {
        $('#notification_modal').modal('show');
    }

    // notification_see_all
    function notification_see_all() {
        $('#notification_modal').modal('hide');
        // $.ajax({
        // 	url: "layouts/status_add.php",
        // 	method: "POST",
        // 	data: {
        // 		type: "notification_see_all",
        // 	},
        // 	success: function (data) {
        // 		$('#notification_modal').modal('show');
        // 		$('#notification_modal_body').html(data);
        // 	},
        // });
    }


    // in function success

    function agentInformationHeader() {
        $("#number_of_new_ticket_in_notification").text(result.new_ticket);
        $("#number_of_new_ticket_in_notification_modal").text(result.new_ticket);
        if (result.is_sound_hear_or_not) {
            play_notification_sound();
        }
    }
</script>





===================== Start Notification sound =====================
<?php

// notification_settings
// notification_ticket_log


// Delete from updateTicketStatus function 
// delete notification_ticket_log
mysqli_query($mysqli, "DELETE FROM notification_ticket_log WHERE unique_id = '{$parent_ref}'");

// in login page(condition if ($resultRow != 1 && $_SESSION['role'] == 'User') {}) 
$user_exist_in_notification_settings = mysqli_query($conn, "SELECT * FROM notification_settings WHERE user = '{$username['username']}'");
if (mysqli_num_rows($user_exist_in_notification_settings) < 1) {
    mysqli_query($conn, "INSERT INTO notification_settings (authorized_by, user) VALUES ('{$authorized_by}', '{$agent}')");
}

// In layouts/webhook-assign page
## Create notification_ticket_log for this ticket
mysqli_query($mysqli, "INSERT INTO notification_ticket_log (unique_id, user) VALUES ('{$unique_id}', '{$row_agent_data['user']}')");



// In header_action.php (In condition  if ($username != '' && $authorized_by != '' && $role != '') {} )

if ($new_ticket > 0) {
    $is_sound_hear_or_not = is_sound_hear_or_not($username, $new_ticket_sql);
    // $is_sound_hear_or_not = $new_ticket;
} else {
    $is_sound_hear_or_not = false;
}


/**
 * @abstract is_sound_hear_or_not
 * @param $username, $new_ticket_sql
 * @return mixed true, false
 * @author: Md. Asad Sheikh Sujat <mdasadask@gmail.com>
 * Date: 28-11-2023
 */

function is_sound_hear_or_not($username, $new_ticket_sql)
{
    global $mysqli;
    $unique_id_array = [];
    $new_ticket_result = mysqli_query($mysqli, $new_ticket_sql);
    while ($new_ticket_row = mysqli_fetch_assoc($new_ticket_result)) {
        array_push($unique_id_array, $new_ticket_row["unique_id"]);
    }

    $user_exist_in_notification_settings = mysqli_query($mysqli, "SELECT * FROM notification_settings WHERE user = '{$username}'");

    if (mysqli_num_rows($user_exist_in_notification_settings) > 0) {
        while ($user_settings_row = mysqli_fetch_assoc($user_exist_in_notification_settings)) {
            $sound_hear = $user_settings_row['sound_hear'];
            if ($sound_hear == 1) {
                $sound_repeat = $user_settings_row['sound_repeat'];
                if ($sound_repeat == 1) {
                    $is_sound_hear_or_not = true;
                } else {
                    $is_sound_hear_or_not = is_already_hear_one_time($unique_id_array);
                }
            } else {
                $is_sound_hear_or_not = false;
            }
        }
    } else {
        $is_sound_hear_or_not = false;
    }

    notification_ticket_log_update($unique_id_array);

    return $is_sound_hear_or_not;
}

/**
 * @abstract is_already_hear_one_time
 * @param $unique_id_array
 * @return mixed true, false
 * @author: Md. Asad Sheikh Sujat <mdasadask@gmail.com>
 * Date: 28-11-2023
 */

function is_already_hear_one_time($unique_id_array)
{
    global $mysqli;
    foreach ($unique_id_array as $unique_id) {
        $notification_ticket_log_row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM notification_ticket_log WHERE unique_id = '{$unique_id}'"));
        if ($notification_ticket_log_row["is_notify"] == 1) {
            $is_already_hear_one_time = false;
        } else {
            $is_already_hear_one_time = true;
        }
    }
    return $is_already_hear_one_time;
}

/**
 * @abstract notification_ticket_log_update
 * @param $unique_id_array
 * @return void
 * @author: Md. Asad Sheikh Sujat <mdasadask@gmail.com>
 * Date: 28-11-2023
 */
function notification_ticket_log_update($unique_id_array)
{
    global $mysqli;
    foreach ($unique_id_array as $unique_id) {
        mysqli_query($mysqli, "UPDATE notification_ticket_log SET is_notify = '1' WHERE unique_id = '{$unique_id}'");
    }
}



?>
===================== End Notification sound =====================