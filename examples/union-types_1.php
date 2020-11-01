<?php

function setTimestamp(DateTime|DateTimeImmutable $date, int $timestamp): DateTime|DateTimeImmutable {
    if ($date instanceof DateTime) {
        $date->setTimestamp($timestamp);
        return $date;
    } else {
        $newDate = $date->setTimestamp($timestamp);
        return $newDate;
    }
}

echo setTimestamp(new DateTime(), time() + 1000)->format('Y-m-d H:i:s') . "\n";
echo setTimestamp(new DateTimeImmutable(), time() + 1000)->format('Y-m-d H:i:s') . "\n";
