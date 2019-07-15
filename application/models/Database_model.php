<?php
	class Database_model extends CI_Model {

		////////////////////// INSERT / UPDATE Query Functions ////////////////////////
		
		// save function
		public function save($tablename,$data, $pk = '',$id='')
		{
			try{ insert_table($tablename,$data); }
	       
	   		catch(Exception $e){  update_table($tablename,$data, $pk);  }
		}
	
		// update function
		public function update($tablename,$data,$pk,$id)
		{
			$this->db->where($pk, $id);
			$this->db->update($tablename, $data);
			return true;
		}

		// insert function
	 	public function insert($tablename,$data)
	 	{
			$this->db->insert($tablename,$data);
			return true;
		}

		////////////////////// SELECT Query Functions ////////////////////////

		// find a specific data 
		public function find($table, $id) 
		{
			return $this->db->query('SELECT * from ' . $table . ' WHERE emp_id = ' . $id . '')->result_array();
		}

		// find all data from a specific table
		public function findAll($table, $select = '*') 
		{
			$query = $this->db->select($select);
			$query = $this->db->get($table);
			return $query->row_array();
		}
		
		////////////////////// DELETE Query Functions ////////////////////////

	}












