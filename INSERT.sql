INSERT INTO 
	host(code, name, notes)
VALUES
	('code_host1','name-host1','notes-host1'),
	('code_host2','name-host2','notes-host2'),
    ('code_host3','name-host3','notes-host3'),
    ('code_host4','name-host4','notes-host4'),
    ('code_host5','name-host5','notes-host5'),
    ('code_host6','name-host6','notes-host6'),
    ('code_host7','name-host7','notes-host7'),
    ('code_host8','name-host8','notes-host8'),
    ('code_host9','name-host9','notes-host9'),
    ('code_host10','name-host10','notes-host10');


INSERT INTO 
	customer(code, name, notes)
VALUES
	('code_customer1','name_customer1','notes_customer1'),
	('code_customer2','name_customer2','notes_customer2'),
    ('code_customer3','name_customer3','notes_customer3'),
    ('code_customer4','name_customer4','notes_customer4'),
    ('code_customer5','name_customer5','notes_customer5'),
    ('code_customer6','name_customer6','notes_customer6'),
    ('code_customer7','name_customer7','notes_customer7'),
    ('code_customer8','name_customer8','notes_customer8'),
    ('code_customer9','name_customer9','notes_customer9'),
    ('code_customer10','name_customer10','notes_customer10');


INSERT INTO 
	contact(email, phone_number, role, host_id, customer_id)
VALUES
	('email1','0600000000','role1', 1, 1),
    ('email2','0611111111','role2', 2, 2),
    ('email3','0622222222','role3', 3, 3),
    ('email4','0633333333','role4', 4, 4),
    ('email5','0644444444','role5', 5, 5),
    ('email6','0655555555','role6', 6, 6),
    ('email7','0666666666','role7', 7, 7),
    ('email8','0677777777','role8', 8, 8),
    ('email9','0688888888','role9', 9, 9),
    ('email10','0699999999','role10', 10, 10);


INSERT INTO 
	project(name, code, lastpass_folder, link_mock_ups, managed_server, notes, host_id, customer_id)
VALUES
	('name_project1','code_project1','lastpass_foler1', 0, 'server1', 'notes_project1', 1, 1),
    ('name_project2','code_project2','lastpass_foler2', 1, 'server2', 'notes_project2', 2, 2),
    ('name_project3','code_project3','lastpass_foler3', 0, 'server3', 'notes_project3', 3, 3),
    ('name_project4','code_project4','lastpass_foler4', 1, 'server4', 'notes_project4', 4, 4),
    ('name_project5','code_project5','lastpass_foler5', 0, 'server5', 'notes_project5', 5, 5),
    ('name_project6','code_project6','lastpass_foler6', 1, 'server6', 'notes_project6', 6, 6),
    ('name_project7','code_project7','lastpass_foler7', 0, 'server7', 'notes_project7', 7, 7),
    ('name_project8','code_project8','lastpass_foler8', 1, 'server8', 'notes_project8', 8, 8),
    ('name_project9','code_project9','lastpass_foler9', 0, 'server9', 'notes_project9', 9, 9),
    ('name_project10','code_project10','lastpass_foler10', 1, 'server10', 'notes_project10', 10, 10);


INSERT INTO 
	environment(name, link, ip_address, ssh_port, ssh_username, phpmyadmin_link, ip_restriction, project_id)
VALUES
	('name_environment1','link1','ip_address1', 1, 'ssh_username1', 'phpmyadmin_link1', 0, 1),
    ('name_environment2','link2','ip_address2', 2, 'ssh_username2', 'phpmyadmin_link2', 0, 2),
    ('name_environment3','link3','ip_address3', 3, 'ssh_username3', 'phpmyadmin_link3', 0, 3),
    ('name_environment4','link4','ip_address4', 4, 'ssh_username4', 'phpmyadmin_link4', 0, 4),
    ('name_environment5','link5','ip_address5', 5, 'ssh_username5', 'phpmyadmin_link5', 0, 5),
    ('name_environment6','link6','ip_address6', 6, 'ssh_username6', 'phpmyadmin_link6', 1, 6),
    ('name_environment7','link7','ip_address7', 7, 'ssh_username7', 'phpmyadmin_link7', 1, 7),
    ('name_environment8','link8','ip_address8', 8, 'ssh_username8', 'phpmyadmin_link8', 1, 8),
    ('name_environment9','link9','ip_address9', 9, 'ssh_username9', 'phpmyadmin_link9', 1, 9),
    ('name_environment10','link10','ip_address10', 10, 'ssh_username10', 'phpmyadmin_link10', 1, 10);