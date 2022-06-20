USE admin;
SELECT * FROM movies LIMIT 0 ;  
SELECT * FROM movies LIMIT 2 OFFLINE 1;
SELECT * FROM movies LIMIT 1.7;/* 1: TO 7*/
 ;  
/* LIMIT 10 : TAKE FIRST  10 ROWS  */
/* OFFSET 0 : SKIP FROM ONE ROW */ 
/*
ID
A    OFFSET =0  // SKIP 
B 
C 
D 
E
C
F
J






*/