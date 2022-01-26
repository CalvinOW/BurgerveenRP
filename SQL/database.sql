/* Table Users Aanmaken */

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `rankid` int(11) DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `rankid`) VALUES
(1, 'Admin', '$2y$10$7kx2HqMUFHLdSvd7eyNLAudz02GhHHsCdE7m2S27f.X0IzDqwkrnq', '2021-03-18 12:50:37', 3);

/* Table Nieuws Aanmaken */
CREATE TABLE `nieuws` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `nieuws` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `author` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Table Role Permissions Aanmaken */
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `rankid` int(11),
  `can_access_admin` int(11) DEFAULT 0,
  `can_access_sollicitaties` int(11) DEFAULT 0,
  `can_access_appeals` int(11) DEFAULT 0,
  `can_access_nieuws` int(11) DEFAULT 0,
  `can_access_regels` int(11) DEFAULT 0,
  `can_access_updates` int(11) DEFAULT 0,
  `role_naam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `permissions` (`id`, `rankid`, `can_access_admin`, `can_access_sollicitaties`, `can_access_appeals`, `can_access_nieuws`, `can_access_regels`, `can_access_updates`, `role_naam`) VALUES
(1, 3, 1, 1, 1, 1, 1, 1, 'Admin'),
(2, 2, 1, 0, 0, 1, 0, 0, 'Nieuws Reporter'),
(3, 1, 0, 0, 0, 0, 0, 0, 'Gebruiker');

/* Aanmaken Table Updates */
CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `updates` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `author` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO updates (`id`, `titel`, `updates`, `created_at`, `author`) VALUES ('1', 'Burgerveen Website', 'Vandaag zijn er weer een aantal wijzigingen doorgevoerd op onze website. Bekijk deze snel!', '2021-03-18 12:50:37', 'Admin');

/* Aanmaken Jobs Table */
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_titel` varchar(25) NOT NULL,
  `beroep` varchar(25) NOT NULL,
  `job_desc` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `enabled` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Aanmaken Sollicitaties Table */
CREATE TABLE `sollicitaties` (
  `id` int(11) NOT NULL,
  `Burgernaam` varchar(50) NOT NULL,
  `Discord` varchar(50) NOT NULL,
  `job_titel` varchar(25) NOT NULL,
  `beroep` varchar(25) NOT NULL,
  `waarom` varchar(255) DEFAULT NULL,
  `motivatie` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jobs` (`id`, `job_titel`, `beroep`, `job_desc`, `enabled`) VALUES
('1', 'Agent', 'politie', 'Denk jij het in je te hebben om Agent te worden bij ons Hoofdbureau? Solliciteer dan snel!', '1');

/* Alter Tables */
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sollicitaties`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nieuws`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sollicitaties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `nieuws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;