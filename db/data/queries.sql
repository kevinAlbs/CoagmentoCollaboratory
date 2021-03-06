CREATE TABLE IF NOT EXISTS `queries` (
  `queryID` int(11) NOT NULL AUTO_INCREMENT,
  `projectID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `stageID` int(11) DEFAULT NULL,
  `questionID` int(11) DEFAULT NULL,
  `query` text,
  `source` text,
  `url` text,
  `title` text,
  `timestamp` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `localTimestamp` bigint(20) DEFAULT NULL,
  `localDate` date DEFAULT NULL,
  `localTime` time DEFAULT NULL,
  `topResults` text,
  `manuallyRecovered` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`queryID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;