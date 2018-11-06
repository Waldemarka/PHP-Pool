SELECT (REVERSE(SUBSTRING(phone_number, 2))) AS 'rebmunenohp'
FROM distrib
WHERE  LOCATE('05', phone_number) = 1;