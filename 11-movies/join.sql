-- Récupérer les acteurs du film le Parrain
SELECT * FROM actor
INNER JOIN movie_has_actor ON actor.id = id_actor
INNER JOIN movie ON movie.id = id_movie
WHERE title = 'Le parrain'

-- Récupérer les acteurs du film le Parrain
SELECT * FROM actor
INNER JOIN movie_has_actor ON id = id_actor
WHERE id_movie = 1

-- Récupérer les films dans lesquels a joué Al Pacino ?

