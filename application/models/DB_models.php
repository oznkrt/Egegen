<?php
class DB_models extends CI_Model
{
    
    public function get_datas($where_is, $datas){
        if($where_is==''){
           return $this->db->get($datas)->result();
        }else{
           return $this->db->where($where_is)->get($datas)->result();
        }
    }
    public function registerOrInsert($datas,$table)
    {
        return $this->db->insert($table, $datas);
    }
    public function update_data($data,$table,$where){
        if($where!=''){
            return  $this->db->where($where)->update($table,$data);

        }else{
            return  $this->db->update($table,$data);
        }
    }
    public function count_data($table){
        return $this->db->count_all_results($table);
    }
    public function delete($where,$table){
        return $this->db->where($where)->delete($table);
    }
    
}
?>
