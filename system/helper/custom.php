<?php


/**
 * Backwards support for timing safe hash string comparisons
 * 
 * http://php.net/manual/en/function.hash-equals.php
 */

if(!function_exists('calculate_personal_points')) {
	function calculate_personal_points($cppoints,$customerexpense_percentage,$personalpoints_percentage) {
       
        $customerpoints=($cppoints*$customerexpense_percentage)/100;
//        $customerpoints=round($customerpoints,1);
        
        $personalpoints=($customerpoints*$personalpoints_percentage)/100;
//        $personalpoints=round($personalpoints,1);
        
        return $personalpoints;
	}
}
if(!function_exists('convert_amount_to_cp')) {
	function convert_amount_to_cp($amount,$cpconfig) {
        
        return $amount/$cpconfig;
	}
}
if(!function_exists('convert_cp_to_amount')) {
	function convert_cp_to_amount($cp,$cpconfig) {
        return $cp*$cpconfig;
	}
}
if(!function_exists('calculate_customer_points_by_level')) {
	function calculate_customer_points_by_level($cppoints,$levelnumber_percentage,$customerexpense_percentage,$levelsystem_percentage) {
        
        $customerpoints=($cppoints*$customerexpense_percentage)/100;
//        $customerpoints=round($customerpoints,1);
        
        $levelsystempoints=($customerpoints*$levelsystem_percentage)/100;
//        $levelsystempoints=round($levelsystempoints,1);
        
        $levelnumberpercentage=($levelsystempoints*$levelnumber_percentage)/100;
//        $levelnumberpercentage=round($levelnumberpercentage,1);
//        return $levelnumberpercentage;
        return round($levelnumberpercentage,4);
	}
}
if(!function_exists('calculate_maximum_binary_step_value')) {
	function calculate_maximum_binary_step_value($points,$customerexpense_percentage,$binarysystem_percentage) {
        
        $points=($points*$customerexpense_percentage)/100;
        
        $binarysystempoints=($points*$binarysystem_percentage)/100;
        
        return round($binarysystempoints,4);
	}
}
if(!function_exists('calculate_leadership_per_step_value')) {
	function calculate_leadership_per_step_value($points,$customerexpense_percentage,$leadershipsystem_percentage) {
        
        $points=($points*$customerexpense_percentage)/100;
        
        $leadershipsystempoints=($points*$leadershipsystem_percentage)/100;
        return round($leadershipsystempoints,4);
	}
}
if(!function_exists('calculate_autonet_per_step_value')) {
	function calculate_autonet_per_step_value($points,$customerexpense_percentage,$autonetsystem_percentage) {
        
        $points=($points*$customerexpense_percentage)/100;
        
        $autonetsystempoints=($points*$autonetsystem_percentage)/100;
        return round($autonetsystempoints,4);
	}
}
