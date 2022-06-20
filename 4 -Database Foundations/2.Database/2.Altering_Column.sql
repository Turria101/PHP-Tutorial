ALTER TABLE  mov_td ADD COLUMN genera_FK VARCHAR(255); /* Add Column */
ALTER TABLE  mov_td ADD(id int,name VARCHAR(255) , expired_date DATE); /* Add Table*/
ALTER TABLE  mov_td CHANGE COLUMN location_l ll DATE; /* Change Column */
ALTER TABLE  mov_td CHANGE COLUMN year  year_a  YEAR;/* Change Column */
ALTER TABLE  mov_td DROP year_a ;/*Remove COLUMN */
