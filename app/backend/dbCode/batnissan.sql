CREATE TABLE `admin` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`usuario` varchar(50) DEFAULT NULL,
`clave` varchar(255) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `baterias` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`referencia` varchar(100) DEFAULT NULL,
`descripcion` varchar(255) DEFAULT NULL,
`precio` decimal(10,2) DEFAULT NULL,
`stockDisponible` int(11) DEFAULT NULL,
`estado` enum('ACTIVO','INACTIVO') DEFAULT 'ACTIVO',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=2;

ALTER TABLE baterias
ADD imagen VARCHAR(255) DEFAULT NULL;

UPDATE baterias SET imagen = 'extrema750.jpg' WHERE id = 1;
INSERT INTO baterias(referencia, descripcion, precio, stockDisponible, estado, imagen) VALUES ("MAC SILVER PLUS 42-850", "Bateria de 850 amperios", 420000.00, 7, "ACTIVO", "mac850.jpg");
INSERT INTO baterias (referencia, descripcion, precio, stockDisponible, estado, imagen) VALUES ("Willar extrema titanio 850 AMP", "Bateria de 850 Amp marca willard", 410000.00, 4, "ACTIVO", "850ExtremaTitanio");

CREATE TABLE `contacto_info` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`direccion` varchar(255) DEFAULT NULL,
`telefono1` varchar(20) DEFAULT NULL,
`telefono2` varchar(20) DEFAULT NULL,
`email1` varchar(100) DEFAULT NULL,
`email2` varchar(100) DEFAULT NULL,
`mapa_url` text DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


