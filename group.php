1. Contare quanti iscritti ci sono stati ogni anno
SELECT YEAR(enrolment_date) as anno_iscrizione, COUNT(*) as numero_iscritti
FROM students
GROUP BY YEAR(enrolment_date);


2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio
SELECT office_address , COUNT(*) as id
FROM teachers
WHERE office_address IS NOT NULL
GROUP BY office_address
HAVING COUNT(*) > 1;


3. Calcolare la media dei voti di ogni appello d'esame
SELECT exam_id, AVG(vote) as media_voti
FROM exam_student
GROUP BY exam_id;

4. Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT department_id, COUNT(*) as numero_corsi_laurea
FROM degrees
GROUP BY department_id;