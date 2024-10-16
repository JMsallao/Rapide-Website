<?php 
include('../../sessioncheck.php');
include('../../header.php');
include('../../connection.php');

// Fetch admin ID (you can adjust this based on how you identify the admin in your database)
$admin_query = mysqli_query($conn, "SELECT id FROM usertable WHERE is_admin = 1 LIMIT 1");
$admin_row = mysqli_fetch_assoc($admin_query);
$recipient_id = $admin_row['id']; // Admin ID as the recipient

$sender_id = $_SESSION['id']; // Current logged-in user ID

// Fetching messages between the user (sender) and the admin (recipient)
$chatq = mysqli_query($conn, "SELECT * FROM message WHERE (sender_id='$sender_id' AND recipient_id='$recipient_id') OR (sender_id='$recipient_id' AND recipient_id='$sender_id') ORDER BY created_at ASC");
?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php include('room.php'); ?>
        </div>
    </div>
    <?php include('room_modal.php'); ?>
    <?php include('out_modal.php'); ?>
    <?php include('modal.php'); ?>

    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>
    <script src="../js/dataTables.responsive.js"></script>
    <script>
    $(document).ready(function() {
        displayChat();

        $(document).on('click', '#send_msg', function() {
            var sender_id = <?php echo $sender_id; ?>;
            var recipient_id = <?php echo $recipient_id; ?>;
            if ($('#chat_msg').val() == "") {
                alert('Please write a message first');
            } else {
                var msg = $('#chat_msg').val();
                $.ajax({
                    type: "POST",
                    url: "send_message.php",
                    data: {
                        sender_id: sender_id,
                        recipient_id: recipient_id,
                        msg: msg
                    },
                    success: function() {
                        $('#chat_msg').val("");
                        displayChat();
                    }
                });
            }
        });

        $(document).keypress(function(e) {
            if (e.which == 13) {
                $("#send_msg").click();
            }
        });

        function displayChat() {
            var sender_id = <?php echo $sender_id; ?>;
            var recipient_id = <?php echo $recipient_id; ?>;
            $.ajax({
                url: 'fetch_chat.php',
                type: 'POST',
                async: false,
                data: {
                    sender_id: sender_id,
                    recipient_id: recipient_id,
                    fetch: 1,
                },
                success: function(response) {
                    $('#chat_area').html(response);
                    $("#chat_area").scrollTop($("#chat_area")[0].scrollHeight);
                }
            });
        }
    });
    </script>
</body>
</html>
