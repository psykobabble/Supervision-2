<?php

if($_POST)
{
	if($_POST['username'] == 'test' && $_POST['password'] == 'test')
	{
		$data['success'] = true;
		$data['redirect'] = '/dashboard.html';
	}
	else
	{
		$data['success'] = false;
		$data['message'] = "Couldn't find your detials";
	}
}

?>