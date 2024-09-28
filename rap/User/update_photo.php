<?php
include ("connection.php");
include ("sessioncheck.php");

if (isset($_POST['update_photo'])) {
    $id = $_POST['id'];

    if (!isset($_FILES['image_file']) || $_FILES['image_file']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>alert('Image does not exist.');
        window.location='admin_setting.php';
        </script>";
        exit();
    } else {
        $file_name = $_FILES['image_file']['name'];
        $file_size = $_FILES['image_file']['size'];
        $tmpname = $_FILES["image_file"]["tmp_name"];

        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($imageExtension, $validImageExtensions)) {
            echo "<script>alert('Invalid image extension.');
            window.location='user_profile.php';
            </script>";
            exit();
        } else if ($file_size > 2000000) {
            echo "<script>alert('Image size is too large.');
            window.location='user_profile.php';
            </script>";
            exit();
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            $uploadPath = 'profile_picture/' . $newImageName;

            if (!file_exists('profile_picture')) {
                mkdir('profile_picture', 0777, true);
            }

            if (move_uploaded_file($tmpname, $uploadPath)) {
                $stmt = $conn->prepare("UPDATE usertable SET image_file = ? WHERE id = ?");
                if ($stmt) {
                    $stmt->bind_param("si", $newImageName, $id);
                    if ($stmt->execute()) {
                        echo "<script>
                        alert('Profile picture updated successfully.');
                        window.location='user_profile.php';
                        </script>";
                    } else {
                        echo "<script>
                        alert('Database error: failed to update profile picture.');
                        window.location='user_profile.php';
                        </script>";
                    }
                    $stmt->close();
                } else {
                    echo "<script>
                    alert('Database error: failed to prepare statement.');
                    window.location='user_profile.php';
                    </script>";
                }
            } else {
                echo "<script>
                alert('Failed to upload image.');
                window.location='user_profile.php';
                </script>";
            }
        }
    }
}

$conn->close();
?>