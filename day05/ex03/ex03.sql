INSERT INTO ft_table(login,`group`, creation_date)
	SELECT last_name,'other', birthdate FROM user_card
    WHERE LENGTH(last_name) < 9 and LOCATE('a', last_name) > 0
    ORDER BY last_name ASC
    LIMIT 10;