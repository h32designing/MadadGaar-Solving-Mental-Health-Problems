-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 09:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madadgaar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sfrf', 'abc@gmail.com', 'erewr', ''),
(2, 'sfrf', 'abc@gmail.com', 'erewr', 'wrferwer'),
(3, 'sfrf', 'abc@gmail.com', 'erewr', 'wrferwer'),
(4, 'fdfdf', 'ererr@gmail.com', 'ere', 'aers');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_in_groups`
--

CREATE TABLE `enrolled_in_groups` (
  `enrolled_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_in_groups`
--

INSERT INTO `enrolled_in_groups` (`enrolled_id`, `FirstName`, `LastName`, `Contact_No`, `email`, `city`, `country`, `group_id`) VALUES
(1, 'Muhammad', 'Hamza', '9807392738', 'hamza@gmail.com', 'Karachi', 'Pakistan', 6),
(2, 'xyz', 'zyx', '034747', 'xyz@gmail.com', 'Karachi', 'Pakistan', 7),
(3, 'Akhter', 'Ali', '03175000210', 'akhter123@gmail.com', 'Karachi', 'Pakistan', 7),
(4, 'Zeeshan', 'Ali', '03128665892', 'zeeshan@gmail.com', 'Karachi', 'Pakistan', 7),
(5, 'Kashif', 'Khan', '03467856300', 'kashif@gmail.com', 'Karachi', 'Pakistan', 11);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_in_schedule`
--

