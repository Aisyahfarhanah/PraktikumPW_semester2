<?php
function kelulusan($_nilai_akhir)
{
    if ($_nilai_akhir > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($_nilai_akhir)
{
    if ($_nilai_akhir > 85) {
        return 'A';
    } elseif ($_nilai_akhir > 70) {
        return 'B';
    } elseif ($_nilai_akhir > 56) {
        return 'C';
    } elseif ($_nilai_akhir > 36) {
        return 'D';
    } elseif ($_nilai_akhir > 0) {
        return 'E';
    } else {
        return 'I';
    }
}

function predikat($_grade)
{
    if ($_grade == 'A') {
        return 'Sangat Memuaskan';
    } elseif ($_grade == 'B') {
        return 'Memuaskan';
    } elseif ($_grade == 'C') {
        return 'Cukup';
    } elseif ($_grade == 'D') {
        return 'Kurang';
    } elseif ($_grade == 'E') {
        return 'Sangat Kurang';
    } else {
        return 'Tidak Ada';
    }
}
