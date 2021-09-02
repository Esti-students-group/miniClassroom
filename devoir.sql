SELECT nom_module 
FROM module
NATURAL JOIN Catégorie 
WHERE id_cat = 1
ORDER BY nom_module