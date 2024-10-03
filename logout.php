<?php
    session_start();

    if (isset($_POST['logout'])) {
        // Destroy session and clear session data
        $_SESSION = [];
        session_destroy();

        // Output the HTML and JavaScript for loading message
        echo "
        <html>
        <head>
            <style>
                /* Center the message on the page */
                #loadingMessage {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    font-size: 24px;
                    font-weight: bold;
                    color: #555;
                }
                
                /* Simple loading animation (spinner) */
                .spinner {
                    border: 8px solid #f3f3f3; /* Light grey */
                    border-top: 8px solid #555; /* Darker grey */
                    border-radius: 50%;
                    width: 60px;
                    height: 60px;
                    animation: spin 2s linear infinite;
                    margin-top: 20px;
                }

                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>
        </head>
        <body>
            <div id='loadingMessage'>
                Logging out...
                <div class='spinner'></div>
            </div>

            <script>
                // Redirect after 2 seconds
                setTimeout(function() {
                    window.location.href = 'index.php'; // Redirect to home page
                }, 2000); // 2 seconds delay
            </script>
        </body>
        </html>
        ";
        header('Location: index.php');
        exit();
    }
?>


