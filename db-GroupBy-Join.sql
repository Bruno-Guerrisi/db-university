
------------GROUP BY

--  1. Contare quanti iscritti ci sono stati ogni anno

SELECT COUNT(`id`) AS `total_students`, YEAR(`enrolment_date`) AS `data_iscrizione`
FROM `students`
GROUP BY `data_iscrizione`;

--  2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio

SELECT COUNT(`id`) AS 'id', `office_address` AS 'office_locaion'
FROM `teachers`
GROUP BY `office_address`;

--  3. Calcolare la media dei voti di ogni appello d'esame

SELECT `exam_id`, ROUND( AVG(`vote`), 1) AS `avarange_vote`
FROM `exam_student`
GROUP BY `exam_id`;

--  4. Contare quanti corsi di laurea ci sono per ogni dipartimento

SELECT COUNT(`id`) AS `tot_courses`, `department_id`
FROM `degrees`
GROUP BY `department_id`;


-----------JOIN-----------------

-- 1. Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia

SELECT `students`.`id`, `students`.`name`, `students`.`surname`, `degrees`.`name`
FROM `students`
INNER JOIN `degrees` ON `students`.`degree_id` = `degrees`.`id`
WHERE `degrees`.`name` = 'Corso di Laurea in Economia';

-- 2. Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze

SELECT * 
FROM `degrees`
INNER JOIN `departments` ON `degrees`.`department_id` = `departments`.`id`
WHERE `departments`.`name` = 'Dipartimento di Neuroscienze';

-- 3. Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)

SELECT * 
FROM `teachers`
INNER JOIN `course_teacher` ON `teachers`.`id` = `course_teacher`.`teacher_id`
INNER JOIN `courses` ON `course_teacher`.`course_id` = `courses`.`id`
WHERE `course_teacher`.`teacher_id` = 44;

-- 4. Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome

SELECT `students`.`name`, `students`.`surname`, `degrees`.`name` AS `degree`, `departments`.`name` AS `department`
FROM `students`
INNER JOIN `degrees` ON `students`.`degree_id` = `degrees`.`id`
INNER JOIN `departments` ON `degrees`.`department_id` = `departments`.`id`
ORDER BY `students`.`surname`, `students`.`name`;