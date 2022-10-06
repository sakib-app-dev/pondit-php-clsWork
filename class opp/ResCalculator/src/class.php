<?php

namespace src\class;
class Cgpa{
    public function cgpa1($num){
        if ($num >= 80) {
            return "GPA: A+";
            } elseif ($num >= 70) {
                return "GPA: A";
            } elseif ($num >= 60) {
                return "GPA: A-";
            } elseif ($num >= 50) {
                return "GPA: B";
            } elseif ($num >= 40) {
                return "GPA: C";
            } elseif ($num >= 40) {
                return "GPA: D";
            } elseif ($num < 40) {
                return "Failed";
            }
    }
}