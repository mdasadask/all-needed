<?php
session_start();
include '../config/dbconfig.php';
$user = $_SESSION['username'];

if ($_POST['request_for'] == "sound_hear_check") {
    mysqli_query($conn, "UPDATE notification_settings SET sound_hear = '1' WHERE user = '{$user}'");
    $response = array('status' => 'success', 'msg' => 'sound_hear_checked');
    echo json_encode($response);
}

if ($_POST['request_for'] == "sound_hear_uncheck") {
    mysqli_query($conn, "UPDATE notification_settings SET sound_hear = '0' WHERE user = '{$user}'");
    $response = array('status' => 'success', 'msg' => 'sound_hear_unchecked');
    echo json_encode($response);
}

if ($_POST['request_for'] == "sound_repeat_check") {
    mysqli_query($conn, "UPDATE notification_settings SET sound_repeat = '1' WHERE user = '{$user}'");
    $response = array('status' => 'success', 'msg' => 'sound_repeat_checked');
    echo json_encode($response);
}

if ($_POST['request_for'] == "sound_repeat_uncheck") {
    mysqli_query($conn, "UPDATE notification_settings SET sound_repeat = '0' WHERE user = '{$user}'");
    $response = array('status' => 'success', 'msg' => 'sound_repeat_unchecked');
    echo json_encode($response);
}



if ($_POST['request_for'] == "notification_settings_details_body") {
    $serial = 1;
    $user_exist_in_notification_settings_sql = "SELECT * FROM notification_settings WHERE user = '{$user}'";
    $user_exist_in_notification_settings = mysqli_query($conn, $user_exist_in_notification_settings_sql);
    if (mysqli_num_rows($user_exist_in_notification_settings) > 0) {
        while ($user_settings_row = mysqli_fetch_assoc($user_exist_in_notification_settings)) {
            $sound_hear = $user_settings_row['sound_hear'];
            $sound_repeat = $user_settings_row['sound_repeat'];
            ?>
            <tr>
                <td>
                    <?= $serial++; ?>
                </td>
                <td>
                    <?= $user; ?>
                </td>
                <?php if ($sound_hear == 1) { ?>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sound_hear_uncheck"
                                onclick="sound_hear_uncheck()" checked>
                            <label class="form-check-label" for="sound_hear_uncheck">Sound Hear</label>
                        </div>
                    </td>
                <?php } else { ?>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sound_hear_check"
                                onclick="sound_hear_check()">
                            <label class="form-check-label" for="sound_hear_check">Sound Not Hear</label>
                        </div>
                    </td>
                <?php } ?>

                <?php if ($sound_hear == 1 && $sound_repeat == 1) { ?>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sound_repeat_uncheck" checked
                                onclick="sound_repeat_uncheck()">
                            <label class="form-check-label" for="sound_repeat_uncheck">Sound Repeat</label>
                        </div>
                    </td>
                <?php } else if ($sound_hear == 1 && $sound_repeat != 1) { ?>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="sound_repeat_check"
                                    onclick="sound_repeat_check()">
                                <label class="form-check-label" for="sound_repeat_check">Sound Not Repeat</label>
                            </div>
                        </td>
                <?php } else { ?>
                        <td></td>
                <?php } ?>
            </tr>
        <?php }
    }
}
