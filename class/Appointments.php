<?php 
namespace appointmentSystem;

require_once("DB.php");
use PDO;

class Appointments {
    public function viewAllMyAppointments($user_id, $is_staff = false){
        // SELECT * FROM appointments WHERE for_id = ?
        $db = new DB;

        if($is_staff){
            $inner_join = "for";
        }
        else {
            $inner_join = "with";
        }

        $appointments = $db->preparedQuery("SELECT appointments.*, users.role, users.forename, users.surname FROM appointments INNER JOIN users ON users.id = appointments.$inner_join  WHERE `for` = ? OR `with` = ? AND cancelled = 0  ORDER BY date DESC", array($user_id, $user_id))->fetchAll(PDO::FETCH_OBJ);

        return $appointments;
    }

    public function viewIndividualAppointment($appointment_id){
        // SELECT * FROM appointments WHERE for_id = ?
        $db = new DB;

        $appointments = $db->preparedQuery("SELECT appointments.*, users.role, users.forename, users.surname 
        FROM appointments 
        INNER JOIN users ON users.id = appointments.with
        WHERE appointments.id = ?", array($appointment_id))->fetch(PDO::FETCH_OBJ);

        return $appointments;
    }

    public function viewIndividualAppointmentsNotes($appointment_id){
        $db = new DB;
        $appointments_notes = $db->preparedQuery("SELECT * FROM appointments_notes
        WHERE appointment_id = ?
        ", array($appointment_id))->fetchAll(PDO::FETCH_OBJ);

        return $appointments_notes;
    }

    public function addAppointment($date, $start_time, $for, $with) {
        $db = new DB;
        $query = $db->preparedQuery("INSERT INTO appointments (`date`, start_time, `for`, `with`) VALUES (?, ?, ?, ?)", array($date, $start_time, $for, $with));

        // if(!$this->checkForOverlappingAppointments($start_time)){
        //     //INSERT INTO appointments (date, start_time, for, with) VALUES (?, ?, ?, ?)
        // }
        // else {
        //     return false;
        // }
    }
    
    public function switchForDeps($with){
        switch($with){
            case "smm":
                return "Senior Management Member";
                break;
            case "hwb":
                return "Health & Wellbeing";
                break;
            case "ast":
                return "Academic Support Tutor";
                break;
            case "student":
                return "Student";
                break;
            case "professor":
                return "Professor";
                break;
        }
    }

    public function cancelAppointment($appointment_id) {
        $db = new DB;

        if($db->preparedQuery("UPDATE appointments SET cancelled = 1 WHERE id = ?", array($appointment_id))) {
            return true;
        }
        else {
            return false;
        }
    }

    public function addNoteToAppointment($appointment_id, $added_note) {
        $db = new DB;

        $db->preparedQuery("INSERT INTO appointments_notes (appointment_id, note) VALUES (?, ?) ", array($appointment_id, $added_note));
        // INSERT INTO appointment_notes (appointment_id, note) VALUES (?, ?)
    }

    public function acceptAppointment($appointment_id) {
        // UPDATE appointments SET accepted = true WHERE appointment_id = ?
    }

    public function requestTimeChangeForAppointment($time_change, $appointment_id) {
        // UPDATE appointments SET start_time = ? WHERE id = ?
    }

    public function checkForOverlappingAppointments($appointment_1, $appointment_2 = null) {
        if($appointment_1 == $appointment_2 && $appointment_2 != null){
            return true;
        }
        
        // SELECT * FROM appointments WHERE for = ?

        // TODO: Check all appointments for user
        // Loop through and check start time for both

        return false;
    }

    public function referAppointmentToOtherStaff($staff_to_refer, $appointment_id) {
        // UPDATE appointments SET with = ? WHERE id = ?
    }

    public function countCancelledAppointments() {
        // loop through all appointments, count cancelled
        // SELECT id FROM appointments WHERE cancelled = true;

        // COUNT
    }
}

?>