TRUNCATE TABLE `movie`;

INSERT INTO `movie` (`title`, `synopsis`, `released_at`, `category`) VALUES
('Le Parrain', 'Lorem ipsum', '1972-01-01', 'Film de gangsters'),
('Orange Mécanique', 'Lorem ipsum', '1981-01-01', 'Drame'),
('Heat', 'Lorem ipsum', '1995-01-01', 'Film de gangsters');

TRUNCATE TABLE `actor`;

INSERT INTO `actor` (`lastname`, `firstname`, `birthday`) VALUES
('Pacino', 'Al', '1940-04-25'),
('Brando', 'Marlon', '1924-04-03'),
('McDowell', 'Malcolm', '1943-06-13'),
('de Niro', 'Robert', '1943-08-17'),
('Kilmer', 'Val', '1959-12-31');

TRUNCATE TABLE `movie_has_actor`;

INSERT INTO `movie_has_actor` (`id_movie`, `id_actor`) VALUES
(1, 1),
(3, 1),
(1, 2),
(2, 3),
(1, 4),
(3, 4),
(3, 5);