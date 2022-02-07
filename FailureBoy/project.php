<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');

include_once 'db.php';
// get http method
$api = $_SERVER['REQUEST_METHOD'];
$id = intval($_GET['id'] ??''); // intval(32.1), intval(32.5) output alwayas 32, if we pass string output wil be 0; 
$project = new Database();
// fetch project data
if ($api == 'GET') {
	if ($id != 0) {
		$data = $project->fetch($id);
	} else {
		$data = $project->fetch();
	}
    // echo "<pre>";
	// print_r($data) ;
    // echo "</pre>";
	echo json_encode($data);
}

// Add a new project into database
if ($api == 'POST') {
	$name = $project->test_input($_POST['name']);
	$version = $project->test_input($_POST['version']);
	$language = $project->test_input($_POST['langugae']);
    $level = $project->test_input($_POST['level']);
    $dlink = $project->test_input($_POST['dlink']);
    $plink = $project->test_input($_POST['plink']);
    $description = $project->test_input($_POST['description']);
    $thumblink = $project->test_input($_POST['thumblink']);
    $admin_id = $project->test_input($_POST['admin_id']);
    // $name = "Work Management";
	// $version = '1';
	// $language = 'html css php';
    // $level = "Medium";
    // $dlink = 'www.linkcom';
    // $plink = 'www.linkcom';
    // $description = "I love coding";
    // $thumblink =  "www.thumblink.com";
    // $admin_id = '1';
	if ($project->insert($name, $admin_id, $language, $version, $level, $dlink, $plink, $description, $thumblink)) {
		echo $project->message('project added successfully!',true);
	} else {
		echo $project->message('Failed to add an project!',false);
	}
}

// Update an project in database
if ($api == 'PUT') {
	parse_str(file_get_contents('php://input'), $post_input); // parse_str query string into variable/array Example : parse_str("name=Sajid&age=43",$myArray); give print: $echo $myArray 
    $name = $project->test_input($_POST['name']);
    $version = $project->test_input($_POST['version']);
    $language = $project->test_input($_POST['langugae']);
    $level = $project->test_input($_POST['level']);
    $dlink = $project->test_input($_POST['dlink']);
    $plink = $project->test_input($_POST['plink']);
    $description = $project->test_input($_POST['description']);
    $thumblink = $project->test_input($_POST['thumblink']);
    $id = $project->test_input($_POST['project_id']);
    $admin_id = $project->test_input($_POST['admin_id']);

    // $name = "Work Management4";
	// $version = '1';
	// $language = 'html css php';
    // $level = "Medium";
    // $dlink = 'www.linkcom';
    // $plink = 'www.linkcom';
    // $description = "I love coding";
    // $thumblink =  "www.thumblink.com";
    // $admin_id = '1';
    // $id = 2;
	if ($id != null) {
		if ($project->update($name, $admin_id, $language, $version, $level, $dlink, $plink, $description, $thumblink, $id)) {
			echo $project->message('all project data updated successfully!',true);
		} else {
			echo $project->message('faild to update project!',false);
		}
	} else {
		echo $project->message('project not found!',false);
	}
}

// Delete an project from database
if ($api == 'DELETE') {
    $id = $_GET['id'];
	if ($id != null) {
		if ($project->delete($id)) {
			echo $project->message('project deleted successfully!', false);
		} else {
			echo $project->message('Failed to delete an project!', true);
		}
	} else {
		echo $project->message('Project not found not found!', true);
	}
}

?>