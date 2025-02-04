DROP DATABASE IF EXISTS club_deportivo; 
CREATE DATABASE club_deportivo;
USE club_deportivo;

CREATE TABLE socios (
  id_socio INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  telefono VARCHAR(15),
  fecha_nacimiento DATE
);


CREATE TABLE eventos (
  id_evento INT AUTO_INCREMENT PRIMARY KEY,
  nombre_evento VARCHAR(100) NOT NULL,
  fecha DATE NOT NULL,
  lugar VARCHAR(100) NOT NULL
);



CREATE TABLE inscripciones (
  id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
  id_socio INT,
  id_evento INT,
  fecha_inscripcion DATE,
  FOREIGN KEY (id_socio) REFERENCES socios(id_socio),
  FOREIGN KEY (id_evento) REFERENCES eventos(id_evento)
);


INSERT INTO socios (nombre, apellido, email, telefono, fecha_nacimiento) VALUES
('Juan', 'Pérez', 'juan.perez@example.com', '600000001', '1990-01-15'),
('Ana', 'Gómez', 'ana.gomez@example.com', '600000002', '1985-05-20'),
('Carlos', 'López', 'carlos.lopez@example.com', '600000003', '1992-03-10'),
('Laura', 'Martínez', 'laura.martinez@example.com', '600000004', '1998-07-25'),
('Miguel', 'Sánchez', 'miguel.sanchez@example.com', '600000005', '1980-11-30'),
('Lucía', 'Ramírez', 'lucia.ramirez@example.com', '600000006', '1994-09-05'),
('Sergio', 'Fernández', 'sergio.fernandez@example.com', '600000007', '1989-04-15'),
('María', 'Hernández', 'maria.hernandez@example.com', '600000008', '1996-08-20'),
('José', 'Díaz', 'jose.diaz@example.com', '600000009', '1987-12-01'),
('Raquel', 'Núñez', 'raquel.nunez@example.com', '600000010', '1991-06-17'),
('David', 'Castro', 'david.castro@example.com', '600000011', '1983-10-13'),
('Andrea', 'Moreno', 'andrea.moreno@example.com', '600000012', '1995-03-08'),
('Javier', 'Ruiz', 'javier.ruiz@example.com', '600000013', '1982-01-21'),
('Clara', 'Ortiz', 'clara.ortiz@example.com', '600000014', '1993-09-09'),
('Fernando', 'Vega', 'fernando.vega@example.com', '600000015', '1990-02-18'),
('Nerea', 'Gil', 'nerea.gil@example.com', '600000016', '1997-11-25'),
('Luis', 'Méndez', 'luis.mendez@example.com', '600000017', '1986-12-12'),
('Sofía', 'Domínguez', 'sofia.dominguez@example.com', '600000018', '1994-05-27'),
('Pedro', 'Fuentes', 'pedro.fuentes@example.com', '600000019', '1988-07-04'),
('Isabel', 'Cruz', 'isabel.cruz@example.com', '600000020', '1999-03-15');

INSERT INTO eventos (nombre_evento, fecha, lugar) VALUES
('Torneo de Fútbol Primavera', '2025-03-15', 'Estadio Central'),
('Competencia de Natación Juvenil', '2025-04-10', 'Piscina Olímpica'),
('Maratón Anual', '2025-05-05', 'Parque de la Ciudad'),
('Clase Magistral de Yoga', '2025-06-20', 'Sala de Actividades 3'),
('Campeonato de Ajedrez', '2025-07-12', 'Salón de Conferencias'),
('Exhibición de Taekwondo', '2025-08-18', 'Gimnasio Principal'),
('Carrera de Bicicletas', '2025-09-01', 'Circuito Urbano'),
('Torneo de Tenis Abierto', '2025-10-08', 'Cancha de Tenis 1'),
('Festival de Deportes Acuáticos', '2025-11-14', 'Club Náutico'),
('Competencia de Levantamiento de Pesas', '2025-12-05', 'Sala de Pesas'),
('Clínica de Atletismo', '2025-01-25', 'Estadio de Atletismo'),
('Torneo de Baloncesto Sub-18', '2025-02-15', 'Polideportivo Sur'),
('Demostración de Artes Marciales', '2025-03-30', 'Gimnasio Secundario'),
('Competencia de Escalada', '2025-04-25', 'Muro de Escalada'),
('Torneo de Pádel Nocturno', '2025-05-12', 'Pista de Pádel Central'),
('Competencia de Voleibol Playa', '2025-06-10', 'Zona de Playa Artificial'),
('Evento de Patinaje Artístico', '2025-07-22', 'Pista de Hielo'),
('Clínica de Entrenamiento Funcional', '2025-08-05', 'Gimnasio de Entrenamiento 2'),
('Torneo de Badminton', '2025-09-19', 'Salón de Deportes'),
('Jornada de Senderismo Familiar', '2025-10-03', 'Montaña de los Pinos');
