<?php
	include_once 'config.php';

	class Database extends Config {
	  // Fetch all or a single user from database
	  public function fetch($id = 0) {
	    $sql = 'SELECT * FROM project_details';
	    if ($id != 0) {
	      $sql .= ' WHERE project_id = :id'; // pdo with prepared statements value will be later :id
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(['id'=>$id]);
	    }else{
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
        }
	    $rows = $stmt->fetchAll();
	    return $rows;
	  }

	  // Insert an user in the database
	  public function insert($name, $admin_id, $version, $language, $level, $dlink, $plink, $description, $thumblink) {
	    $sql = "INSERT INTO project_details (project_name, admin_id, project_version, project_language, project_level, project_download_link, project_preview, project_description, project_thumbnail)  
		VALUES (:name, :version, :admin_id, :language, :level, :dlink, :plink, :description, :thumblink)";
	    $stmt = $this->conn->prepare($sql);
	    $stmt->execute(['name' => $name, 'language' => $language, 'admin_id' => $admin_id, 'version' => $version, 'level' => $level, 'dlink' => $dlink, 'plink' => $plink, 'description' => $description, 'thumblink' => $thumblink]);
	    return true;
	  }

	  // Update an user in the database
	  public function update($name, $admin_id, $version, $language, $level, $dlink, $plink, $description, $thumblink, $project_id) {
	    $sql = 'UPDATE project_details SET project_name = :name, project_version  = :version, admin_id =  :admin_id, project_language = :language, project_level = :level, project_download_link = :dlink, project_preview = :plink, project_description = :description, project_thumbnail = :thumblink WHERE project_id = :id';
	    $stmt = $this->conn->prepare($sql);
	    $stmt->execute([ 'id' => $project_id, 'name' => $name,  'language'=>$language, 'admin_id' => $admin_id, 'version' => $version, 'level' => $level, 'dlink' => $dlink, 'plink' => $plink, 'description' => $description, 'thumblink' => $thumblink]);
	    return true;
	  }

	  // Delete an user from database
	  public function delete($project_id) {
	    $sql = 'DELETE FROM project_details WHERE project_id = :id';
	    $stmt = $this->conn->prepare($sql);
	    $stmt->execute(['id' => $project_id]);
	    return true;
	  }
	}

?>
