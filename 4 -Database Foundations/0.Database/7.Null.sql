USE admin;
SELECT * FROM movies WHERE year = NULL; 
SELECT * FROM movies WHERE year IS NULL;  /* Search inside THE COLUMN  FOR  NULL IN ROW */
SELECT * FROM movies WHERE year IS NOT NULL ORDER BY year /* Search inside for value not null */



