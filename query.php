1. /**
	* table all column COLLATE change	
	*/
	ALTER TABLE `ticket` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci  
	je nam e thak ticket table er all column collation "utf8_general_ci" hoye jabe

2. /**
	* Array in for id/number
	*/
	$all_type_id = substr($type_id, 1);
	$all_type_id_array = explode(",", $all_type_id);
	$query = "SELECT * FROM users WHERE id IN (" . implode(',', $all_type_id_array) . ")";
	$sql = mysql_query($query);
	==========================================
	$a=array("red","green");
	array_push($a,"blue","yellow");
	print_r($a);

	$id = "2, 3, 4, 5, 6";
	$query = "SELECT * FROM fruits WHERE id IN (".$id.")";
	$result = $conn->query($query);
	
	========================================================
	$query = "SELECT * FROM fruits WHERE id NOT IN (".$id.")";
	========================================================
	and campaign_id IN ('{$all_campaign_id}')
	========================================================
	/**
	* Array in for string
	*/
	$text = "asad,amir,moon";
	$abc = str_replace(",","','", $text);
	$arr = "'" . $abc . "'";
	echo $text . "<br>" . $arr;


3. /**
	* Join multiple table
	*/
	<?php 
	// Join multiple table on single database 
	$volunteerAllSql = "SELECT `users`.*, `divisions`.`name` AS `divisionName`, `districts`.`name` AS `districtName`, `upazilas`.`name` AS `upazila_thanaName`, `unions`.`name` AS `unionName` FROM `users` JOIN `divisions` ON `users`.`division` = `divisions`.`id` JOIN `districts` ON `users`.`district` = `districts`.`id` JOIN `upazilas` ON `users`.`upazila_thana` = `upazilas`.`id` JOIN `unions` ON `users`.`union_name` = `unions`.`id`";

	$medicine_details_sql = "SELECT med.id, med.medicine_name, med.poison_classification,
	hm.hospital_id AS hm_hospital_id, hm.medicine_id, hm.validity, hm.size, hm.medicine_quantity, hm.code,
	h.id AS hospital_id, h.hospital_name,
	hw.union_id AS hw_union_id, hw.hospital_id AS hw_hospital_id,
	unions.id AS union_id, `unions`.`name` AS unionName, `unions`.`upazilla_id` AS union_upazilla_id,
	upazilas.id AS upazila_thana_id, upazilas.name AS upazila_thanaName, upazilas.district_id AS upazila_district_id, 
	districts.id AS district_id, districts.name AS districtName, districts.division_id AS district_division_id,
	divisions.id AS division_id, divisions.name AS divisionName 
	FROM medicines AS med 
	RIGHT JOIN hospital_medicines AS hm ON med.id = hm.medicine_id
	RIGHT JOIN hospitals AS h ON h.id = hm.hospital_id
	RIGHT JOIN hospital_wards AS hw ON hw.hospital_id = h.id
	RIGHT JOIN unions ON hw.union_id = `unions`.`id`
	RIGHT JOIN upazilas ON upazilas.id = `unions`.`upazilla_id`
	RIGHT JOIN districts ON districts.id = upazilas.district_id
	RIGHT JOIN divisions ON divisions.id = districts.division_id
	WHERE med.id = '{$medicineId_in_details}'";

