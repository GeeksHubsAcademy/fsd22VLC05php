<?php
    function countdownDays($date) {
        $today = new DateTime();

        $eventDate = new DateTime($date);

        $daysLeft = $today->diff($eventDate);


        return $daysLeft->days;
    }

    echo countdownDays('02-06-2023');