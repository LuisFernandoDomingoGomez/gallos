/* Trigger para insercion multiple (Anillo Gallos 3): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g3llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO g3llos (equipo_id, gallo3_anillo)
    VALUES (NEW.id,
	    NEW.gallo3_anillo);
END;$$



/* Trigger para edicion multiple (Anillo Gallos 3): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g3llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN

    UPDATE g3llos
    SET gallo3_anillo= NEW.gallo3_anillo
    WHERE equipo_id= NEW.id;
    
END;$$