// join multiple table from two database(crm_poison & ticket_dev) in one line sql
$previousDataSql = "SELECT `asterisk`.`crm_poison`.*, `divisions`.`name` AS `divisionName`, `districts`.`name` AS `districtName`, `upazilas`.`name` AS `upazila_thanaName`, `unions`.`name` AS `unionName`, `users`.`pseudonym` AS `volunteerPseudonym`, `hospitals`.`hospital_name` AS `hospitalName`, `medicines`.`medicine_name` AS `medicineName` FROM `crm_poison` JOIN `ticket_dev`.`divisions` ON `crm_poison`.`division` = `divisions`.`id` JOIN `ticket_dev`.`districts` ON `crm_poison`.`district` = `districts`.`id` JOIN `ticket_dev`.`upazilas` ON `crm_poison`.`upazila_thana` = `upazilas`.`id` JOIN `ticket_dev`.`unions` ON `crm_poison`.`union_name` = `unions`.`id` JOIN `ticket_dev`.`users` ON `crm_poison`.`volunteer_name` = `users`.`id` JOIN `ticket_dev`.`hospitals` ON `crm_poison`.`hospital_name` = `hospitals`.`id` JOIN `ticket_dev`.`medicines` ON `crm_poison`.`medicine_name` = `medicines`.`id`";


// join multiple table from two database(crm_poison & ticket_dev) in multiple line sql
$previousDataSql = 
"SELECT `asterisk`.`crm_poison`.*, 
`divisions`.`name` AS `divisionName`, 
`districts`.`name` AS `districtName`, 
`upazilas`.`name` AS `upazila_thanaName`, 
`unions`.`name` AS `unionName`,
`users`.`pseudonym` AS `volunteerPseudonym`,
`hospitals`.`hospital_name` AS `hospitalName`,
`medicines`.`medicine_name` AS `medicineName`
FROM `crm_poison`
JOIN `ticket_dev`.`divisions` ON `crm_poison`.`division` = `divisions`.`id` 
JOIN `ticket_dev`.`districts` ON `crm_poison`.`district` = `districts`.`id` 
JOIN `ticket_dev`.`upazilas` ON `crm_poison`.`upazila_thana` = `upazilas`.`id` 
JOIN `ticket_dev`.`unions` ON `crm_poison`.`union_name` = `unions`.`id` 
JOIN `ticket_dev`.`users` ON `crm_poison`.`volunteer_name` = `users`.`id` 
JOIN `ticket_dev`.`hospitals` ON `crm_poison`.`hospital_name` = `hospitals`.`id` 
JOIN `ticket_dev`.`medicines` ON `crm_poison`.`medicine_name` = `medicines`.`id`
";

// join multiple table from two database(crm_poison & ticket_dev) with condition
$dataLoadSql = "SELECT `asterisk`.`crm_poison`.*, `divisions`.`name` AS `divisionName`, `districts`.`name` AS `districtName`, `upazilas`.`name` AS `upazila_thanaName`, `unions`.`name` AS `unionName`, `users`.`pseudonym` AS `volunteerPseudonym`, `hospitals`.`hospital_name` AS `hospitalName`, `medicines`.`medicine_name` AS `medicineName` FROM `crm_poison` JOIN `ticket_dev`.`divisions` ON `crm_poison`.`division` = `divisions`.`id` JOIN `ticket_dev`.`districts` ON `crm_poison`.`district` = `districts`.`id` JOIN `ticket_dev`.`upazilas` ON `crm_poison`.`upazila_thana` = `upazilas`.`id` JOIN `ticket_dev`.`unions` ON `crm_poison`.`union_name` = `unions`.`id` JOIN `ticket_dev`.`users` ON `crm_poison`.`volunteer_name` = `users`.`id` JOIN `ticket_dev`.`hospitals` ON `crm_poison`.`hospital_name` = `hospitals`.`id` JOIN `ticket_dev`.`medicines` ON `crm_poison`.`medicine_name` = `medicines`.`id` WHERE `crm_poison`.`phone` = '$phone' ORDER BY `crm_poison`.`id` DESC LIMIT 1";

	
	$results=mysql_query("SELECT * FROM users LEFT JOIN user_group ON user_group.user_group_id = users.user_group_id ORDER BY `id` ASC ");
	$type_cat_subc = mysqli_query($mysqli, "SELECT sub_category.sub_cat, category.name, type.type FROM sub_category JOIN category  ON sub_category.cat_id = category.id JOIN type  ON category.type_id = type.id where sub_category.id = '".$report_data['disposition_sub_cat']."' ");
   ?>

