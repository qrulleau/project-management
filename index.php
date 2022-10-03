<?php

require_once 'Host.php';
require_once 'Customer.php';
require_once 'Contact.php';
require_once 'Project.php';
require_once 'Environment.php';

$host = new Host('host_code', 'host_name', 'First defined host');
$customer = new Customer('customer_code', 'customer_name', 'First defined customer');
$contact = new Contact('test@test.com', '06 00 00 00 00', 'admin', 1, 1);
$project = new Project('project_name', 'project_code', 'folder1', 'link_mu1', 0, 'First defined project', 1, 1);
$environment = new Environment('environment_name', 'ip_address', '80', 'SSH_user1', 'php_link_1', 0, 1);

echo $contact->getCustomer()->getName().PHP_EOL;
echo $contact->getHost()->getName().PHP_EOL;