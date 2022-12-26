<?php

session_start();

session_destroy();

header("Location: /phpLessons/13_sessions.php");
