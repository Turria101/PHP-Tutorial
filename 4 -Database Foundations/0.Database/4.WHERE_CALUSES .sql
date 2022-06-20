USE admin;
SELECT * FROM WHERE movies.Year=1999;  /*equal*/
SELECT * FROM WHERE movies.Year!=1999; /*not-equal*/
SELECT * FROM WHERE movies.Year>1999;  /* Greater than */
SELECT * FROM WHERE movies.Year>=1999; /* Greater than equal  */
SELECT * FROM WHERE movies.Year<1999;/*  less than */
SELECT * FROM WHERE movies.Year<=1999; /* less or equal */
SELECT * FROM WHERE movies.Year=1999 AND ID=1; /* AND*/ 
SELECT * FROM WHERE movies.Year=1999 OR  ID=2;
SELECT * FROM WHERE movies.Year BETWEEN 1995 AND 2000;
SELECT * FROM WHERE movies. TITLE LIKE "%ACCOUNTANT"; /*WILDCARD */
 
 