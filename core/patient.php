<?php 

include 'base.php';

// Patient Model
// Clase del Core
class patient extends base
{
    public function __construct()
    {
        // constructing the parent gives us 
        // access to the db through $this->db
        // which is a native php mysqli interface
        parent::__construct();
    }

    public function list_all()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients');

        return parent::result_array($result);
    }

    public function list_mayor_50()
    {
        $result_array = array();
        $result = $this->db->query('select * from patients where patient_age > 50');

        return parent::result_array($result);
    }

    public function get_grouped_by_age()
    {
        $result_array = array();
        $result = $this->db->query('SELECT patient_age,COUNT(*) AS total FROM patients GROUP BY patient_age');
        
        return parent::result_array($result);
    }
}