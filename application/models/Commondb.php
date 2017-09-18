<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commondb
 *
 * @author User
 */
class Commondb extends CI_Model {

    public function login_check($username) {
        $res = $this->db->query("select * from users where email = '$username'");
        if ($res) {
            return $res->result_array();
        } else {
            return null;
        }
    }

    public function insertRow($data, $table_name) {
        $this->db->insert($table_name, $data);
        return $this->db->insert_id();
    }

    public function updateRow($data, $where, $table_name) {
        $this->db->update($table_name, $data, $where);
    }

    public function getTableData($table, $where) {
        $res = $this->db->get_where($table, $where);
        if ($res) {
            return $res->result_array();
        } else {
            return null;
        }
    }
    
    public function getCoach($id) {
        $res = $this->db->query(" SELECT u.id as id, u.fname as fname, u.lname as lname, u.email as email, s.sport_name as sports, (SELECT ROUND(AVG(avg_rating), 1) FROM `ratings` WHERE coach_id = u.id) as rating, (SELECT count(*) FROM `ratings` WHERE coach_id = u.id) as reviewcount, (SELECT ROUND(AVG(motivation), 1) FROM `ratings` WHERE coach_id = u.id) as motivation, (SELECT ROUND(AVG(technical_skills), 1) FROM `ratings` WHERE coach_id = u.id) as technical_skills, (SELECT ROUND(AVG(punctuality), 1) FROM `ratings` WHERE coach_id = u.id) as punctuality, (SELECT ROUND(AVG(communication), 1) FROM `ratings` WHERE coach_id = u.id) as communication FROM users u, sports s WHERE u.sports = s.id AND u.status = 0 AND u.user_role = 2 AND u.id = $id ORDER BY rating DESC ");
        if ($res) {
            return $res->row_array();
        } else {
            return null;
        }
    }
    
    public function getCoachReviews($id) {
        $res = $this->db->query(" SELECT *, (SELECT CONCAT(fname, '', lname) FROM `users` WHERE id = ratings.user_id) as rated_by FROM `ratings` WHERE coach_id = $id ORDER BY `ratings`.`created_time` DESC ");
        if ($res) {
            return $res->result_array();
        } else {
            return null;
        }
    }

    public function getCoaches() {
        $res = $this->db->query(" SELECT u.id as id, u.fname as fname, u.lname as lname, u.email as email, s.sport_name as sports, (SELECT ROUND(AVG(avg_rating), 1) FROM `ratings` WHERE coach_id = u.id) as rating, (SELECT count(*) FROM `ratings` WHERE coach_id = u.id) as reviewcount FROM users u, sports s WHERE u.sports = s.id AND u.status = 0 AND u.user_role = 2 ORDER BY rating DESC ");
        if ($res) {
            return $res->result_array();
        } else {
            return null;
        }
    }
    
    public function getSearchCoaches($value) {
        $res = $this->db->query(" SELECT u.id as id, u.fname as fname, u.lname as lname, u.email as email, s.sport_name as sports, (SELECT ROUND(AVG(avg_rating), 1) FROM `ratings` WHERE coach_id = u.id) as rating, (SELECT count(*) FROM `ratings` WHERE coach_id = u.id) as reviewcount FROM users u, sports s WHERE u.sports = s.id AND u.status = 0 AND u.user_role = 2 AND $value ORDER BY rating DESC ");
        if ($res) {
            return $res->result_array();
        } else {
            return null;
        }
    }

}
