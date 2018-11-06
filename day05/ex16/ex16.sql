SELECT count(*) AS 'movies'
FROM member_history
WHERE (DATE(date) > '2006-10-29'
AND
DATE(date) < '2007-07-28')
OR
(DAY(date) = 24
AND
MONTH(date) = 12);