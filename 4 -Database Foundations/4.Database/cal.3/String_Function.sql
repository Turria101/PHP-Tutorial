SELECT  LOWER((Name),UPPER(Name),LENGTH(Name)AS Name_LEN,CONCAT(Name,"LAST_NAME_NUL"),CONCAT(SUBSTR(Name,0,1) AS sub_STR_NAME,"...") 
FROM mirror_1
                         