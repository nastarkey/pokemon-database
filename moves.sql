CREATE TABLE Move(
	Move_name CHARACTER VARYING(32),
    Type_name CHARACTER VARYING(32),
    Category CHARACTER VARYING(32),
    Power_points INTEGER,
    Power INTEGER,   
	Accuracy INTEGER,
	Effect CHARACTER VARYING(255),
	PRIMARY KEY(move_name),
	FOREIGN KEY(Type_name) REFERENCES Type (Type_name)
	ON UPDATE CASCADE ON DELETE RESTRICT;
);

INSERT INTO Move (Move_name, Type_name, Category, Power_points, Power, Accuracy, Effect) VALUES
('Roost', 'Flying', 'Status', 5, NULL, NULL, 'Heal'),
('Gravity', 'Psychic', 'Status', 5, NULL, NULL, 'Increase Accuracy'),
('Miracle Eye', 'Psychic', 'Status', 40, NULL, NULL, 'Ignore Accuracy'),
('Wake-Up Slap', 'Fighting', 'Physical', 10, 70, 100, NULL),
('Hammer Arm', 'Fighting', 'Physical', 10, 100, 90, NULL),
('Gryo Ball', 'Steel', 'Physical', 5, NULL, 100, NULL),
('Healing Wish', 'Psychic', 'Status', 10, NULL, NULL, 'Heal'),
('Brine', 'Water', 'Special', 10, 65, 100, NULL)
('Natural Gift', 'Normal', 'Physical', 15, NULL, 100, NULL),
('Feint', 'Normal', 'Physical', 10, 30, 100, NULL),
('Pluck', 'Flying', 'Physical', 20, 60, 100, NULL),
('Tailwind', 'Flying', 'Status', 15, NULL, NULL, 'Increase Speed'),
('Accupressure', 'Normal', 'Status', 30, NULL, NULL, 'Sharply Increased A Random Stat'),
('Metal Burst', 'Steel', 'Physical', 10, NULL, 100 NULL),
('U-Turn', 'Bug', 'Physical', 20, 70, 100, NULL),
('Close Combat', 'Fighting', 'Physical', 5, 120, 100, NULL),
('Payback', 'Dark', 'Physical', 10, 50, 100, NULL),
('Assurance', 'Dark', 'Physical', 10, 60, 100, NULL),
('Embargo', 'Dark', 'Status', 15, NULL, NULL, ''),
('Fling', 'Dark', 'Physical', 10, NULL, 100, NULL),
('Psycho Shift', 'Psychic', 'Status', 10, NULL, 100, ''),
('Trump Card', 'Normal', 'Special', 5, NULL, NULL, NULL),
('Heal Block', 'Psychic', 'Status', 15, NULL, 100, ''),
('Wring Out', 'Normal', 'Special', 5, NULL, 100, NULL),
('Power Trick', 'Psychic', 'Status', 5, NULL, 100, ''),
('Gastro Acid', 'Poison', 'Status', 10, NULL, 100, ''),
('Lucky Chant', 'Normal', 'Status', 30, NULL, NULL, ''),
('Me First', 'Normal', 'Status', 20, NULL, NULL, ''),
('Copycat', 'Normal', 'Status', 20, NULL, NULL, ''),
('Power Swap', 'Psychic', 'Status', 10, NULL, NULL, ''),
('Guard Swap', 'Psychic', 'Status', 10, NULL, NULL, ''),
('Punishment', 'Dark', 'Physical', 5, NULL, NULL, NULL),
('Last Resort', 'Normal', 'Physical', 5, NULL, NULL, NULL),
('Worry Seed', 'Grass', 'Status', 10, NULL, 100, ''),
('Sucker Punch', 'Dark', 'Physical', 5, NULL, NULL, NULL),
('Toxic Spikes', 'Poison', 'Status', 20, NULL, NULL, ''),
('Heart Swap', 'Psychic', 'Status', 10, NULL, NULL, ''),
('Aqua Ring', 'Water', 'Status', 20, NULL, NULL, ''),
('Magnet Rise', 'Electric', 'Status', 10, NULL, NULL, ''),
('Flare Blitz', 'Fire', 'Physical', 15, 120, 100, NULL),
('Force Palm', 'Fighting', 'Physical', 10, 60, 100, NULL),
('Aura Sphere', 'Fighting', 'Special', 20, 80, NULL, NULL),
('Rock Polish', 'Rock', 'Status', 20, NULL, NULL, ''),
('Poison Jab', 'Poison', 'Physical', 20, 80, 100, NULL),
('Dark Pulse', 'Dark', 'Special', 15, 80, 100, NULL),
('Night Slash', 'Dark', 'Physical', 15, 70, 100, NULL),
('Aqua Tail', 'Water', 'Physical', 10, 90, 90, NULL),
('Seed Bomb', 'Grass', 'Physical', 20, 80, 100, NULL),
('Air Slash', 'Flying', 'Special', 15, 75, 95, NULL),
('X-Scissor', 'Bug', 'Physical', 15, 80, 100, NULL),
('Bug Buzz', 'Bug', 'Special', 10, 90, 100, NULL),
('Dragon Pulse', 'Dragon', 'Special', 10, 85, 100, NULL),
('Dragon Rush', 'Dragon', 'Physical', 10, 100, 75, NULL),
('Power Gem', 'Rock', 'Special', 20, 80, 100, NULL),
('Drain Punch', 'Fighting', 'Physical', 10, 75, 100, NULL),
('Vacuum Wave', 'Fighting', 'Special', 30, 40, 100, NULL),
('Focus Blast', 'FIghting', 'Special', 5, 120, 70, NULL),
('Energy Ball', 'Grass', 'Special', 10, 90, 100, NULL),
('Brave Bird', 'Flying', 'Physical', 15, 120, 100, NULL),
('Earth Power', 'Ground', 'Special', 10, 90, 100, NULL),
('Switcheroo', 'Dark', 'Status', 10, NULL, NULL, ''),
('Giga Impact', 'Normal', 'Physical', 5, 150, 90, NULL),
('Nasty Plot', 'Dark', 'Status', 20, NULL, NULL, ''),
('Bullet Punch', 'Steel', 'Physical', 30, 40, 100, NULL),
('Avalanche', 'Ice', 'Physical', 10, 60, 100, NULL),
('Ice Shard', 'Ice', 'Physical', 30, 40, 100, NULL),
('Shadow Claw', 'Ghost', 'Physical', 15, 70, 100, NULL),
('Thunder Fang', 'Electric', 'Physical', 15, 65, 95, NULL),
('Ice Fang', 'Ice', 'Physical', 15, 65, 95, NULL),
('Fire Fang', 'Fire', 'Physical', 15, 65, 95, NULL),
('Shadow Sneak', 'Ghost', 'Physical', 30, 40, 100, NULL),
('Mud Bomb', 'Ground', 'Special', 10, 65, 85, NULL),
('Psycho Cut', 'Psychic', 'Physical', 20, 70, 100, NULL),
('Zen Headbutt', 'Psychic', 'Physical', 15, 80, 90, NULL),
('Mirror Shot', 'Steel', 'Special', 10, 65, 85, NULL),
('Flash Cannon', 'Steel', 'Special', 10, 80, 100, NULL),
('Rock Climb', 'Normal', 'Physical', 20, 90, 85, NULL),
('Defog', 'Flying', 'Status', 15, NULL, NULL, NULL),
('Trick Room', 'Psychic', 'Status', 5, NULL, NULL, ''),
('Draco Meteor', 'Dragon', 'Special', 5, 130, 90, NULL),
('Discharge', 'Electric', 'Special', 15, 80, 100, NULL),
('Lava Plume', 'Fire', 'Special', 15, 80, 100, NULL),
('Leaf Storm', 'Grass', 'Special', 5, 130, 90, NULL),
('Power Whip', 'Grass', 'Physical', 10, 120, 85, NULL),
('Rock Wrecker', 'Rock', 'Physical', 5, 150, 90, NULL),
('Cross Poison', 'Poison', 'Physical', 20, 70, 100, NULL),
('Gunk Shot', 'Poison', 'Physical', 5, 120, 80, NULL),
('Iron Head', 'Steel', 'Physical', 15, 80, 100, NULL),
('Magnet Bomb', 'Steel', 'Physical', 20, 60, NULL, NULL),
('Stone Edge', 'Rock', 'Physical', 5, 100, 80, NULL),
('Captivate', 'Normal', 'Special', 20, NULL, 100, NULL),
('Stealth Rock', 'Rock', 'Special', 20, NULL, NULL, NULL),
('Grass Knot', 'Grass', 'Special', 20, NULL, 100, NULL),
('Chatter', 'Flying', 'Special', 20, 65, 100, NULL),
('Judgment', 'Normal', 'Special', 10, 100, 100, NULL),
('Bug Bite', 'Bug', 'Physical', 20, 60, 100, NULL),
('Charge Beam', 'Electric', 'Special', 10, 50, 90, NULL),
('Wood Hammer', 'Grass', 'Physical', 15, 120, 100, NULL),
('Aqua Jet', 'Water', 'Physical', 20, 40, 100, NULL),
('Attack Order', 'Bug', 'Physical', 15, 90, 100, NULL),
('Defend Order', 'Bug', 'Status', 10, NULL, NULL, ''),
('Heal Order', 'Bug', 'Status', 10, NULL, NULL, ''),
('Head Smash', 'Rock', 'Physical', 5, 150, 80, NULL),
('Double Hit', 'Normal', 'Physical', 10, 35, 90, NULL),
('Roar of Time', 'Dragon', 'Special', 10, 150, 90, NULL),
('Spacial Rend', 'Dragon', 'Special', 10, 100, 95, NULL),
('Lunar Dance', 'Psychic', 'Status', 10, NULL, NULL, ''),
('Crush Grip', 'Normal', 'Physical', 5, NULL, 100, NULL),
('Magma Storm', 'Fire', 'Special', 5, 100, 75, NULL),
('Dark Void', 'Dark', 'Status', 10, NULL, NULL, ''),
('Seed Flare', 'Grass', 'Special', 5, 120, 85, NULL),
('Ominous Wind', 'Ghost', 'Special', 5, 60, 100, NULL),
('Shadow Force', 'Ghost', 'Physical', 5, 120, 100, NULL);