4. /**
	* Union but number of two table column are not same and name not same	
	*/
	<?php 
	$get_search_cat = ($search_cat == "comment") ? "comment" : "message";
	$report_result_query = "SELECT wtl.id, wtl.create_at, wtl.assign_user, wtl.status, wtl.data_type, wtl.fb_created_time, wtl.ticket_first_reply_time, wtl.comment_id, wtl.label_id,  wtl.ticket_close_time, type.type, category.name, sub_category.sub_cat FROM webhook_ticket_log as wtl JOIN type  ON wtl.disposition_type = type.id JOIN category  ON wtl.disposition_cat = category.id JOIN sub_category  ON wtl.disposition_sub_cat = sub_category.id WHERE wtl.data_type = '{$get_search_cat}' AND wtl.create_at >= '{$start_date}' AND wtl.create_at <= '{$end_date}' UNION SELECT wt.id, wt.create_at, wt.assign_user, wt.status, wt.data_type, wt.fb_created_time,  wt.ticket_first_reply_time, wt.comment_id, Null as label_id, Null as ticket_close_time, Null as type, Null as name, Null as sub_cat FROM webhook_ticket as wt  WHERE wt.data_type = '{$get_search_cat}' AND wt.create_at >= '{$start_date}' AND wt.create_at <= '{$end_date}'";
	$report_result = mysqli_query($mysqli, $report_result_query);
	?>

5. /**
	* How can I group by date time column without taking time into consideration
	*/
	<?php 
	$query = "SELECT * FROM `nps_call_data_import` GROUP BY CAST(start_date_time AS DATE) ORDER BY `start_date_time` DESC";
	?>

6. /**
	* SUBSTRING_INDEX
	* example $filename = "a_INBOUND_agent02_01639199218";
	* $aa = "SELECT SUBSTRING_INDEX('$filename', '_', 2)";
	* Second jekhane _ pabe tar ager gula niye asbe. uporer example theke a_INBOUND pabo.
	*  
	* SELECT SUBSTRING_INDEX("www.w3schools.com", ".", -1); com pabo 
	* 
	*/
	<?php 
	SUBSTRING_INDEX(event_time, ' ', 1);	

	?>

7. /**
	* Table create like:=========
	*/
	<?php 
	CREATE TABLE dip_eorr_vicidial_log LIKE vicidial_log
	CREATE TABLE dip_eorr_vicidial_agent_log LIKE vicidial_agent_log
	CREATE TABLE dip_eorr_call_log LIKE call_log
	CREATE TABLE dip_eorr_vicidial_carrier_log LIKE vicidial_carrier_log
	?>

8. /**
	* assign column value (24,25). Find row where 24 is present in assign column 
	* `group` === If backtick(`) not use in group, show DB syntax error
	* column er value gulor majhe comma(,) chara onno space thakle hobe na
	*/
	SELECT * FROM ticket where FIND_IN_SET(24,assignd) /// SELECT * FROM ticket where FIND_IN_SET('24', `group`)

9. /**
	* comment
	* comment
	*
	*/
	SELECT * FROM `temp_report` WHERE (call_time BETWEEN '2023-01-11 00:00:00' AND '2023-01-11 23:59:59')
	SELECT * FROM `temp_report` WHERE CAST(call_time as DATE) BETWEEN '2023-08-22' AND '2023-08-23'
	DELETE FROM `temp_report` WHERE (call_time BETWEEN '2023-01-11 00:00:00' AND '2023-01-11 23:59:59')

10. /**
	* last 11 digit match from column / column er right theke 11 digit ney
	*
	*/
	$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT extension, caller_code, number_dialed FROM call_log WHERE RIGHT(number_dialed, 11) = '{$phone}' ORDER BY start_time DESC LIMIT 1"));
	echo $row['extension'];