CREATE TABLE `enrolled_in_schedule` (
  `enrolled_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `peer_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_in_schedule`
--

INSERT INTO `enrolled_in_schedule` (`enrolled_id`, `user_id`, `peer_id`, `email`, `title`, `contact`, `date`, `time`, `day`) VALUES
(1, 1, 13, 'hamza@gmail.com', 'sdasdasd', '7628376', '2023-09-01', '00:30', 'friday'),
(2, 1, 3, 'hamza@gmail.com', 'dsd', '03152727273', '2023-08-31', '21:00', 'thursday'),
(3, 18, 4, 'xyz@gmail.com', 'yhfjhgf', '34234234', '2023-09-01', '18:00', 'friday'),
(4, 18, 4, 'xyz@gmail.com', 'books', '03467856300', '2023-09-04', '18:00', 'friday'),
(5, 18, 5, 'hamza@gmail.com', 'erewr', '03152727273', '2023-09-09', '23:21:00', 'saturday'),
(6, 21, 3, 'abch@gmail.com', 'sdsd', 'r354', '2023-09-04', '21:00:00', 'monday'),
(7, 21, 1, 'abch@gmail.com', 'Stress Solution', '03152727273', '2023-09-10', '18:00:00', 'sunday');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `title`, `description`, `name`) VALUES
(1, 'jhjdh', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'Muhammad Hamza'),
(2, 'wewe', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(3, 'wewe', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(4, 'rewR', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(5, 'rewR', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(6, 'rewR', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(7, 'wewe', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz'),
(8, 'wewe', 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_image` varchar(250) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `Source_of_communication` varchar(100) NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  `Strength` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Therapist_Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_image`, `Title`, `Description`, `Start_Date`, `Source_of_communication`, `Schedule`, `Strength`, `Duration`, `Therapist_Name`) VALUES
(6, 'group images/grou.jpg', 'Spirituality in Daily Life', 'A space to bring together free thinking & open minded individuals who are starting to feel or have a', '2023-08-31', 'Zoom', 'Every Sunday', 10, 6, 2),
(7, 'group images/grou2.png', 'Overcoming Dating Fatigue', 'This is a group workshop experience that helps you dismantle your relationship patterns and assess y', '2023-09-10', 'Zoom', 'Every Saturday 8:00pm', 10, 5, 2),
(8, 'group images/grou3.png', 'Dealing with Anxiety', 'A teaching-learning and discussion based group using CBT techniques for anxiety. ', '2023-09-27', 'Zoom', 'Every Friday 10:pm', 6, 4, 3),
(9, 'group images/grou4.png', 'Overthinkers Collective!', 'Understanding the tide of overthinking and creating a collective space to sail through by gentle nud', '2023-09-12', 'Zoom', 'Every Sunday 12:pm', 15, 4, 3),
(10, 'group images/grou5.png', 'Divorce or Separation', 'A therapeutic supportive space for individuals who are going through or have been through divorce/se', '2023-09-12', 'Zoom', 'Every Saturday 9:am', 8, 5, 4),
(11, 'group images/grou6.png', 'Conscious Coupling', 'A 4-session workshop for couples - build friendship, manage conflict and create shared meaning in yo', '2023-09-16', 'Zoom', 'Every Sunday 2:pm', 5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msd_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `msg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peer`
--

CREATE TABLE `peer` (
  `pid` int(11) NOT NULL,
  `pname` varchar(225) NOT NULL,
  `poccupation` varchar(225) NOT NULL,
  `pbirthday` date NOT NULL,
  `pgender` varchar(225) NOT NULL,
  `pemail` varchar(225) NOT NULL,
  `pno` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pmaritalstatus` varchar(225) NOT NULL,
  `plang` varchar(225) NOT NULL,
  `pcategory` varchar(225) NOT NULL,
  `ptherapy` varchar(225) NOT NULL,
  `pimage` varchar(400) NOT NULL,
  `pstatus` int(11) NOT NULL,
  `pkids` varchar(225) NOT NULL,
  `pbio` varchar(800) NOT NULL,
  `pcity` varchar(225) NOT NULL,
  `page` int(11) NOT NULL,
  `peducation` varchar(225) NOT NULL,
  `puniversity` varchar(225) NOT NULL,
  `psocialmedia` varchar(225) NOT NULL,
  `pmarketing` varchar(225) NOT NULL,
  `softdelete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peer`
--

INSERT INTO `peer` (`pid`, `pname`, `poccupation`, `pbirthday`, `pgender`, `pemail`, `pno`, `password`, `pmaritalstatus`, `plang`, `pcategory`, `ptherapy`, `pimage`, `pstatus`, `pkids`, `pbio`, `pcity`, `page`, `peducation`, `puniversity`, `psocialmedia`, `pmarketing`, `softdelete`) VALUES
(1, 'zulfiqar', 'Doctor', '2000-06-18', 'male', 'zulfiqar@gmail.com', '03128600020', 'zulfiqar123', 'Married', 'Urdu,English', 'Childhood Trauma', 'Yes', 'assets/img/3.jpg', 1, 'Yes', 'I am a specialist in good mental health because I am a specialist.', 'Karachi', 23, 'Masters', 'Karachi University', 'Facebook', 'Friend/Family', 0),
(3, 'Tanveerr', 'Copywriter', '2000-02-17', 'male', 'tanveer@gmail.com', '031527887', 'tanveer', 'Married', 'Urdu, English', 'Childhood Trauma', 'Yes', 'assets/img/1.jpg', 1, 'Yes', 'In 2020, my partner of 4 years broke up with me. Considering that I believed that my partner was the one for me, my best friend, and someone I wished to marry, it destroyed me. Coming to terms with that ï¿½ allowing myself to feel what I did, and a process of acceptance and self-reflection over time has changed me for the better. I feel like I have evolved as a person and that I understand myself quite well. I am also on good terms with my former partner, who remains one of my closest friends.', 'Karachi', 23, 'Undergraduate', 'NED', 'facebook.com', 'Friend/Family', 0),
(4, 'Rahim', 'HR professional', '1998-03-04', 'male', 'rahim@gmail.com', '031334879', 'rahim124', 'Married', 'Urdu, English, French', 'Childhood Trauma', 'Yes', 'assets/img/2.jpg', 1, 'Yes', 'My journey so far has been about healing through heartbreak, job failure and job loss, depression to winning at love, achieving promotion in a job and now helping people find their way in life. I believe everyone can heal with just right support.', 'Karachi', 25, 'Masters', 'FAST', 'instagram.com', 'Friend/Family', 0),
(5, 'Haris', ' Senior technical writer', '1998-03-19', 'male', 'haris@gmail.com', '03635657', 'haris12', 'Single', 'Urdu, English', 'Relationships', 'Yes', 'assets/img/3.jpg', 1, 'No', 'I had gone through a relationship breakup long time back which took years to move on. My life has changed totally after that, but my doubt was why am I so hurt when it is not my mistake. Felt that there was something wrong with my love and attachment.\r\n\r\nHowever, my spiritual journey helped me to become a more sorted person. I live a very simple and happy life now. Have decided to not have children.', 'Karachi', 25, 'Masters', 'FAST', 'instagram.com', 'Linkedin', 0),
(6, 'Saira', ' Soft Skills Trainer ', '1998-03-19', 'female', 'saira@gmail.com', '036767554', 'saira12', 'Seperated', 'Urdu, English, Germa ', 'Relationships', 'Yes', 'assets/img/4.jpg', 1, 'No', 'Went through a heartbreak and divorce after knowing him for 13 years. Was emotionally, mentally and physically abused. A depression and suicide survivor.\r\n\r\nPutting all my pieces together to be stronger than ever. Want to be the change. My mission being changing lives for as many people as possible for the better.', 'Lahore', 25, 'Masters', 'GIK', 'linkedin.com', 'Friend/Family', 0),
(7, 'Nimra', 'Marketing Associate', '2000-11-15', 'female', 'nimra@gmail.com', '036767554', 'nimra123', 'Single', 'Urdu, English', 'Relationships', 'No', 'assets/img/5.jpg', 1, 'No', 'Went through a breakup with my partner. My anxiety was taking a toll on me. Indulged in self harm. Was diagnosed with anxiety, BPD and CPTSD. Sought Professional help to work on the constant self doubt, managing my emotions so as to not feel on the extremes and learned to be kind to myself.', 'Islamabad', 22, 'Masters', 'FAST', 'linkedin.com', 'Facebook', 0),
(8, 'Sunny', 'Advocate', '1998-02-03', 'male', 'sunny@gmail.com', '0315788689', 'sunny12', 'Divorced', 'Urdu, English', 'Relationships', 'No', 'assets/img/6.jpg', 1, 'No', 'Divorced, and took it as an opportunity to know and learn more about myself. Being an advocate and handling a few divorce cases helped immensely. I understand that being divorced is still a taboo in India but personally it’s a chapter which was either make you or break you (physically, financially, psychologically).\r\nOvercame a sleeping disorder, a symptom of restless mind by practising meditation and not medication.', 'Lahore', 25, 'Masters', 'Dawood University', 'linkedin.com', 'Existing Peer', 0),
(9, 'Ali', 'Software Engineer', '1989-02-07', 'male', 'ali@gmail.com', '0315277431', 'ali123', 'Married', 'English', 'Deppression', 'Yes', 'assets/img/9.png', 0, 'Yes', 'I have experienced self-esteem and confidence issues due to childhood bullying, which led to a significant loss of confidence in myself. It was difficult for me to rebuild my self-esteem, but I worked hard to overcome my negative self-talk and feelings of worthlessness through therapy. Along the way, I also discovered my sexuality and went through a journey of accepting it, which brought its own set of challenges. Later on, I found myself in an extremely toxic relationship where I was being groomed, and it had a devastating impact on my mental health and self-worth. ', 'Karachi', 34, 'Bacehlors', 'Oxford', 'facebook.com', 'Instagram', 0),
(10, 'Jannat', ' L&D Specialist', '1989-02-07', 'male', 'janat@gmail.com', '0315277431', 'janat', 'Married', 'Urdu, English', 'Mental Health', 'No', 'assets/img/10.jpg', 0, 'Yes', 'Have struggled with people pleasing, fear of not being liked/ loved - feeling as if I would have to be everybody’s version of me, to enjoy anything in life.\r\n\r\nAt school, I remember a friend said to me once “how is it that you say exactly what they want to hear?”\r\nI thought that was a compliment.\r\nLater I went to therapy for it. Lol.', 'Karachi', 34, 'Bacehlors', 'Karachi University', 'facebook.com', 'Facebook', 0),
(11, 'Rohan', 'UX Designer, Researcher and Architect', '1999-10-19', 'male', 'rohan@gmail.com', '0315177431', 'rohan', 'Single', 'Urdu, English', 'Deppression', 'No', 'assets/img/12.jpg', 0, 'No', 'Went through a difficult time trying to manage ADHD, and RSD in college. Was extremely burnt out, demotivated and anxious after failing to convert interviews in the last round. Went from someone who was winning competitions at a global level to someone suffering from imposter syndrome and extremely low self-confidence. Eventually sought help through therapy, a psychiatrist and self-advocacy in order to accept who I am.', 'Karachi', 23, 'Bacehlors', 'Karachi University', 'facebook.com', 'Instagram', 0),
(12, 'Muhammad Hamza', 'software engineer', '2000-05-17', 'male', 'hamza21@gmail.com', '03152727273', 'hamza', 'Married', 'Urdu', 'Deppression', 'No', 'assets/img/14.jpg', 0, 'No', 'Hi, I am Chinmay Kapadia a Mechanical Engineer currently based in Abu Dhabi, UAE. In 2015, I faced obsessive-compulsive disorder, anxiety issues, and major depressive disorders and completely lost focus in my personal as well as professional life.', 'Lahore', 23, 'Bacehlors', 'FAST', 'facebook.com', 'Instagram', 0),
(13, 'Zeeshan', 'QC', '2005-01-01', 'male', 'zeeshan@gmail.com', '03128665892', '1234', 'Married', 'Urdu', 'Relationships', 'No', 'assets/img/gentle man5.jpg', 1, 'Yes', 'I am stuck in the problem of relationships.', 'Karachi', 18, 'Bacehlors', 'Karachi University', 'Facebook', 'Facebook', 0),
(14, 'Kashif', 'QC', '2005-01-01', 'male', 'kashif@gmail.com', '03128665892', '1248', 'Single', 'Urdu', 'Mental Health', 'No', 'assets/img/gentle man4.jpg', 1, 'Yes', 'I am stuck in the problem of Mental Health.', 'Karachi', 18, 'Bacehlors', 'Karachi University', 'Instagram', 'Instagram', 0),
(15, 'weqe', '2eawr', '2004-12-08', 'male', 'wewe@gmail.com', '2323', '1223', 'Married', 'erer', 'Childhood Trauma', 'Yes', 'assets/img/200-2000322_click-and-drag-to-re-position-the-image.png', 2, 'Yes', 'ererer', 'awrer', 18, 'Undergraduate', 'wreeqr', 'erer', 'Instagram', 0);

-- --------------------------------------------------------

--
-- Table structure for table `p_remarks`
--

CREATE TABLE `p_remarks` (
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `positive` int(11) NOT NULL,
  `negative` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_remarks`
--

INSERT INTO `p_remarks` (`rid`, `pid`, `total`, `positive`, `negative`) VALUES
(1, 1, 0, 0, 0),
(3, 1, 2, 1, 0),
(4, 3, 0, 0, 0),
(5, 4, 4, 3, 1),
(6, 5, 1, 1, 0),
(7, 6, 0, 0, 0),
(8, 7, 4, 3, 0),
(9, 8, 0, 0, 0),
(10, 9, 2, 0, 2),
(11, 10, 4, 2, 2),
(12, 11, 0, 0, 0),
(13, 12, 0, 0, 0),
(14, 13, 0, 0, 0),
(15, 14, 0, 0, 0),
(16, 15, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `peer_id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `peer_id`, `day`, `time`) VALUES
(1, 13, 'Monday,Thursday,Friday,', '00:30:00'),
(2, 3, 'Monday,Tuesday,Thursday,', '21:00:00'),
(3, 4, 'Monday,Thursday,Friday,Saturday,', '18:00:00'),
(4, 1, 'Monday,Sunday,', '18:00:00'),
(5, 5, 'Friday,Saturday,Sunday,', '23:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE `therapist` (
  `Therapist_id` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Expertise` varchar(50) NOT NULL,
  `License_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`Therapist_id`, `Image`, `name`, `age`, `qualification`, `Experience`, `Expertise`, `License_No`) VALUES
(2, 'assets/img/9.png', 'Muhammad Hamza', '26', 'MBBS', '2.5 Years', 'Relationship Issues', '387832'),
(3, 'assets/img/therap.jpg', 'Rehana Firdous', '28', 'Masters In Psychology', '2 Years', 'Deppresed Issues', 'e-676786'),
(4, 'assets/img/therap2.jpg', 'Komal Sheikh', '25', 'M.phil degree in Clinical and Counseling ', '2 Years', 'attachment-based, and relational framework ', 'k-87879');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(400) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `peer_status` int(11) NOT NULL DEFAULT 3,
  `softdelete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `user_image`, `name`, `F_name`, `email`, `Password`, `contact`, `Role`, `peer_status`, `softdelete`) VALUES
(1, '', 'Muhammad Hamza', 'Muhammad haroon', 'hamza@gmail.com', 'hamza', '03651650', 'Customer', 3, 0),
(2, '', 'Zeeshan', '', 'zeeshan@gmail.com', '1234', '03128665892', 'Peer', 1, 0),
(3, '', 'Kashif', '', 'kashif@gmail.com', '1248', '03128665892', 'Peer', 0, 0),
(4, 'assets/img/200-2000322_click-and-drag-to-re-position-the-image.png', 'Furqan', 'Irfan', 'furqan786@gmail.com', 'fur786', '03124785308', 'Admin', 3, 0),
(5, 'assets/img/gentle man3.jpg', 'Hamza', 'Haroon', 'hamza123@gmail.com', 'hamza123', '03127845602', 'Admin', 3, 0),
(6, 'assets/img/3.jpg', 'zulfiqar', '', 'zulfiqar@gmail.com', 'zulfiqar123', '03128600020', 'Peer', 1, 0),
(8, 'assets/img/1.jpg', 'Tanveerr', '', 'tanveer@gmail.com', 'tanveer', '031527887', 'Peer', 1, 0),
(9, 'assets/img/2.jpg', 'Rahim', '', 'rahim@gmail.com', 'rahim124', '031334879', 'Peer', 1, 0),
(10, '', 'Haris', '', 'haris@gmail.com', 'haris12', '03127845602', 'Peer', 1, 0),
(11, '', 'Saira', '', 'saira@gmail.com', 'saira12', '03151087622', 'Peer', 1, 0),
(12, '', 'Nimra', '', 'nimra@gmail.com', 'nimra123', '03127845602', 'Peer', 1, 0),
(13, '', 'Sunny', '', 'sunny@gmail.com', 'sunny12', '03151087622', 'Peer', 1, 0),
(14, '', 'Ali', 'Ahmed', 'ali@gmail.com', 'ali123', '03127845602', 'Peer', 0, 0),
(15, '', 'Jannat', 'Rehmat Ali', 'janat@gmail.com', 'janat', '03124785308', 'Peer', 0, 0),
(16, '', 'Rohan', 'Qadir Ahmed', 'rohan@gmail.com', 'rohan', '03124785308', 'Peer', 0, 0),
(17, '', 'Muhammad Hamza', 'Hamza Ahmed', 'hamza21@gmail.com', 'hamza', '03127845602', 'Peer', 0, 0),
(18, 'assets/img/42176655.jpg', 'xyz', 'zyx', 'xyz@gmail.com', 'xyz', '03308745213', 'Customer', 3, 0),
(19, 'assets/img/gentle man7.jpg', 'Adnan', 'Irfan', 'adnan@gmail.com', 'adnan786', '03308745213', 'Customer', 3, 0),
(20, 'assets/img/200-2000322_click-and-drag-to-re-position-the-image.png', 'weqe', '', 'wewe@gmail.com', '1223', '2323', 'Peer', 2, 0),
(21, '', 'hamza', 'haroon', 'abch@gmail.com', '123', '1213232', 'Customer', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enrolled_in_groups`
--
ALTER TABLE `enrolled_in_groups`
  ADD PRIMARY KEY (`enrolled_id`),
  ADD KEY `fk_group` (`group_id`);

--
-- Indexes for table `enrolled_in_schedule`
--
ALTER TABLE `enrolled_in_schedule`
  ADD PRIMARY KEY (`enrolled_id`),
  ADD KEY `peer_id` (`peer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `Leader(Therapist_Name)` (`Therapist_Name`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msd_id`),
  ADD KEY `user_id` (`email`);

--
-- Indexes for table `peer`
--
ALTER TABLE `peer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `p_remarks`
--
ALTER TABLE `p_remarks`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `peerremarks` (`pid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `peer_id` (`peer_id`);

--
-- Indexes for table `therapist`
--
ALTER TABLE `therapist`
  ADD PRIMARY KEY (`Therapist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrolled_in_groups`
--
ALTER TABLE `enrolled_in_groups`
  MODIFY `enrolled_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolled_in_schedule`
--
ALTER TABLE `enrolled_in_schedule`
  MODIFY `enrolled_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `peer`
--
ALTER TABLE `peer`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `p_remarks`
--
ALTER TABLE `p_remarks`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `Therapist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled_in_groups`
--
ALTER TABLE `enrolled_in_groups`
  ADD CONSTRAINT `fk_group` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

--
-- Constraints for table `enrolled_in_schedule`
--
ALTER TABLE `enrolled_in_schedule`
  ADD CONSTRAINT `enrolled_in_schedule_ibfk_2` FOREIGN KEY (`peer_id`) REFERENCES `peer` (`pid`),
  ADD CONSTRAINT `enrolled_in_schedule_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`userid`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`Therapist_Name`) REFERENCES `therapist` (`Therapist_id`);

--
-- Constraints for table `p_remarks`
--
ALTER TABLE `p_remarks`
  ADD CONSTRAINT `peerremarks` FOREIGN KEY (`pid`) REFERENCES `peer` (`pid`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`peer_id`) REFERENCES `peer` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
