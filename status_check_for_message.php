<?php
error_reporting(0);

session_start();
require "config.php";

$to_id = $_POST["to_id"];
#echo $to_id;

$sql1 = "SELECT * FROM blocked where reg = $_SESSION[reg] and blocked_id = $to_id;";
$q1 = mysqli_query($con, $sql1);
$blocked_or_not = mysqli_num_rows($q1);


$sql2 = "SELECT * FROM blocked where reg = $to_id and blocked_id = $_SESSION[reg];";
$q2 = mysqli_query($con, $sql2);
$I_am_blocked = mysqli_num_rows($q2);



$status_sql = "SELECT status FROM status where reg = $to_id;";
$status_query = mysqli_query($con, $status_sql);
$status_check = mysqli_fetch_assoc($status_query);
$status_info = $status_check["status"];

$start_chat = "start_chat.php?target=" . $to_id;

$make_report = "report.php?target=".$to_id;

$old_chats = "old_chats.php?target=".$to_id;

if ($I_am_blocked == 1) {
    echo <<<_END
    <button class='btn-2 block-btn'>I am Blocked</button>
    <a href="$make_report"><button class='btn-2 report-btn'>Report</button></a>
    <a href="$old_chats"><button class='btn-2 message-btn-in'>Older Messages</button></a>
    
    _END;
} else {
    if ($blocked_or_not == 1) {
        $unblock_url = "unblock.php?target=" . $to_id;
        echo <<<_END
        <a href='$unblock_url'><button class='btn-2 block-btn'>Unblock</button></a>
        
        <a href="$make_report"><button class='btn-2 report-btn'>Report</button></a>

        <a href="$old_chats"><button class='btn-2 message-btn-in'>Older Messages</button></a>
        _END;
    } else {
        $block_url = "block.php?target=" . $to_id;
        if ($status_info == "Inactive") {
            echo <<<_END
        <a href='$start_chat'><button class="btn-2 message-btn-in">Message</button></a>
    
        <a href='$block_url'><button class="btn-2 block-btn">Block</button></a>
    
        <a href="$make_report"><button class='btn-2 report-btn'>Report</button></a>
        _END;
        }
        if ($status_info == "Active") {
            echo <<<_END
        <a href='$start_chat'><button class="btn-2 message-btn-ac">Message</button></a>
    
        <a href='$block_url'><button class="btn-2 block-btn">Block</button></a>

        <a href="$make_report"><button class='btn-2 report-btn'>Report</button></a>
        _END;
        }

    }

}

?>