<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$visitorCount = 0;
$counterFile = fopen(__DIR__ . '/storage/visitors.txt', 'c+');

if ($counterFile !== false) {
    if (flock($counterFile, LOCK_EX)) {
        $visitorCount = max(0, (int) stream_get_contents($counterFile));

        if (empty($_SESSION['visitor_counted'])) {
            $newVisitorCount = $visitorCount + 1;
            rewind($counterFile);
            ftruncate($counterFile, 0);

            if (fwrite($counterFile, (string) $newVisitorCount) !== false && fflush($counterFile)) {
                $visitorCount = $newVisitorCount;
                $_SESSION['visitor_counted'] = true;
            }
        }

        flock($counterFile, LOCK_UN);
    }

    fclose($counterFile);
}