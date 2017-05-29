<!DOCTYPE html>

<html lang="en">

<head>
	<?php $this->load->view('template/head'); ?>
</head>

<body>
	<?php $this->load->view('template/nav'); ?>
	<?php $this->load->view($page); ?>
	<?php $this->load->view('template/footer'); ?>
</body>

</html>