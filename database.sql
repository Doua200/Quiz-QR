
sh-4.4# bash
bash-4.4# mysql -p
Enter password: password
 
show databases;
 
 create table Quiz(id INT PRIMARY KEY AUTO_INCREMENT, title varchar (255));
 
 create table Question (id INT PRIMARY KEY AUTO_INCREMENT, text varchar (255), numQuiz int, foreign key(numQuiz)references Quiz(id) ); 

create table Reponse (id INT not null PRIMARY KEY AUTO_INCREMENT, text varchar (255), numQuiz int, foreign key(numQuestion)references Question(id) );

insert into Quiz (title)  values ("Mon premier quiz");

insert into Question (text)  values ("Citez les deux meilleurs langages");

insert into Reponse (text)  values ("PHP et SQL"), ("JS et PYTHON");


update  Question  set numQuiz =1 where id=1;
update  Reponse  set numQuestion =1 where id=2;
update  Reponse  set numQuestion =1 where id=1;
update  Reponse  set isValid =true where id=1;
update  Reponse  set isValid =false where id=2;

select * from Question, Reponse where Question.numQuiz =1 and Reponse.numQuestion = Question.id;

select* from Quiz, Question, Reponse where Quiz.id=1 and numQuiz= Quiz.id and numQuestion = Question.id;
