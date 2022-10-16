CREATE TABLE host (
    id int NOT NULL AUTO_INCREMENT,
    code varchar(255),
    name varchar(255) NOT NULL UNIQUE,
    notes varchar(1000),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE customer(
    id int NOT NULL AUTO_INCREMENT,
    code varchar(255),
    name varchar(255) NOT NULL,
    notes varchar(1000),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE contact(
    id int NOT NULL AUTO_INCREMENT,
    email varchar(255),
    phone_number varchar(255),
    role varchar(255),
    host_id int,
    customer_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (host_id) REFERENCES host (id),
    FOREIGN KEY (customer_id) REFERENCES customer (id)
) ENGINE=InnoDB;

-- on ne peut avoir un contact rattacher a la fois à un customer et à un host --

CREATE TABLE project(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    code varchar(255),
    lastpass_folder varchar(255),
    link_mock_ups varchar(255),
    managed_server tinyint(1),
    notes varchar(1000),
    host_id int NOT NULL,
    customer_id int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (host_id) REFERENCES host (id),
    FOREIGN KEY (customer_id) REFERENCES customer (id)
) ENGINE=InnoDB;

CREATE TABLE environment(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    link varchar(255),
    ip_address varchar(255),
    ssh_port int(6),
    ssh_username varchar(255),
    phpmyadmin_link varchar(255),
    ip_restriction tinyint(1),
    project_id int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (project_id) REFERENCES project (id)
) ENGINE=InnoDB;

INSERT INTO `environment` (`name`, `link`, `ip_address`, `ssh_port`, `ssh_username`, `phpmyadmin_link`, `ip_restriction`, `project_id`) VALUES
('Production', 'c:un/chemin/absolue/Production', '192.168.0.0', 80, 'root', 'ns00.wistee.fr', 0, 1),
('Livrable', '', '192.168.0.80', 80, 'qrulleau', 'ns001.wistee.fr', 0, 2),
('Industriel', 'c:un/chemin/absolue/Industriel', '192.182.0.60', 80, 'public', 'ns002.wistee.f', 0, 3),
('Charpente', 'c:un/chemin/absolue/Charpente', '192.100.0.70', 80, 'root', 'ns003.wistee.fr', 0, 4),
('Developpement', 'c:un/chemin/absolue/Developpement', '192.120.0.70', 80, 'charles_LM', 'ns100.wistee.fr', 0, 5),
('Scolaire', 'c:un/chemin/absolue/Scolaire1', '192.20.0.10', 80, 'ammar', 'ns200.wistee.fr', 1, 6),
('Scolaire', 'c:un/chemin/absolue/Scolaire', '192.20.0.10', 80, 'hougron_v', 'ns250.wistee.fr', 1, 7),
('Banque', 'c:un/chemin/absolue/Banque', '192.110.0.10', 80, 'cofidis', 'ns110.wistee.fr', 1, 8),
('', 'c:un/chemin/absolue/Banque2', '', 80, 'LCL', 'ns90.wistee.fr', 1, 9),
( 'Scolaire', 'c:un/chemin/absolue/Scolaire-St-vincent', 'ip_address10', 80, 'lycee_st_vincent', 'ns010.wistee.fr', 1, 10);

INSERT INTO `customer` (`id`, `code`, `name`, `notes`) VALUES
(1, "CUST_SALON_DE_L'AGRICULTURE", "Salon de l'agriculture", "Client : Salon de l'Agriculture"),
(2, "CUST_SAINT-GOBAIN", "Saint-Gobain", "Client : Saint-Gobain"),
(3, "CUST_KWS", "KWS", "Client : KWS"),
(4, "CUST_POCLAIN_HYDRAULICS", "Poclain Hydraulics", "Client : Poclain_Hydraulics"),
(5, "CUST_PMU", "PMU", "Client : PMU"),
(6, "CUST_PHILIPS", "Philips", "Client : Philips"),
(7, "CUST_ORPI", "Orpi", "Client : Orpi"),
(8, "CUST_MINISTÈRE_DE_L'INTERIEUR", "Ministère de l'Emploi et de la Solidarité", "Client : Ministère de l'Intérieur"),
(9, "CUST_INTERMARCHÉ", "Intermarché", "Client : Intermarché"),
(10, "CUST_IPSEC", "IPSEC", "Client : IPSEC");

INSERT INTO `host` (`code`, `name`, `notes`) VALUES
('host_testeur', '', 'note sur testeur'),
('host_superhost', 'SUPERHOST', ''),
('host_ovh', 'OVH', 'note sur ovh'),
('host_02switch', 'O2SWITCH', 'notes sur o2switch'),
('host_lws', 'LWS', 'notes sur lws'),
('host_hostinger', 'HOSTINGER', 'notes sur hostinger'),
('', 'NETLIFY', 'notes sur netlify'),
('host_label', 'LABEL', 'notes sur label'),
('host_ecritel', 'ECRITEL', 'note sur ecritel'),
('host_final', 'FINAL', 'note sur final');


INSERT INTO `project` (`name`, `code`, `lastpass_folder`, `link_mock_ups`, `managed_server`, `notes`, `host_id`, `customer_id`) VALUES
('backoffice_laposte', '', '/laposte', '0', 0, 'notes_project1', 1, 1),
('OCR', 'OCR', '', '1', 0, 'notes_project2', 2, 2),
('Wordpress_project', 'wp_project', '/wp', '0', 0, 'notes_project3', 3, 3),
('Prestashop_project', 'presta_project', '/presta', '1', 0, 'notes_project4', 4, 4),
('front_francaise_des_jeux', 'f_fj', '/fj', '0', 0, 'notes_project5', 5, 5),
('e-commerce_carrefour', 'ec_carrefour', '/carrefour', '1', 0, 'notes_project6', 6, 6),
('shopping_tunel_nodevo', 'shoppingT_nodevo', '/nodevo', '0', 0, 'notes_project7', 7, 7),
('internal_project', 'intern_prj', '/home', '1', 0, 'notes_project8', 8, 8),
('', 'code_project9', '', '0', 0, 'notes_project9', 9, 9),
('twitch_asset', 'twitch_ass', '', '1', 0, 'notes_project10', 10, 10);

INSERT INTO `contact` (`id`, `email`, `phone_number`, `role`, `host_id`, `customer_id`) VALUES
('jacquelotjeff@gmail.com', '0624252629', 'CTO', 1, 1),
('contact@lyceestvincent.fr', '0611111111', 'surveillant', 2, 2),
('', '0622222222', null, 3, 2),
('quentin.rulleau@yahooc.com', '0786176266', 'ceo', 4, 4),
('dev@pongo.com', '0644444444', 'front-end dev front', 3, 1),
('julien@nodevo.fr', '0655555555', 'testeur', 7, 6),
('charles@carrefour.com', '0666666666', 'backend dev', null, 7),
('julien.tessot@yahoo.fr', '0677777777', 'admin sys', 4, 3),
('', '0688888888', '', 10, 10),
('ammarf@nodevo.fr', '0699999999', 'ceo', 10, null);