CREATE TABLE Pokemon_Type(
	Pokedex_number INTEGER,
	Type_name CHARACTER VARYING(32),
	PRIMARY KEY(pokedex_number),
	FOREIGN KEY(pokedex_number), REFERENCES Pokemon(pokedex_number),
	ON UPDATE CASCADE ON DELETE RESTRICT;
	FOREIGN KEY(Type_name), REFERENCES Type(Type_name)
	ON UPDATE CASCADE ON DELETE RESTRICT;
);

INSERT INTO Pokemon_Type (Pokedex_number, Type_name) VALUES
(1, 'Grass'),
(2, 'Grass'),
(3, 'Grass'),
(3, 'Ground'),
(4, 'Fire'),
(5, 'Fire'),
(5, 'Fighting'),
(6, 'Fire'),
(6, 'Fighting'),
(7, 'Water'),
(8, 'Water'),
(9, 'Water'),
(9, 'Steel'),
(10, 'Normal'),
(10, 'Flying'),
(11, 'Normal'),
(11, 'Flying'),
(12, 'Normal'),
(12, 'Flying'),
(13, 'Normal'),
(14, 'Normal'),
(14, 'Water'),
(15, 'Bug'),
(16, 'Bug'),
(17, 'Electric'),
(18, 'Electric'),
(19, 'Electric'),
(20, 'Psychic'),
(21, 'Psychic'),
(22, 'Psychic'),
(23, 'Water'),
(24, 'Water'),
(24, 'Flying'),
(25, 'Grass'),
(25, 'Poison'),
(26, 'Grass'),
(26, 'Poison'),
(27, 'Grass'),
(27, 'Poison'),
(28, 'Poison'),
(28, 'Flying'),
(29, 'Poison'),
(29, 'Flying'),
(30, 'Poison'),
(30, 'Flying'),
(31, 'Rock'),
(31, 'Ground'),
(32, 'Rock'),
(32, 'Ground'),
(33, 'Rock'),
(33, 'Ground'),
(34, 'Rock'),
(34, 'Ground'),
(35, 'Steel'),
(35, 'Rock'),
(36, 'Rock'),
(37, 'Rock'),
(38, 'Rock'),
(38, 'Steel'),
(39, 'Rock'),
(39, 'Steel'),
(40, 'Fighting'),
(41, 'Fighting'),
(42, 'Fighting'),
(43, 'Water'),
(44, 'Water'),
(45, 'Bug'),
(46, 'Bug'),
(46, 'Grass'),
(47, 'Bug'),
(47, 'Flying'),
(48, 'Bug'),
(49, 'Bug'),
(50, 'Bug'),
(50, 'Flying'),
(51, 'Bug'),
(52, 'Bug'),
(52, 'Poison'),
(53, 'Bug'),
(53, 'Flying'),
(54, 'Bug'),
(54, 'Flying'),
(55, 'Electric'),
(56, 'Water'),
(57, 'Water'),
(58, 'Grass'),
(59, 'Grass'),
(60, 'Water'),
(61, 'Water'),
(61, 'Ground'),
(62, 'Bug'),
(62, 'Fighting'),
(63, 'Normal'),
(64, 'Normal'),
(65, 'Ghost'),
(65, 'Flying'),
(66, 'Ghost'),
(66, 'Flying'),
(67, 'Normal'),
(68, 'Normal'),
(69, 'Ghost'),
(69, 'Poison'),
(70, 'Ghost'),
(70, 'Poison'),
(71, 'Ghost'),
(71, 'Poison'),
(72, 'Ghost'),
(73, 'Ghost'),
(74, 'Dark'),
(74, 'Flying'),
(75, 'Dark'),
(75, 'Flying'),
(76, 'Normal'),
(77, 'Normal'),
(78, 'Water'),
(79, 'Water'),
(80, 'Water'),
(80, 'Ground'),
(81, 'Water'),
(81, 'Ground'),
(82, 'Psychic'),
(83, 'Psychic'),
(84, 'Poison'),
(84, 'Dark'),
(85, 'Poison'),
(85, 'Dark'),
(86, 'Fighting'),
(86, 'Psychic'),
(87, 'Fighting'),
(87, 'Psychic'),
(88, 'Steel'),
(88, 'Psychic'),
(89, 'Steel'),
(89, 'Psychic'),
(90, 'Fire'),
(91, 'Fire'),
(92, 'Rock'),
(93, 'Rock'),
(94, 'Psychic'),
(95, 'Psychic'),
(96, 'Normal'),
(97, 'Normal'),
(98, 'Normal'),
(99, 'Normal'),
(100, 'Normal'),
(101, 'Normal'),
(102, 'Normal'),
(102, 'Flying'),
(103, 'Electric'),
(104, 'Electric'),
(105, 'Electric'),
(106, 'Normal'),
(106, 'Flying'),
(107, 'Normal'),
(107, 'Flying'),
(108, 'Ghost'),
(108, 'Dark'),
(109, 'Dragon'),
(109, 'Ground'),
(110, 'Dragon'),
(110, 'Ground'),
(111, 'Dragon'),
(111, 'Ground'),
(112, 'Normal'),
(113, 'Normal'),
(114, 'Psychic'),
(115, 'Fighting'),
(116, 'Fighting'),
(116, 'Steel'),
(117, 'Water'),
(117, 'Ground'),
(118, 'Water'),
(118, 'Ground'),
(119, 'Water'),
(119, 'Flying'),
(120, 'Water'),
(120, 'Flying'),
(121, 'Normal'),
(121, 'Psychic'),
(122, 'Ground'),
(123, 'Ground'),
(124, 'Normal'),
(125, 'Water'),
(126, 'Water'),
(127, 'Poison'),
(127, 'Bug'),
(128, 'Poison'),
(128, 'Dark'),
(129, 'Poison'),
(129, 'Fighting'),
(130, 'Poison'),
(130, 'Fighting'),
(131, 'Grass'),
(132, 'Water'),
(133, 'Water'),
(134, 'Water'),
(135, 'Water'),
(136, 'Water'),
(136, 'Poison'),
(137, 'Water'),
(137, 'Poison'),
(138, 'Water'),
(139, 'Water'),
(140, 'Water'),
(140, 'Flying'),
(141, 'Water'),
(141, 'Flying'),
(142, 'Grass'),
(142, 'Ice'),
(143, 'Grass'),
(143, 'Ice'),
(144, 'Dark'),
(144, 'Ice'),
(145, 'Dark'),
(145, 'Ice'),
(146, 'Psychic'),
(147, 'Psychic'),
(148, 'Psychic'),
(149, 'Steel'),
(149, 'Dragon'),
(150, 'Water'),
(150, 'Dragon'),
(151, 'Water'),
(152, 'Electric'),
(152, 'Ghost'),
(153, 'Ground'),
(153, 'Flying'),
(154, 'Ground'),
(154, 'Flying'),
(155, 'Rock'),
(156, 'Rock'),
(156, 'Steel'),
(157, 'Psychic'),
(158, 'Psychic'),
(159, 'Psychic'),
(160, 'Fighting'),
(160, 'Psychic'),
(161, 'Normal'),
(162, 'Normal'),
(163, 'Normal'),
(164, 'Water'),
(165, 'Electric'),
(166, 'Fire'),
(167, 'Psychic'),
(168, 'Dark'),
(169, 'Grass'),
(170, 'Ice'),
(171, 'Normal'),
(171, 'Flying'),
(172, 'Dragon'),
(172, 'Flying'),
(173, 'Normal'),
(174, 'Normal'),
(174, 'Flying'),
(175, 'Normal'),
(175, 'Flying'),
(176, 'Dark'),
(176, 'Fire'),
(177, 'Dark'),
(177, 'Fire'),
(178, 'Electric'),
(178, 'Steel'),
(179, 'Electric'),
(179, 'Steel'),
(180, 'Electric'),
(180, 'Steel'),
(181, 'Grass'),
(182, 'Grass'),
(183, 'Bug'),
(183, 'Flying'),
(184, 'Bug'),
(184, 'Flying'),
(185, 'Grass'),
(185, 'Flying'),
(186, 'Ground'),
(186, 'Rock'),
(187, 'Ground'),
(187, 'Rock'),
(188, 'Ground'),
(188, 'Rock'),
(189, 'Ghost'),
(190, 'Ghost'),
(191, 'Ghost'),
(192, 'Normal'),
(193, 'Normal'),
(194, 'Normal'),
(195, 'Bug'),
(195, 'Flying'),
(196, 'Bug'),
(196, 'Steel'),
(197, 'Electric'),
(198, 'Electric'),
(199, 'Electric'),
(200, 'Fire'),
(201, 'Fire'),
(202, 'Fire'),
(203, 'Ice'),
(203, 'Ground'),
(204, 'Ice'),
(204, 'Ground'),
(205, 'Ice'),
(205, 'Ground'),
(206, 'Ice'),
(207, 'Ice'),
(208, 'Ice'),
(208, 'Ghost'),
(209, 'Dark'),
(210, 'Ghost'),
(210, 'Dragon'),
