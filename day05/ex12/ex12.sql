SELECT last_name, first_name
FROM user_card
WHERE (LOCATE('-', last_name) > 0
OR LOCATE('-', first_name))
ORDER BY last_name ASC,
first_name ASC;
