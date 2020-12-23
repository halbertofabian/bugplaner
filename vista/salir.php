<?php
session_destroy();
echo
    '
            <script>
                window.location.href = "' . HTTP_HOST . '";
            </script>';
