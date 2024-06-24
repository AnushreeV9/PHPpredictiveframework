CREATE TABLE `tasks` (
  `empid` varchar(100) NOT NULL,
  `taskname` varchar(100) NOT NULL,
  `taskid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tasks` (`empid`, `taskname`, `taskid`) VALUES
('223456', 'Task name performance optimization', '700'),
('234067', 'Statiscal Analysis', '702'),
('100634', 'Lead generation', '808'),
('678901', 'Privacy policy creation', '840'),
('789012', 'Scope verification', '902'),
('789012', 'Business process decision making', '1008'),
('901234', 'TechTrend', '1105'),
('123452', 'InsightHub', '1107'),
('86567814', 'DataSpark', '1113'),
('876543', 'InsightPeak', '1145'),
('4567896', 'Code Canvas', '1206'),
('100945', 'Pixel Pulse', '1212'),
('100795', 'Data Dynamo', '1291'),
('432109', 'Byte Blaze', '1297'),
('321098', 'Pixel Pulse', '1397'),
('210987', 'Stellar Spark', '1497'),
('511543223', 'SparkSprout', '1702'),
('568724', 'CodeCascade', '1795'),
('987012', 'SparkSpark', '1801'),
('246801', 'NexusNurture', '1880'),
('765890', 'CyberCraze', '1918'),
('654789', 'InsightInnovate', '1980'),
('543678', 'SynthSpectrum', '2086'),
('432567', 'CodeCascad', '2180'),
('321456', 'SparkSpark', '2186'),
('210345', 'SparkStream', '2384'),
('575602', 'DataDynasty', '2390'),
('98123', 'CodeCircuit', '2455'),
('987658', 'ByteBeam', '2469'),
('876345', 'InsightIntegrate', '2475'),
('589746', 'QuantumQuantum', '2569'),
('654123', 'Brush & Brust', '2669'),
('513317447', 'Creative Constellation', '2675'),
('100967', 'Streamline Spectrum', '2769'),
('462387', 'Methodology Mastery', '2775'),
('697805', 'Vehicle Number Plate Detection and Recognition Python', '2874'),
('7456782', 'Auto Capture Selfie by Detecting Smile Python', '2880'),
('130857', 'Patient Data Management System using Blockchain', '2961'),
('987980', 'Tour Recommender App Using Collaborative Filtering', '2973'),
('958241', 'Fingerprint based ATM System', '2979'),
('543234', 'College automation project', '3058'),
('98123', 'Mobile Quiz Through WiFi project', '3064'),
('210567', 'Wireless Master Joystick Controller for Robotics', '3158'),
('98789', 'Fully Automated Solar Grass Cutter', '3258'),
('987234', 'Solar Outdoor Air Purifier & Air Quality Monitor', '3358'),
('765456', 'Portable PPE kit Sterilizer Ozone + UV', '3364'),
('100829', 'Rhinestone', '3463'),
('514980782', 'RoyalHeaven', '3469'),
('210901', 'Nexus Nova', '3562'),
('163892', 'Tech Tonic ', '3568'),
('100833', 'Binary Beacon', '3640'),
('276519', 'Digital Dream', '3647'),
('98123', 'Insight Impact', '3653'),
('654678', 'Innovate Impact', '3740'),
('814273', 'Insight Infinity', '3747'),
('321345', 'Future Fusion ', '3753'),
('321901', 'Future Forge', '3840'),
('210012', 'Cloud Crest', '3847'),
('321098', 'Quantum Quill', '3853'),
('100993', 'Data Dynamo', '3940'),
('987567', 'Nexus Nova', '3947'),
('211011', 'Tech Tonic ', '3953'),
('210789', 'Data Dynamo', '4045'),
('307819', 'ByteBloom', '4052'),
('682305', 'InsightInsight', '4058'),
('470823', 'NexusNexa', '4151'),
('123452', 'ByteBlaze', '4157'),
('100850', 'CodeCraze', '4242'),
('100833', 'DataDynasty', '4342'),
('98456', 'DigitalDive', '4436'),
('987789', 'CyberCycle', '4442'),
('100634', 'DataDynasty', '4474'),
('765901', 'NexusNexa', '4536'),
('654012', 'ByteBlaze', '4542'),
('543123', 'ByteBound', '4641'),
('920381', 'InsightInfuse', '4647'),
('321345', 'CyberCentral', '4728'),
('210456', 'ByteBliss', '4740'),
('432012', 'InsightIntuition', '4746'),
('123452', 'NexusNexus', '4811'),
('100850', 'CodeCascade', '4825'),
('100833', 'SparkSpark', '4831'),
('372916', 'ByteBurst', '4916'),
('987789', 'DataDive', '4925'),
('567890', 'DigitalDomain', '4931'),
('654012', 'NexusNudge', '5031'),
('647293', 'InsightIntegrate', '5043');

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `empid` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`name`, `empid`, `email`, `phoneno`, `password`, `gender`) VALUES
('karthik', '0240', 'dasarikarthik559@gmail.com', '8885190228', 'BDs4922251@', 'male'),
('divya', '0241', 'divya@gmail.com', '6305415082', 'BDs4922251@', 'female'),
('anu', '0251', 'anu@gmail.com', '6309087082', 'BDs4934251@', 'female'),
('rahul', '0245', 'rahul@gmail.com', '8885190228', 'BDs47856751@', 'male'),;

CREATE TABLE `admin` (
  `employeeid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`employeeid`, `password`) VALUES
('54672', 'Amrita@2024');



ALTER TABLE `admin`
  ADD PRIMARY KEY (`employeeid`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`empid`);
