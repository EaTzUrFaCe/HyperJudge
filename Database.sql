CREATE TABLE `User` (
	`id` INT NOT NULL,
	`name` varchar(80) NOT NULL UNIQUE,
	`type` INT NOT NULL,
	`sessionid` varchar(40) UNIQUE,
	`password` varchar(60) UNIQUE,
	`displayname` TIME(80) NOT NULL UNIQUE,
	`category` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Category` (
	`id` INT NOT NULL,
	`name` varchar(80) NOT NULL UNIQUE,
	`color` varchar(7) NOT NULL UNIQUE DEFAULT '#ffffff',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Language` (
	`id` INT NOT NULL,
	`name` varchar(80) NOT NULL UNIQUE,
	`extensions` varchar(160) NOT NULL,
	`compile` blob,
	`run` blob,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Clarification` (
	`id` INT NOT NULL,
	`question` varchar(300) NOT NULL,
	`answer` varchar(300) NOT NULL,
	`sender` INT NOT NULL UNIQUE,
	`answerer` INT NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Problem` (
	`id` INT NOT NULL,
	`categoryid` INT NOT NULL,
	`problemtext` blob NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ProblemData` (
	`id` INT NOT NULL,
	`problemid` INT NOT NULL,
	`input` blob NOT NULL,
	`output` blob NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Run` (
	`id` INT NOT NULL,
	`submissionid` INT NOT NULL,
	`status` INT NOT NULL,
	`output` blob NOT NULL,
	`error` blob NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Submission` (
	`id` INT NOT NULL,
	`problemid` INT NOT NULL,
	`sender` INT NOT NULL,
	`code` blob NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `User` ADD CONSTRAINT `User_fk0` FOREIGN KEY (`category`) REFERENCES `Category`(`id`);

ALTER TABLE `Clarification` ADD CONSTRAINT `Clarification_fk0` FOREIGN KEY (`sender`) REFERENCES `User`(`id`);

ALTER TABLE `Clarification` ADD CONSTRAINT `Clarification_fk1` FOREIGN KEY (`answerer`) REFERENCES `User`(`id`);

ALTER TABLE `Problem` ADD CONSTRAINT `Problem_fk0` FOREIGN KEY (`categoryid`) REFERENCES `Category`(`id`);

ALTER TABLE `ProblemData` ADD CONSTRAINT `ProblemData_fk0` FOREIGN KEY (`problemid`) REFERENCES `Problem`(`id`);

ALTER TABLE `Run` ADD CONSTRAINT `Run_fk0` FOREIGN KEY (`submissionid`) REFERENCES `Submission`(`id`);

ALTER TABLE `Submission` ADD CONSTRAINT `Submission_fk0` FOREIGN KEY (`problemid`) REFERENCES `Problem`(`id`);

ALTER TABLE `Submission` ADD CONSTRAINT `Submission_fk1` FOREIGN KEY (`sender`) REFERENCES `User`(`id`);

